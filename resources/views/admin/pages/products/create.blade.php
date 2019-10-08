@extends('admin.layouts.app')

@section('css')
    <style>
        .show-password{
            cursor: pointer;
        }
        .save_button{
            position: absolute;
            top: 85%;
            right: 3%;
        }
        .input_file{
            border: 1px solid #26c6da;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            position: relative;
            color: #26c6da;
        }
        .input_file__text{
            overflow: hidden;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
        }
        .input_file__input{
            position: absolute;
            opacity: 0;
            z-index: 2;
        }
        .remove{
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 35%;
            text-align: right;
            padding-right: 10px;
            padding-top: 3px;
            z-index: 3;
            cursor: pointer;
            background-color: #26c6da;
            color: #fff;
        }
        .gallery > img {
            margin-top: 15px!important;
        }
    </style>
@endsection

@section('content')
    <!-- Material Design -->
    <h2 class="content-heading">Создание</h2>
    @if($errors->any())
        <div class="row">
            <div class="col-md-12 mb-3">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Картинка-превью</h3>
                    </div>
                    <div class="block-content block-content-full text-center bg-info-lighter">
                        <div class="input_file">
                            <div class="remove" style="display: none;">Удалить</div>
                            <input id="imgInp" accept="image/*" type="file" class="form-control input_file__input" name="preview_image">
                            <div class="input_file__text">
                                <div class="input_file_text_first select">Выбрать</div>
                            </div>
                        </div>
                        <img id="blah" src="#" alt="your image" style="width: 200px;display: none;"/>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Галерея</h3>
                    </div>
                    <div class="block-content block-content-full text-center bg-info-lighter">
                        <div class="input_file">
                            <div class="remove" style="display: none;">Удалить</div>
                            <input id="gallery-photo-add" multiple accept="image/*" type="file" class="form-control input_file__input" name="file[]">
                            <div class="input_file__text">
                                <div class="input_file_text_first select">Выбрать</div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center;" class="gallery"></div>
                </div>
            </div>



            <div class="col-md-9">
                <div class="js-wizard-simple block">
                    <!-- Step Tabs -->
                    <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#wizard-simple2-step1" data-toggle="tab">1. Рус</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->

                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-simple2-step1" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="ru_title" name="ru_title" value="{{ old('ru_title') }}">
                                    <label for="ru_title">Заголовок</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="css-control css-control-secondary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator">
                                    
                                </span> 
                                Открыть доступ не зарегестрированным пользователям
                            </label>
                            </div>

                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="number" id="price" name="price" value="{{ old('price') }}">
                                    <label for="price">Цена</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-material">
                                    <textarea class="form-control" id="ru_description" name="ru_description">{{ old('ru_description') }}</textarea>
                                    <label for="ru_description">Описание</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <div class="form-material floating">
                            <select class="form-control" id="material-select2" name="category_id">
                                <option value="0" selected>-- нет --</option>
                                @foreach($categories as $category_list)
                                    <option value="{{ $category_list->id }}">{{ $category_list->ru_title }}</option>
                                    @if($category_list->hasChildren())
                                        @include('admin.pages.categories.components.categories', ['dilimiter' => '---', 'category' => $category_list])
                                    @endif
                                @endforeach
                            </select>
                            <label for="material-select2">Родительская категория</label>
                        </div>
                        
                        
                        <div class="form-material floating">
                            <select class="form-control" id="material-select2" name="brand_id">
                                <option value="0" selected>-- нет --</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->title }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="material-select2">Бренд продукта</label>
                        </div>





                        <div class="tab-pane active" id="wizard-simple2-step1" role="tabpanel">
                            <div class="col-xs-8" style="margin-top: 10px;margin-bottom: 10px;">
                                <button class="add-form btn btn-primary" style="margin-bottom: 10px;">
                                    Добавить характеристику
                                </button>

                                <div class="char-content">

                                </div>
                            </div>
                        </div>

                        <!-- END Step 3 -->
                    </div>

                    <!-- END Steps Content -->
                    <!-- END Form -->
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="block pb-3">
                    <div class="block-content text-right">
                        <button class="btn btn-info">Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('js')
    <script>
        $(document).ready(function(){


            $('.add-form').click(function (e) {
                e.preventDefault();
                counter++;
                let charTitle = "<div class='row char-elem" + counter + "' style='margin-bottom: 10px;'>";
                charTitle += "<div class='col-md-3'><input name='charTitle[]' class='form-control char-title' type='text' placeholder='Введите название для характеристики...'></div>";
                charTitle += "<div class='col-md-3'><input name='charValue[]' class='form-control char-value' type='text' placeholder='Введите значение для характеристики...'></div>";
                charTitle += "<div class='col-md-3'><span class=' form-control btn btn-primary char-btn' onclick='removeBlock(" + counter + ")'> Удалить </span></div>";
                charTitle += "</div>";
                $('.char-content').append(charTitle);
            });


            function removeBlock(counter) {
                $('.char-elem' + counter).remove();
            }
            var counter = 0;

            function readURL(input, id) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(id).attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this, '#blah');
                $('#blah').attr('style', 'display: block;width:200px;');
            });


            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img style="width: 200px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });

    </script>
@endsection