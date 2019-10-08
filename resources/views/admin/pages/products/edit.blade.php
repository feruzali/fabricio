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
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-3">

                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Изображение-превью</h3>
                    </div>
                    <div class="block-content block-content-full text-center bg-info-lighter">
                        <div class="input_file">
                            <div class="remove" style="display: none;">Удалить</div>
                            <input type="file" accept="image/*" class="form-control input_file__input" name="img" id="imgInp">
                            <div class="input_file__text">
                                <div class="input_file_text_first select">Выбрать</div>
                            </div>
                        </div>
                        <img id="blah" src="#" alt="your image" style="width: 200px;display: none;"/>
                    </div>
                </div>


                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">
                            Галерея
                        </h3>
                    </div>

                    <div class="block-content block-content-full text-center bg-info-lighter">
                        <div class="input_file">
                            <input accept="image/*" type="file" class="form-control" name="file[]" id="gallery-photo-add" multiple />
                        </div>
                        <div class="gallery"></div>
                    </div>
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
                                    <input class="form-control" type="text" id="ru_title" name="ru_title" value="{{ $product->ru_title }}">
                                    <label for="ru_title">Заголовок</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="number" id="price" name="price" value="{{ $product->price }}">
                                    <label for="price">Цена</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-material">
                                    <textarea class="form-control" id="ru_description" name="ru_description">{{ $product->ru_description }}</textarea>
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





                        <div class="tab-pane active" id="wizard-simple2-step1" role="tabpanel">
                            <div class="form-group char-container" style="margin-bottom: 0;">
                                @if(count($common) != 0)
                                    @for($i = 0; $i < count($common[0]); $i++)
                                        <div class='row char-elem100{{ $i }}' style='margin-bottom: 10px;margin-left: 0;margin-right: 0;'>
                                            <div class='col-md-3'><input name='charTitle[]' value="{{ (isset($common[0][$i])) ? $common[0][$i] : '' }}" class='form-control char-title' type='text' placeholder='Введите название для характеристики...'></div>
                                            <div class='col-md-3'><input name='charValue[]' value="{{ (isset($common[1][$i])) ? $common[1][$i] : '' }}" class='form-control char-value' type='text' placeholder='Введите значение для характеристики...'></div>
                                            <div class='col-md-3'><span class=' form-control btn btn-primary char-btn' onclick='removeBlock(100{{ $i }})'> Удалить </span></div>
                                        </div>
                                    @endfor
                                @endif
                            </div>
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

                        <div class="form-group">
                            <div class="col-xs-8">
                                {!! Form::label('faq_id', 'Выберите загрузки к товару:',['class'=>' control-label']) !!}
                                <select name="faq_id" class="form-control">
                                    <option value="0">
                                        Выберите значение...
                                    </option>
                                    @foreach($faqs as $faq)
                                        @if($faq->id == $product->download_id)
                                            <option selected value="{{$faq->id}}">{{$faq->title}}</option>
                                        @else
                                            <option value="{{$faq->id}}">
                                                {{$faq->title}}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <!-- END Step 3 -->
                    </div>
                    <?php $i = 1; ?>
                    @foreach($gallary as $image)
                        @if($image->product_id == $product->id)
                            @if($i == 1)
                                <div class="row">
                                    @endif
                                    <div class="col-md-4">
                                        <div class="box">
                                            <div class="box-body">
                                                <img style="width: 100%" src="{{ asset('uploads/' . $image->img) }}" alt="">
                                            </div>
                                            <div class="box-footer">
                                                <a href="{{ route('custom.ImageDelete', [$image->id, $product->id]) }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    @if($i == 3)
                                </div>
                            <?php $i = 1; ?>
                        @else
                            <?php $i++; ?>
                        @endif
                    @endif
                @endforeach
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

    </script>
@endsection