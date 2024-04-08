@extends('layout')
@section('title','myteam | about')
@section('style')
{{asset('css/aboutstyle.css')}}
@endsection
@section('content')
<div class="mobileNav" id="mobileNav">
        <div class="mobileNav__darkBg"></div>
        <div class="mobileNav__menu" id="menu">
            <div class="mobileNav__toggle" id="toggleOff"><img src="{{asset('img/photo_2020-12-25_08-17-23.jpg')}}" alt=""></div>
            <ul class="mobileNav__nav">
                <li><a href="{{route('home.get')}}">home</a></li>
                <li><a href="{{route('aboutus.get')}}">about</a></li>
            </ul>
            <a href="{{route('contactus.get')}}" class="mobileNav__button buttons">contact us</a>
        </div>
    </div>

    <!-- About Section -->
    <section class="about">
        <div class="l-container">
            <header class="header">
                <div class="header__nav">
                    <a href="index.html"><img class="header__logo" id="hh1"src="./img/photo_2020-12-25_08-17-23.jpg" alt="My team logo"></a>
                    <ul class="header__navBar">
                        <li><a href="{{route('home.get')}}" class="header__link">home</a></li>
                        <li><a href="{{route('aboutus.get')}}" class="header__link">about</a></li>
                    </ul>
                </div>
                <a href="{{route('contactus.get')}}" class="header__button buttons">contact us</a>
                <img src="./img/icon-hamburger.svg" alt="" class="header__toggle" id="toggleOn">
            </header>

            <div class="about__content">
                <h1 class="about__title">About</h1>
                <div class="about__subcontent">
                    <div class="about__line"></div>
                    <div class="about__subtitle">We help companies build dynamic teams made up of top global talent. Using our network of passionate professionals we drive innovation and deliver incredible outcomes. Talented, diverse teams shape the best products and experiences. We’ll bring those teams to you.</div>
                </div>
            </div>
        </div>

        <img src="{{asset('img/bg-pattern-about-1-mobile-nav-1.svg')}}" alt="" class="about__img">
    </section>

    <!-------------------->
    <!-- Team Section -->

    <section class="team">
        <div class="l-container l-container--padding">
            <div class="team__content">
                <h2 class="team__title">Meet the directors</h2>
                <div class="team__grid">
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-nikita.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">Abel boke</h3>
                                    <p class="team__job">html and css Expert</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">Abel boke</h3>
                                    <p class="team__quote">“It always amazes me how much talent there is in every corner of the globe.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-christian.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">sultan sh</h3>
                                    <p class="team__job">Co-founder & instructor</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">sultan sh</h3>
                                    <p class="team__quote">“Distributed teams required unique processes. You need to approach work in a new way.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-cruz.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">Marenew simegew</h3>
                                    <p class="team__job">html and css Expert</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">marenew simegew</h3>
                                    <p class="team__quote">“Technology is at the forefront of enabling distributed teams. That's where we come in.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-drake.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">Awel husien</h3>
                                    <p class="team__job">Database expert</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">Awel hussienn</h3>
                                    <p class="team__quote">“Hiring similar people from similar backgrounds is a surefire way to stunt innovation.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-griffin.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">Efrem Girma</h3>
                                    <p class="team__job">Head of talent</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">Efrem Girma</h3>
                                    <p class="team__quote">“Unique perspectives shape unique products, which is what you need to survive these days.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    <div class="team__item">
                        <div class="team__inner">
                            <div class="team__carousel">
                                <div class="team__person">
                                    <img src="{{asset('img/avatar-aden.jpg')}}" alt="" class="team__photo">
                                    <h3 class="team__name">Ahmed kedir</h3>
                                    <p class="team__job">Database expert</p>
                                </div>

                                <div class="team__socials">
                                    <h3 class="team__name">Ahmed kedir</h3>
                                    <p class="team__quote">“Empowered teams create truly amazing products. Set the north star and let them follow it.”</p>
                                    <ul class="team__links">
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="20"><path class="team__link" fill="#FFF" d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"/></svg></a></li>
                                        <li><a href="#"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="team__link" fill="#FFF" d="M18 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM6 17H3V8h3v9zM4.5 6.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM17 17h-3v-5.3c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V17H8V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/></svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__toggle" id="toggle1"><img src="{{asset('img/icon-cross.svg')}}" alt=""></div>
                    </div>
                    
                    
                   
                </div>
            </div>
        </div>

        <img src="{{asset('img/bg-pattern-about-2-contact-1.svg')}}" alt="" class="team__watermark team__watermark--1">
        <img src="{{asset('img/bg-pattern-home-4-about-3.svg')}}" alt="" class="team__watermark team__watermark--2">
    </section>

    <!-------------------->
    <!-- Clients Section -->

    <section class="client">
        <div class="l-container">
            <div class="client__content">
                <h2 class="client__title">Some of our clients</h2>
                <div class="client__logos">
                    <div class="client__logo">
                        <img src="{{asset('img/logo-the-verge.png')}}" alt="">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('img/logo-jakarta-post.png')}}" alt="">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('img/logo-the-guardian.png')}}" alt="">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('img/logo-tech-radar.png')}}" alt="">
                    </div>
                    <div class="client__logo client__logo--mini">
                        <img src="{{asset('img/logo-gadgets-now.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <img src="{{asset('img/bg-pattern-about-4.svg')}}" alt="" class="client__watermark">
    </section>

    <!---------------------->
    <!-- Call To Action Section -->
    <section class="cta">
        <div class="l-container l-container--padding">
            <div class="cta__content">
                <h2 class="cta__title">Ready to get started?</h2>
                <a href="contact.html" class="buttons buttons--dark">contact us</a>
            </div>
        </div>
        <img src="{{asset('img/bg-pattern-home-6-about-5.svg')}}" alt="" class="cta__img">
    </section>
    <!---------------------->
    <!-- Footer Section -->
    <section class="footer">
        <div class="l-container">
            <div class="footer__content">
                <div class="footer__left">
                    <div class="footer__nav">
                        <img src="{{asset('img/logo.svg')}}" alt="" class="footer__logo">
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
    @section('script')
    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/toggleMenu.js')}}"></script>
    @endsection