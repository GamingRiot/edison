@extends('layout.home')

@section('content')

    <body style="position: relative;min-height: 100vh;background: linear-gradient(180deg, #000000 0%, #1E1E1E 100%);">
        <x-navbar />
        <br><br>
        <!-- Flickity HTML init -->
        <br><br><br><br>
        <div class="carousel js-flickity">

            <div class="carousel-cell">
                <img src="{{ asset('images/ferrn.png') }}" alt="red ferrari" usemap="#fer" />
                <map name="fer">
                    <area shape="rect" coords="4,64,526,322" alt="Computer" href="carspecificatonpage.html">
                    <area shape="rect" coords="335,11,347,23" alt="Computer" href="./resources/images/redffc.jpg">
                    <area shape="rect" coords="355,11,367,23" alt="Computer" href="./resources/images/blueffc.jpg">
                    <area shape="rect" coords="376,12,387,23" alt="Computer" href="./resources/images/greenffc.jpg">
                    <area shape="rect" coords="395,11,408,24" alt="Computer" href="./resources/images/yellowffc.jpg">
                    <area shape="rect" coords="415,11,427,24" alt="Computer" href="./resources/images/blackffc.jpg">
                </map>
            </div>

            <div class="carousel-cell">
                <img src="{{ asset('images/blue mazerrati.png') }}" alt="maserati" usemap="#maser" />
                <map name="maser">
                    <area shape="rect" coords="26,74,524,333" alt="Computer" href="maseratipage.html">
                    <area shape="rect" coords="317,11,330,25" alt="Computer" href="./resources/images/masrfc.jpg">
                    <area shape="rect" coords="338,11,350,24" alt="Computer" href="./resources/images/maserbfc.jpeg">
                    <area shape="rect" coords="356,10,411,25" alt="Computer" href="./resources/images/masergfc.jpg">
                    <area shape="rect" coords="377,11,391,26" alt="Computer" href="./resources/images/masergfc.jpg>
                                                          <area shape=" rect" coords="397,10,411,25" alt="Computer"
                        href="./resources/images/maserblfc.jpg">
                </map>
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('images/nissan.png') }}" alt="look-out" usemap="#niss" />
                <map name="niss">
                    <area shape="rect" coords="4,76,468,328" alt="Computer" href="nissanpersonalpage.html">
                    <area shape="rect" coords="307,12,321,24" alt="Computer" href="./resources/images/nisr.jpg">
                    <area shape="rect" coords="327,11,340,24" alt="Computer" href="./resources/images/nisb.jpg">
                    <area shape="rect" coords="348,12,361,25" alt="Computer" href="./resources/images/nisg.jpg">
                    <area shape="rect" coords="366,12,381,26" alt="Computer" href="./resources/images/nisy.jpg">
                    <area shape="rect" coords="388,12,402,25" alt="Computer" href="./resources/images/nisbl.jpg">
                </map>
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('images/astonblack.png') }}" alt="One World Trade" usemap="#mase" />
                <map name="mase">
                    <area shape="rect" coords="5,74,497,318" alt="Computer" href="astoenpage.html">
                    <area shape="rect" coords="305,11,317,24" alt="Computer" href="./resources/images/mr.png">
                    <area shape="rect" coords="325,10,338,25" alt="Computer" href="./resources/images/mb.jpg">
                    <area shape="rect" coords="345,12,357,25" alt="Computer" href="./resources/images/mg.jpg">
                    <area shape="rect" coords="366,11,378,24" alt="Computer" href="./resources/images/my.jpg">
                    <area shape="rect" coords="388,12,398,25" alt="Computer" href="./resources/images/mbl.jpg">
                </map>
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('images/lambo.png') }}" alt="drizzle" usemap="#lamb" />
                <map name="lamb">
                    <area shape="rect" coords="4,84,529,325" alt="Computer" href="lambopersonalpage.html">
                    <area shape="rect" coords="331,12,344,26" alt="Computer" href="./resources/images/redlambo.jpg">
                    <area shape="rect" coords="351,12,363,27" alt="Computer" href="./resources/images/bluelambo.jpg">
                    <area shape="rect" coords="371,13,383,27" alt="Computer" href="./resources/images/greenlambo.jpg">
                    <area shape="rect" coords="391,12,403,27" alt="Computer" href="./resources/images/yellowlambo.jpg">
                    <area shape="rect" coords="411,13,424,27" alt="Computer" href="./resources/images/blacklambo.jpg">
                </map>
            </div>
        </div>


        <!-- this is audio, autoplay doesnot work on chrome ,just edge! -->
        <audio controls autoplay hidden>
            <source src="Background Music for Car Commercial & Advertising - DEMO 128 kbps.ogg" type="audio/ogg">
            <source src="Background Music for Car Commercial & Advertising - DEMO 128 kbps.mp3" type="audio/mpeg">
        </audio>
        <!-- fade in buttons with link -->
        <div class="btn-container">
            <button class="btn" style="border-radius: 10px;"><a href="https://goo.gl/maps/zSfr4vFqhKi9uKjk7"
                    style="text-decoration: none; color: white;">Visit EDISON</a></button><br />
            <button class="btn" style="left:650px; border-radius: 10px; "><a href="WHATWEARE.html"
                    style="text-decoration: none; color: white;">What We Are</a></button>
        </div>

        <!-- footer/last line -->
        <!-- <p>
                                                      All Rights Reserved. Established Since 2021
                                                    </p> -->

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
