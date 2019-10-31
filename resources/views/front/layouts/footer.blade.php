<section class="feedback" id="feedback">
    <div class="container">
        <h2 class="section-title">Оставить заявку</h2>

        <div class="row">

            <div class="offset-xl-0 offset-lg-1 col-md-8 col-10">
                <div class="form-wrapper">
                    <h4 class="form-wrapper__title">Остались вопросы?</h4>
                    <div class="form-wrapper__subtitle">Отправьте их нам!</div>
                    <form action="{{ route('feedback.create') }}" method="post">
                        @csrf
                        <input type="text" name="name" required placeholder="Ваше имя">
                        <input type="email" name="email" placeholder="Ваш e-mail">
                        <input type="tel" name="phone_number" required placeholder="Ваш номер">
                        <textarea name="question" id="" cols="50" rows="4" placeholder="Ваш вопрос"></textarea>
                        <button class="form__btn" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
            <!-- /.col-8 -->

            <div class="offset-xl-0 col-xl-4 col-lg-6 offset-md-3 col-md-7 offset-sm-1 col-sm-9 offset-1 col-10">
                <div class="contacts">
                    <h4 class="contacts__title">Наши контакты</h4>
                    <div class="contacts__subtitle">Позвоните нам!</div>
                    <div class="contacts__block">
                        <div class="contacts__time-img"></div>
                        <div class="contacts__time">{{$contact->time}}</div>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__mail-img"></div>
                        <div class="contacts__mail"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></div>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__geo-img"></div>
                        <div class="contacts__geo">{{$contact->address}}</div>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__phone-img"></div>
                        <div class="contacts__phone">{{$contact->number}}</div>
                    </div>
                </div>
                <!-- /.contacts -->
            </div>
            <!-- /.col-4 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#feedback.feedback -->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-6">
                <div class="copyright">
                    &copy;Права защищены
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-4 col-6">
                <div class="vid">
                    Сайт создан в <a href="https://vid.uz"> Vid.uz</a>
                </div>
            </div>
            <!-- /.col -->

            <div class="offset-md-0 col-md-4 offset-3 col-4">
                <div class="socials">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-youtube-play"></i>
                    <i class="fa fa-paper-plane"></i>
                </div>
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('front/js/stepper.min.js') }}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
<script src="{{asset('front/js/uikit.min.js')}}"></script>
<script src="{{ asset('front/js/uikit-icons.min.js') }}"></script>
@yield('js')
</body>
</html>
