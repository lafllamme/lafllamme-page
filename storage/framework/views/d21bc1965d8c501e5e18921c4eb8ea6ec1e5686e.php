<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <!-- Styles -->
    <style>
        .hidden {
            display: none;
        }

        @charset  "UTF-8";

        @font-face {
            font-family: 'MyWebFont';
            /*a name to be used later*/
            src: url("fonts/font.woff2");
        }

        .back {
            background: url('https://images6.fanpop.com/image/photos/40200000/-Ace-one-piece-40251318-500-269.gif');

            /* Background image is centered vertically and horizontally at all times */
            background-position: center center;
            /* Background image doesn’t tile */
            background-repeat: no-repeat;
            /* Background image is fixed in the viewport so that it doesn’t move when the content’s height is greater than the image’s height */
            background-attachment: fixed;
            /* This is what makes the background image rescale based on the container’s size */
            background-size: cover;
            /* Set a background color that will be displayed while the background image is loading */
            background-color: #464646;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .light {
            width: 100%;
            height: 100%;
            animation: firelight 2s ease infinite;
            background: radial-gradient(ellipse at bottom, rgba(255, 193, 7, 0.15) 0%, rgba(255, 193, 7, 0) 90%);
            position: fixed;
            z-index: 1;
            bottom: 0;
            left: 0;
            bottom: 0;
        }

        @keyframes  firelight {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }

            100% {
                opacity: 1;
            }
        }

        .content {
            position: absolute;
            left: 50%;
            bottom: 0;
            margin: 0 0 -30px -100px;
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 100%;
        }

        .content .fire {
            filter: url(#goo);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .content div.bottom {
            position: absolute;
            left: 50px;
            bottom: 0;
            width: 100px;
            height: 30px;
            background: #ff9800;
            border-radius: 30px;
        }

        .content figure {
            position: absolute;
            margin: 0 0 -15px;
            left: calc(50% - 70px);
            bottom: 0;
            width: 70px;
            height: 70px;
            background: #ff9800;
            border-radius: 100%;
        }

        .content figure:nth-child(1) {
            animation: firecircle 1.2s 0.14s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 59px;
            margin-bottom: -33px;
        }

        .content figure:nth-child(2) {
            animation: firecircle 1.2s 0.28s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 65px;
            margin-bottom: -20px;
        }

        .content figure:nth-child(3) {
            animation: firecircle 1.2s 0.42s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 19px;
            margin-bottom: -34px;
        }

        .content figure:nth-child(4) {
            animation: firecircle 1.2s 0.56s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 44px;
            margin-bottom: -25px;
        }

        .content figure:nth-child(5) {
            animation: firecircle 1.2s 0.7s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 19px;
            margin-bottom: -33px;
        }

        .content figure:nth-child(6) {
            animation: firecircle 1.2s 0.84s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 62px;
            margin-bottom: -23px;
        }

        .content figure:nth-child(7) {
            animation: firecircle 1.2s 0.98s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 58px;
            margin-bottom: -27px;
        }

        .content figure:nth-child(8) {
            animation: firecircle 1.2s 1.12s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 40px;
            margin-bottom: -22px;
        }

        .content figure:nth-child(9) {
            animation: firecircle 1.2s 1.26s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 22px;
            margin-bottom: -22px;
        }

        .content figure:nth-child(10) {
            animation: firecircle 1.2s 1.4s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 10px;
            margin-bottom: -16px;
        }

        .content figure:nth-child(11) {
            animation: firecircle 1.2s 1.54s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 55px;
            margin-bottom: -28px;
        }

        .content figure:nth-child(12) {
            animation: firecircle 1.2s 1.68s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 58px;
            margin-bottom: -25px;
        }

        .content figure:nth-child(13) {
            animation: firecircle 1.2s 1.82s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 47px;
            margin-bottom: -20px;
        }

        .content figure:nth-child(14) {
            animation: firecircle 1.2s 1.96s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 16px;
            margin-bottom: -36px;
        }

        .content figure:nth-child(15) {
            animation: firecircle 1.2s 2.1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 39px;
            margin-bottom: -37px;
        }

        .content figure:nth-child(16) {
            animation: firecircle 1.2s 2.24s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 46px;
            margin-bottom: -32px;
        }

        .content .reverse div {
            position: absolute;
            margin: 0 0 -15px;
            left: 0;
            bottom: 0;
            width: 70px;
            height: 70px;
            background: #141e30;
            border-radius: 100%;
        }

        .content .reverse div:nth-child(1) {
            animation: firereverseleft 1.2s 0.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 7px;
            margin-bottom: -24px;
        }

        .content .reverse div:nth-child(2) {
            animation: firereverseleft 1.2s 1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 6px;
            margin-bottom: -35px;
        }

        .content .reverse div:nth-child(3) {
            animation: firereverseleft 1.2s 1.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 15px;
            margin-bottom: -22px;
        }

        .content .reverse div:nth-child(4) {
            animation: firereverseleft 1.2s 2s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 3px;
            margin-bottom: -16px;
        }

        .content .reverse div:nth-child(5) {
            left: 120px;
            animation: firereverseright 1.2s 0.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 4px;
            margin-bottom: -28px;
        }

        .content .reverse div:nth-child(6) {
            left: 120px;
            animation: firereverseright 1.2s 1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 7px;
            margin-bottom: -38px;
        }

        .content .reverse div:nth-child(7) {
            left: 120px;
            animation: firereverseright 1.2s 1.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 20px;
            margin-bottom: -17px;
        }

        .content .reverse div:nth-child(8) {
            left: 120px;
            animation: firereverseright 1.2s 2s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
            margin-left: 8px;
            margin-bottom: -40px;
        }

        @keyframes  firecircle {
            0% {
                transform: translateY(0) scale(1);
                background: #ff9800;
            }

            100% {
                transform: translateY(-175px) scale(0);
                background: #ffc107;
            }
        }

        @keyframes  firereverseleft {
            0% {
                transform: translateY(0) translateX(0) scale(0.3);
            }

            100% {
                transform: translateY(-175px) translateX(50px) scale(1);
            }
        }

        @keyframes  firereverseright {
            0% {
                transform: translateY(0) translateX(0) scale(0.3);
            }

            100% {
                transform: translateY(-175px) translateX(-50px) scale(1);
            }
        }

        p {
            color: white;
            position: absolute;
            left: 50%;
            top: 40%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 42px;
            font-family: "Cinzel", serif;
        }

        p span {
            width: 100%;
            font-size: 22px;
            font-style: italic;
            float: left;
            margin: 30px 0 0;
            letter-spacing: 1px;
            color: red;
            font-family: "Open Sans Condensed", sans-serif;
        }

        p span:before {
            content: "— ";
        }

        #overlay {
            position: fixed;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            cursor: pointer;
        }

        #text {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 4.5em;
            font-family: 'MyWebFont';
            text-align: center;
            color: white;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            white-space: nowrap;


        }
    </style>

