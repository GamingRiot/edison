@extends('layout.home')
@section('content')

    <body style="position: relative;min-height: 100vh;background: linear-gradient(180deg, #000000 0%, #1E1E1E 100%);">
        <x-navbar />
        <br><br>

        <!-- this is audio, autoplay doesnot work on chrome ,just edge! -->
        <audio controls autoplay hidden>
            <source src="Background Music for Car Commercial & Advertising - DEMO 128 kbps.ogg" type="audio/ogg">
            <source src="Background Music for Car Commercial & Advertising - DEMO 128 kbps.mp3" type="audio/mpeg">
        </audio>
        <br>
        <header class="header-container">
            <h2>What We Are</h2>
            <p>Edison is accelerating the world's transition to sustainable energy with electric cars, solar and integrated
                renewable energy solutions for homes and businesses.
            </p>
        </header>
        <div class="who-we-are ">
            <h2>Who We Are</h2>
            <div class="who-we-are__card-container">
                <div class="who-we-are__card">
                    <a href="#"><img class="zoom imgprofile" src="{{ asset('images/sampu.jpg') }}" alt="Sampu Verma"></a>
                    <h4>Sampan Verma</h4>
                    <p>21, Co Founder</p>
                    <p><a href="#"><img class="svgs" src="{{ asset('images/linkedin.svg') }}" alt="Not supported"
                                height="40" width="40"></a>
                        <a href=""><img class="svgs" src="{{ asset('images/github.svg') }}" alt="Not supported"
                                height="40" width="40"></a>
                    </p>

                </div>
                <div class="who-we-are__card">
                    <a href="http://mohitmahajan.in/#main"><img class="zoom imgprofile"
                            src="{{ asset('images/newimgme.jpeg') }}" alt="Mo"></a>
                    <h4>Mohit Mahajan</h4>
                    <p>21, Co Founder</p>
                    <p>
                        <a href="#"><img class="svgs" src="{{ asset('images/linkedin.svg') }}" alt="Not supported"
                                height="40" width="40"></a>
                        <a href="#"><img class="svgs" src="{{ asset('images/github.svg') }}" alt="Not supported"
                                height="40" width="40"></a>
                    </p>
                </div>
            </div>
        </div><br><br>

        <!-- footer/last line -->
        <p class="frtop">
            All Rights Reserved. Established Since 2021
        </p>

        <!-- js starts -->
        <script>
            const body = document.querySelector("body");
            const navbar = document.querySelector(".navbar");
            const menuBtn = document.querySelector(".menu-btn");
            const cancelBtn = document.querySelector(".cancel-btn");
            menuBtn.onclick = () => {
                navbar.classList.add("show");
                menuBtn.classList.add("hide");
                body.classList.add("disabled");
            }
            cancelBtn.onclick = () => {
                body.classList.remove("disabled");
                navbar.classList.remove("show");
                menuBtn.classList.remove("hide");
            }
            window.onscroll = () => {
                this.scrollY > -0 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
            }

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

    @endsection
