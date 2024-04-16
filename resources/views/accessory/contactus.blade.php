@extends('/include/layout')
@section('title', 'myteam | contact')
@section('style')
{{asset('css/aboutstyle.css')}}
@endsection
@section('content')
<div class="mobileNav" id="mobileNav">
        <div class="mobileNav__darkBg"></div>
        <div class="mobileNav__menu" id="menu">
            <div class="mobileNav__toggle" id="toggleOff"><img src="./Saved Pictures/photo_2020-12-25_08-17-23.jpg" alt=""></div>
            <ul class="mobileNav__nav">
                <li><a href="{{route('home.get')}}">home</a></li>
                <li><a href="{{route('aboutus.get')}}">about</a></li>
            </ul>
            <a href="{{route('contactus.get')}}" class="mobileNav__button buttons">contact us</a>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact">
        <div class="l-container">

            <header class="header">
                <div class="header__nav">
                    <a href="index.html"><img class="header__logo" src="./img/photo_2020-12-25_08-17-23.jpg" id="hh2" alt="My team logo"></a>
                    <ul class="header__navBar">
                        <li><a href="{{route('home.get')}}" class="header__link">home</a></li>
                        <li><a href="{{route('aboutus.get')}}" class="header__link">about</a></li>
                    </ul>
                </div>
                <a href="{{route('contactus.get')}}" class="header__button buttons">contact us</a>
                <img src="./img/icon-hamburger.svg" alt="" class="header__toggle" id="toggleOn">
            </header>

            <div class="contact__content">
                <div class="contact__left">
                    <h1 class="contact__title">Contact</h1>
                    <h2 class="contact__subtitle">Ask us about</h2>
                    <div class="contact__list">
                        <div class="contact__item">
                            <img src="./img/icon-person.svg" alt="" class="contact__img contact__img--first">
                            <p class="contact__paragraph">The quality of our talent network</p>
                        </div>
                        <div class="contact__item">
                            <img src="./img/icon-cog.svg" alt="" class="contact__img">
                            <p class="contact__paragraph">Usage & implementation of our software</p>
                        </div>
                        <div class="contact__item">
                            <img src="./img/icon-chart.svg" alt="" class="contact__img">
                            <p class="contact__paragraph">How we help drive innovation</p>
                        </div>
                    </div>
                </div>
                <div class="contact__right">
                    <form action="" class="contact__form">
                        <div class="contact__div">
                            <label for="name" class="contact__label"></label>
                            <input name="name" id="name" type="text" class="contact__input" placeholder="Name">
                            <small></small>
                        </div>
                        <div class="contact__div">
                            <label for="email" class="contact__label"></label>
                            <input name="email" id="email" type="text" class="contact__input" placeholder="Email Adress">
                            <small></small>
                        </div>
                        <div class="contact__div">
                            <label for="company" class="contact__label"></label>
                            <input name="company" id="company" type="text" class="contact__input" placeholder="Company Name">
                            <small></small>
                        </div>
                        <div class="contact__div">
                            <label for="title" class="contact__label"></label>
                            <input name="title" id="title" type="text" class="contact__input" placeholder="Title">
                            <small></small>
                        </div>
                        <div class="contact__div">
                            <label for="message" class="contact__label"></label>
                            <textarea name="message" id="message" type="text" class="contact__input" placeholder="Message"></textarea>
                            <small></small>
                        </div>

                        <button type="submit" class="buttons buttons--secondary contact__submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <img src="./img/bg-pattern-about-2-contact-1.svg" alt="" class="contact__watermark contact__watermark--1">
        <img src="./img/bg-pattern-contact-2.svg" alt="" class="contact__watermark contact__watermark--2">
    </section>

    <!---------------------->
    <!-- Footer Section -->
    <section class="footer">
        <div class="l-container">
            <div class="footer__content">
                <div class="footer__left">
                    <div class="footer__nav">
                        <img src="./img/logo.svg" alt="" class="footer__logo">
                        <ul class="footer__navBar">
                            <li><a href="{{route('home.get')}}" class="footer__link">home</a></li>
                            <li><a href="{{route('aboutus.get')}}" class="footer__link">about</a></li>
                        </ul>
                    </div>

                    <div class="footer__contact"> 
                        <p>Arsi University</p>
                        <p>Asella Ethiopia</p>
                        <p>Call us: 098-689-2685</p>
                    </div>
                </div>
                
                <div class="footer__socials">
                    <ul class="footer__socialsIcon">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="#FFF" d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z" class="footer__socialsLink"/></svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="#FFF" d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" class="footer__socialsLink"/></svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z" class="footer__socialsLink"/></svg></a></li>
                    </ul>
                    <p>Copyright 2021. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script src="{{asset('js/toggleMenu.js')}}"></script>
@endsection