</head>

<body id="body">

    <div id="overlay" onclick="off()">
        <div id="text">COUNTDOWN</div>
    </div>


    <!--  <div style="padding:20px">
        <h2>Overlay with Text</h2>
        <button onclick="on()">Turn on overlay effect</button>
    </div> -->
    <div class="back"></div>
    <div class="light"></div>
    <div class="content">
        <div class="fire">
            <div class="bottom"></div>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
        </div>
        <div class="reverse">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>
        TAPE DROP$<br>VERY SOON.
        <span class="author">Lafllamme, Days Before Romeo</span>
    </p>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feBlend in="SourceGraphic" in2="goo" />
            </filter>
        </defs>
    </svg>
    <audio class="hidden" id="audio" src="<?php echo e($fileUrl); ?>"></audio>
    <div id="app"></div>
</body>

</html>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script>
    var flag = false;
    setInterval(function() {
        console.log(flag)
    }, 100)
    setTimeout(function() {
        flag = true;
    }, 4000);

    const on = () => {
        if (flag) {
            document.getElementById("overlay").style.display = "block";

        }
    }
    const off = () => {
        if (flag) {
            document.getElementById("overlay").style.display = "none";
        }
    }
    let resdata = "<?php echo e($fileUrl); ?>"
    console.log(resdata);
    const play = () => {
        const audioPlayer = document.getElementById("audio");
        audio.play();
    }
    const body = document.getElementById("overlay");
    body.addEventListener('click', play());
    body.addEventListener('scroll', play());
    body.addEventListener('click', play());

    const startup = () => {
        body.addEventListener("touchstart", play());
        body.addEventListener("touchend", play());
        body.addEventListener("touchcancel", play());
        body.addEventListener("touchmove", play());
    }

    document.addEventListener("DOMContentLoaded", startup);


    var countDownDate = new Date("Mar 15, 2022 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("text").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>