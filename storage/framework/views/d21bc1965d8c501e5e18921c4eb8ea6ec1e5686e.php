<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://fb.me/react-15.1.0.min.js"></script>
    <script src="https://fb.me/react-dom-15.1.0.min.js"></script>
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

        html,
        body {
            background: url('storage/gif.gif');
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
            height: 100px;

        }


        #overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #text {
            position: absolute;
            top: 13%;
            left: 50%;
            font-size: 4.5em;
            font-family: 'MyWebFont';
            text-align: center;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            white-space: nowrap;
            background: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;


        }

        #chest-wrap {
            max-width: 400px;
            width: 90%;
            margin-bottom: 40px;
        }

        #button-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .button {
            background: #D92534;
            color: #FFF101;
            padding: 15px 40px;
            font-weight: 700;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            margin: 5px;
        }

        #chest {
            overflow: visible;
        }

        #chest #sparkles,
        #chest #lock,
        #chest #top,
        #chest #bottom,
        #chest #wires_bottom {
            transform-origin: 250px 200px;
        }

        #chest #lock {
            transform-origin: 200px 200px;
        }

        #chest #left_handle {
            transform-origin: 10% 50%;
        }

        #chest #right_handle {
            transform-origin: 80% 50%;
        }

        #chest #sparkles #sparkle_mid {
            opacity: 0;
            -webkit-animation: fadeIn 2s infinite alternate;
            animation: fadeIn 2s infinite alternate;
        }

        #chest #sparkles #sparkle_left {
            opacity: 0;
            -webkit-animation: fadeIn 2s infinite alternate 0.75s;
            animation: fadeIn 2s infinite alternate 0.75s;
        }

        #chest #sparkles #sparkle_right {
            opacity: 0;
            -webkit-animation: fadeIn 2s infinite alternate 1.5s;
            animation: fadeIn 2s infinite alternate 1.5s;
        }

        #chest #lock_line {
            opacity: 0;
        }

        #chest.shake-chest #lock {
            -webkit-animation: shakeChestTop 1.2s infinite ease;
            animation: shakeChestTop 1.2s infinite ease;
        }

        #chest.shake-chest #bottom,
        #chest.shake-chest #wires_bottom {
            -webkit-animation: shakeChestBottom 1.2s infinite ease;
            animation: shakeChestBottom 1.2s infinite ease;
        }

        #chest.shake-chest #top {
            -webkit-animation: shakeChestTop 1.2s infinite ease;
            animation: shakeChestTop 1.2s infinite ease;
        }

        #chest.shake-chest #top .cls-20,
        #chest.shake-chest #top .cls-21 {
            -webkit-animation: shakeChestTopWires 1.2s infinite ease;
            animation: shakeChestTopWires 1.2s infinite ease;
        }

        #chest.shake-chest #left_handle,
        #chest.shake-chest #right_handle {
            -webkit-animation: shakeChestHandle 1.2s infinite ease;
            animation: shakeChestHandle 1.2s infinite ease;
        }

        #chest.shake-chest #sparkles {
            -webkit-animation: shakeChestTop 1.2s infinite ease;
            animation: shakeChestTop 1.2s infinite ease;
        }

        #chest.shake-chest #wires_bottom .cls-21,
        #chest.shake-chest #wires_bottom .cls-23 {
            -webkit-animation: shakeChestBottomWires 1.2s infinite ease;
            animation: shakeChestBottomWires 1.2s infinite ease;
        }

        #chest.shake-chest #wires_bottom .cls-20 {
            -webkit-animation: shakeChestBottomWire 1.2s infinite ease;
            animation: shakeChestBottomWire 1.2s infinite ease;
        }

        #chest.open-chest #lock {
            -webkit-animation: openLock 1s ease forwards 2s;
            animation: openLock 1s ease forwards 2s;
        }

        #chest.open-chest #lock .cls-29,
        #chest.open-chest #lock .cls-31,
        #chest.open-chest #lock .lock-background {
            transition: fill 0.5s ease 2s;
        }

        #chest.open-chest #lock .cls-29 {
            fill: green;
        }

        #chest.open-chest #lock .cls-31 {
            fill: darkgreen;
        }

        #chest.open-chest #lock .lock-background {
            fill: limegreen;
        }

        #chest.open-chest #top {
            -webkit-animation: openChestTop 3s ease forwards 2s;
            animation: openChestTop 3s ease forwards 2s;
        }

        #chest.open-chest #sparkles,
        #chest.open-chest #wires_bottom {
            opacity: 0;
            transition: 0.6s ease 3s;
        }

        #chest.open-chest #lock_line {
            opacity: 1;
            -webkit-animation: lockLineAnimation 2s linear forwards;
            animation: lockLineAnimation 2s linear forwards;
        }

        svg#chest .cls-1 {
            fill: #3a2415;
        }

        svg#chest .cls-2 {
            fill: #573e1c;
        }

        svg#chest .cls-3 {
            fill: #f8ec23;
        }

        svg#chest .cls-4 {
            fill: #875d26;
        }

        svg#chest .cls-5 {
            fill: #3b2314;
        }

        svg#chest .cls-6 {
            fill: #ffe309;
        }

        svg#chest .cls-7 {
            fill: #f6bb49;
        }

        svg#chest .cls-8 {
            fill: #ffd00a;
        }

        svg#chest .cls-9 {
            fill: #5b3d1a;
        }

        svg#chest .cls-10,
        svg#chest .cls-12 {
            fill: #60421b;
        }

        svg#chest .cls-11,
        svg#chest .cls-18,
        svg#chest .cls-26,
        svg#chest .cls-28 {
            fill: #fff;
        }

        svg#chest .cls-11 {
            opacity: 0.34;
        }

        svg#chest .cls-12 {
            opacity: 0.25;
        }

        svg#chest .cls-13,
        svg#chest .cls-22 {
            fill: #422918;
        }

        svg#chest .cls-14 {
            fill: #1d70b7;
        }

        svg#chest .cls-15 {
            fill: #4bbced;
        }

        svg#chest .cls-16,
        svg#chest .cls-25,
        svg#chest .cls-30,
        svg#chest .cls-32,
        svg#chest .cls-33,
        svg#chest .cls-34 {
            fill: none;
            stroke-miterlimit: 10;
        }

        svg#chest .cls-16 {
            stroke: #ffec00;
        }

        svg#chest .cls-16,
        svg#chest .cls-32,
        svg#chest .cls-33,
        svg#chest .cls-34 {
            stroke-linecap: round;
        }

        svg#chest .cls-16 {
            stroke-width: 3.46px;
        }

        svg#chest .cls-17 {
            fill: #a2d7e5;
        }

        svg#chest .cls-19 {
            fill: #8f5e1d;
        }

        svg#chest .cls-20 {
            fill: #009ee2;
        }

        svg#chest .cls-21 {
            fill: #e5007e;
        }

        svg#chest .cls-22 {
            opacity: 0.35;
        }

        svg#chest .cls-23 {
            fill: #ffec00;
        }

        svg#chest .cls-24 {
            fill: #f8bf3e;
        }

        svg#chest .cls-25 {
            stroke: #644119;
            stroke-width: 1.83px;
        }

        svg#chest .cls-26 {
            opacity: 0.86;
        }

        svg#chest .cls-27 {
            fill: #fcea0d;
        }

        svg#chest .cls-28 {
            opacity: 0.65;
        }

        svg#chest .cls-29 {
            fill: #214459;
        }

        svg#chest .cls-30 {
            stroke: #422918;
        }

        svg#chest .cls-30,
        svg#chest .cls-34 {
            stroke-width: 5.19px;
        }

        svg#chest .cls-31 {
            fill: #C5EFEF;
        }

        svg#chest .cls-32 {
            stroke: #80cad5;
            stroke-width: 3.69px;
        }

        svg#chest .cls-33 {
            stroke: #d1eaf6;
            stroke-width: 0.87px;
        }

        svg#chest .cls-34 {
            stroke: #e5007e;
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes  fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes shakeChestBottom {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            15% {
                transform: translateY(-5px) rotate(-2deg);
            }

            25% {
                transform: translateY(-10px) rotate(0deg);
            }

            60% {
                transform: translateY(0) rotate(0deg);
            }
        }

        @keyframes  shakeChestBottom {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            15% {
                transform: translateY(-5px) rotate(-2deg);
            }

            25% {
                transform: translateY(-10px) rotate(0deg);
            }

            60% {
                transform: translateY(0) rotate(0deg);
            }
        }

        @-webkit-keyframes shakeChestBottomWires {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-1.5deg) translateX(-5px);
            }

            35% {
                transform: rotate(-2deg) translateX(-5px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @keyframes  shakeChestBottomWires {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-1.5deg) translateX(-5px);
            }

            35% {
                transform: rotate(-2deg) translateX(-5px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes shakeChestBottomWire {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-1.5deg) translateX(-6px);
            }

            35% {
                transform: rotate(-2deg) translateX(-10px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @keyframes  shakeChestBottomWire {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-1.5deg) translateX(-6px);
            }

            35% {
                transform: rotate(-2deg) translateX(-10px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes shakeChestTop {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            15% {
                transform: translateY(-10px) rotate(2deg);
            }

            25% {
                transform: translateY(-20px) rotate(-2deg);
            }

            35% {
                transform: translateY(-20px) rotate(2deg);
            }

            60% {
                transform: translateY(0) rotate(0deg);
            }
        }

        @keyframes  shakeChestTop {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            15% {
                transform: translateY(-10px) rotate(2deg);
            }

            25% {
                transform: translateY(-20px) rotate(-2deg);
            }

            35% {
                transform: translateY(-20px) rotate(2deg);
            }

            60% {
                transform: translateY(0) rotate(0deg);
            }
        }

        @-webkit-keyframes shakeChestTopWires {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(1deg) translateY(-5px);
            }

            25% {
                transform: rotate(-1deg) translateY(5px);
            }

            35% {
                transform: rotate(1deg) translateY(-5px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @keyframes  shakeChestTopWires {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(1deg) translateY(-5px);
            }

            25% {
                transform: rotate(-1deg) translateY(5px);
            }

            35% {
                transform: rotate(1deg) translateY(-5px);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes shakeChestHandle {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(-5deg);
            }

            25% {
                transform: rotate(5deg);
            }

            35% {
                transform: rotate(-5deg);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @keyframes  shakeChestHandle {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(-5deg);
            }

            25% {
                transform: rotate(5deg);
            }

            35% {
                transform: rotate(-5deg);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes openLock {
            0% {
                transform: rotate(0deg) scale(1);
                opacity: 1;
            }

            30% {
                transform: rotate(-8deg) scale(1);
                opacity: 1;
            }

            45% {
                transform: rotate(-8deg) scale(1);
                opacity: 1;
            }

            100% {
                transform: rotate(-8deg) scale(2);
                opacity: 0;
            }
        }

        @keyframes  openLock {
            0% {
                transform: rotate(0deg) scale(1);
                opacity: 1;
            }

            30% {
                transform: rotate(-8deg) scale(1);
                opacity: 1;
            }

            45% {
                transform: rotate(-8deg) scale(1);
                opacity: 1;
            }

            100% {
                transform: rotate(-8deg) scale(2);
                opacity: 0;
            }
        }

        @-webkit-keyframes openChestTop {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            35% {
                transform: translateY(0);
                opacity: 1;
            }

            45% {
                transform: translateY(-8%);
                opacity: 1;
            }

            75% {
                transform: translateY(-20%);
                opacity: 0;
            }

            100% {
                transform: translateY(-20%);
                opacity: 0;
            }
        }

        @keyframes  openChestTop {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            35% {
                transform: translateY(0);
                opacity: 1;
            }

            45% {
                transform: translateY(-8%);
                opacity: 1;
            }

            75% {
                transform: translateY(-20%);
                opacity: 0;
            }

            100% {
                transform: translateY(-20%);
                opacity: 0;
            }
        }

        @-webkit-keyframes lockLineAnimation {
            0% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(16.5%);
            }

            60% {
                transform: translateY(0);
            }

            90% {
                transform: translateY(16.5%);
                opacity: 1;
            }

            100% {
                transform: translateY(16.5%);
                opacity: 0;
            }
        }

        @keyframes  lockLineAnimation {
            0% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(16.5%);
            }

            60% {
                transform: translateY(0);
            }

            90% {
                transform: translateY(16.5%);
                opacity: 1;
            }

            100% {
                transform: translateY(16.5%);
                opacity: 0;
            }
        }

        h1 {
            font-family: 'MyWebFont';
        }

        #main {
            width: 13em;
            margin: 0 auto;
            text-align: left;
        }

        ul {
            list-style: none;
        }

        ul>li:hover {
            background-color: #F5F5F5;
        }

        .form-inline .form-control {
            width: 50%;
            margin-left: 0em;
        }


        .btn {
            width: 50%;
            margin-right: 0em;
        }

        .done {
            color: red;
            text-decoration: line-through;
        }

        .undone {
            color: #61DAFB;
        }

        .icon {
            margin: 6px 10px 6px 0;
        }
    </style>

</head>

<body id="body">

    <div id="overlay" onclick="off()">
        <div id="text">COUNTDOWN</div>
        <div id="chest-wrap">
            <svg id="chest" xmlns="http://www.w3.org/2000/svg" viewBox="-40 -40 500 400">
                <g>
                    <g>
                        <g>
                            <g id="bottom">
                                <g id="chest_content">
                                    <polygon class="cls-1" points="333.25 177.4 321.28 130.84 85.18 130.84 72.4 179.73 333.25 177.4" />
                                    <polygon class="cls-2" points="88.39 133.06 88.39 174.47 77.28 174.47 88.39 133.06" />
                                    <polygon class="cls-2" points="330.53 174.23 318.51 174.23 318.51 132.84 330.53 174.23" />
                                    <ellipse class="cls-3" cx="203.66" cy="185.42" rx="126.38" ry="36.8" />
                                </g>
                                <rect class="cls-2" x="70.26" y="175.64" width="275.85" height="130.18" />
                                <rect class="cls-4" x="67.16" y="252.99" width="274" height="6.72" />
                                <rect class="cls-4" y="174.47" width="410.31" height="44.75" rx="19.76" />
                                <path class="cls-5" d="M0,197.11v2.34a19.76,19.76,0,0,0,19.76,19.76H390.55a19.76,19.76,0,0,0,19.76-19.76v-2.34Z" />
                                <g id="left_handle">
                                    <rect class="cls-6" x="16.54" y="191.18" width="13.99" height="73.92" rx="7" />
                                    <path class="cls-7" d="M23.53,191.18V265.1a7,7,0,0,0,7-7V198.17A7,7,0,0,0,23.53,191.18Z" />
                                </g>
                                <g id="right_handle">
                                    <rect class="cls-6" x="380.16" y="191.18" width="13.99" height="73.92" rx="7" />
                                    <path class="cls-7" d="M387.16,191.18V265.1a7,7,0,0,0,7-7V198.17A7,7,0,0,0,387.16,191.18Z" />
                                </g>
                                <polygon class="cls-5" points="359.54 317.12 61.1 317.12 61.1 174.64 83.7 174.64 83.7 294.52 336.94 294.52 336.94 174.64 359.54 174.64 359.54 317.12" />
                                <polygon class="cls-7" points="353.13 310.7 54.68 310.7 54.68 174.23 77.28 174.23 77.28 288.1 330.53 288.1 330.53 174.23 353.13 174.23 353.13 310.7" />
                                <rect class="cls-6" x="330.53" y="174.24" width="11" height="120" />
                                <rect class="cls-6" x="77.11" y="288.09" width="264.4" height="8.2" />
                                <rect class="cls-6" x="54.69" y="174.24" width="6.9" height="136.5" />
                                <polygon class="cls-7" points="77.28 174.23 88.39 133.06 318.51 133.06 330.53 174.23 353.13 174.23 336.69 128.63 72.4 128.63 54.68 174.23 77.28 174.23" />
                                <polygon class="cls-6" points="61.59 174.64 79.08 128.63 72.4 128.63 54.68 174.23 61.59 174.64" />
                                <polygon class="cls-8" points="341.56 174.47 326.77 132.84 318.51 132.84 330.53 174.23 341.56 174.47" />
                                <circle class="cls-4" cx="108.25" cy="256.28" r="12" />
                                <ellipse class="cls-5" cx="108.25" cy="253.17" rx="11.58" ry="8.89" />
                            </g>
                            <g id="top">
                                <rect class="cls-9" x="57.43" y="64.04" width="299.37" height="149.69" />
                                <rect class="cls-5" x="108.2" y="68.78" width="56.15" height="93.85" />
                                <rect class="cls-4" x="99.64" y="64.04" width="56.15" height="90.43" />
                                <rect class="cls-5" x="260.02" y="68.78" width="56.15" height="93.85" />
                                <rect class="cls-4" x="251.83" y="64.24" width="56.15" height="90.24" />
                                <polygon class="cls-5" points="370.7 225.49 47.8 225.49 47.8 64.05 71.33 64.05 71.33 201.97 347.18 201.97 347.18 64.05 370.7 64.05 370.7 225.49" />
                                <rect class="cls-10" x="119.91" y="64.06" width="16.19" height="62.36" />
                                <rect class="cls-11" x="65.54" y="64.04" width="275.85" height="9.47" />
                                <rect class="cls-7" x="192.77" y="59.77" width="23.52" height="153.96" />
                                <polygon class="cls-6" points="201.13 213.73 192.77 213.73 192.77 59.77 216.29 59.77 216.29 66.39 201.13 66.39 201.13 213.73" />
                                <polygon class="cls-7" points="365.05 221.68 42.16 221.68 42.16 60.23 65.68 60.23 65.68 198.16 341.53 198.16 341.53 60.23 365.05 60.23 365.05 221.68" />
                                <polygon class="cls-6" points="65.68 60.23 42.16 60.23 42.16 64.23 42.16 68.73 42.16 221.69 51.46 221.69 51.46 68.73 65.68 68.73 65.68 60.23" />
                                <polygon class="cls-6" points="365.05 60.23 341.53 60.23 341.53 68.23 341.53 68.73 341.53 198.16 65.68 198.16 65.68 203.16 348.53 203.16 348.53 199.24 348.53 198.16 348.53 68.73 365.05 68.73 365.05 60.23" />
                                <circle class="cls-4" cx="322.24" cy="176.27" r="12" />
                                <ellipse class="cls-5" cx="322.24" cy="173.16" rx="11.58" ry="8.89" />
                                <g id="eye">
                                    <path class="cls-12" d="M145.15,127.4c0,10.48-7.71,19-17.22,19s-17.22-8.5-17.22-19,7.71-19,17.22-19,17.22,8.5,17.22,19" />
                                    <path class="cls-13" d="M145.34,124.49A17.39,17.39,0,1,1,128,107.1a17.4,17.4,0,0,1,17.39,17.39" />
                                    <path class="cls-14" d="M139.68,124.49A11.73,11.73,0,1,1,128,112.76a11.73,11.73,0,0,1,11.73,11.73" />
                                    <path class="cls-15" d="M138.54,126.86a10.2,10.2,0,1,1-10.19-10.19,10.2,10.2,0,0,1,10.19,10.19" />
                                    <path class="cls-16" d="M139.68,124.49A11.73,11.73,0,1,1,128,112.76,11.73,11.73,0,0,1,139.68,124.49Z" />
                                    <path class="cls-17" d="M132.8,123.32a4.53,4.53,0,1,1-4.53-4.53,4.53,4.53,0,0,1,4.53,4.53" />
                                    <path class="cls-18" d="M128.79,122.15a2.37,2.37,0,1,1-2.36-2.36,2.36,2.36,0,0,1,2.36,2.36" />
                                </g>
                                <rect class="cls-12" x="264.63" y="108.54" width="36.6" height="34.96" />
                                <rect class="cls-10" x="262.33" y="105.82" width="36.6" height="34.96" />
                                <path class="cls-13" d="M296.52,136a2,2,0,1,1-2-2,2,2,0,0,1,2,2" />
                                <path class="cls-13" d="M268.94,136a2,2,0,1,1-2-2,2,2,0,0,1,2,2" />
                                <path class="cls-13" d="M296.52,111.57a2,2,0,1,1-2-2,2,2,0,0,1,2,2" />
                                <path class="cls-13" d="M268.94,111.57a2,2,0,1,1-2-2,2,2,0,0,1,2,2" />
                                <rect class="cls-11" x="262.33" y="105.61" width="36.6" height="1.64" />
                                <path class="cls-19" d="M289.32,123.3a8.7,8.7,0,1,1-8.69-8.7,8.69,8.69,0,0,1,8.69,8.7" />
                                <path class="cls-13" d="M287.69,121a8.62,8.62,0,0,0-.91-3.87,8.69,8.69,0,0,0-14.85,6.14,8.56,8.56,0,0,0,.92,3.87A8.69,8.69,0,0,0,287.69,121Z" />
                                <path class="cls-20" d="M253.74,64a242.37,242.37,0,0,1,4.49-27.1c1.06-4.22,3-12,8.71-11.92,5.27.15,7.57,6.72,9.77,18,1.51,7.8,3,18.61,4.42,32.12,2.41,22.9,3.83,46.07,3.84,46.3a4.31,4.31,0,0,1-4.05,4.58h-.27a4.32,4.32,0,0,1-4.31-4.06c-2.5-41.2-6.4-71.64-9.53-83.73-1.12,4.33-2.64,12-4.35,25.77Z" />
                                <path class="cls-21" d="M304.31,64.06c-2.59-30.59-5-44.6-6.6-51-3.89,14.17-9.13,54.74-12.74,111a4.33,4.33,0,0,1-4.31,4.05h-.28a4.33,4.33,0,0,1-4-4.59c0-.3,2-30.28,5-59.88,1.81-17.45,3.65-31.38,5.49-41.4C289.9,5.64,292.65,0,297.76,0h0c5.6,0,7.87,7,10.1,19.77,1.76,10.1,3.47,25,5.09,44.29Z" />
                                <rect class="cls-22" x="81.21" y="175.26" width="60.97" height="15.42" />
                                <rect class="cls-23" x="78.55" y="172.49" width="60.19" height="15.22" />
                                <rect class="cls-24" x="81.46" y="178.31" width="57.27" height="9.37" />
                                <rect class="cls-18" x="78.59" y="172.39" width="60.15" height="2.81" />
                                <line class="cls-25" x1="98.36" y1="172.3" x2="98.47" y2="187.61" />
                                <line class="cls-25" x1="118.34" y1="172.3" x2="118.45" y2="187.61" />
                            </g>
                            <g id="wires_bottom">
                                <path class="cls-21" d="M318.33,171.36h-.09a4.32,4.32,0,0,0-4.33,4.23c0,1.22-3.31,121.75-62.91,121.75-28.28,0-44.08-41.84-44.23-42.26a4.32,4.32,0,1,0-8.12,3,109.78,109.78,0,0,0,12.81,23.58C222.92,297.57,236.59,306,251,306c28.53,0,50-22.88,62-66.16,8.79-31.66,9.55-62.75,9.58-64.06A4.32,4.32,0,0,0,318.33,171.36Z" />
                                <path class="cls-23" d="M327.52,170.34a4.33,4.33,0,0,0-5.37,2.93,325.39,325.39,0,0,1-20.51,50.61c-11.56,22.37-29.86,49-51.36,49-25.21,0-38.32-15.12-38.85-15.76a4.33,4.33,0,1,0-6.64,5.55c.64.77,16.08,18.86,45.49,18.86,48.52,0,78.9-101.53,80.17-105.85A4.33,4.33,0,0,0,327.52,170.34Z" />
                                <path class="cls-20" d="M207.34,255.28a4.33,4.33,0,0,0-5.64,2.37c-.16.39-16.12,38.73-44.95,39.18H156c-13.91,0-25.38-6.5-34.08-19.33a70.13,70.13,0,0,1-9.39-20.65,4.32,4.32,0,1,0-8.42,2,77.54,77.54,0,0,0,10.5,23.31c10.27,15.29,24.58,23.36,41.41,23.36h.82c14.44-.23,28.2-8.1,39.78-22.76a99.48,99.48,0,0,0,13.05-21.8A4.33,4.33,0,0,0,207.34,255.28Z" />
                            </g>
                            <g id="lock">
                                <rect class="cls-22" x="162.48" y="155.69" width="95.46" height="112.82" />
                                <rect class="cls-26" x="156.37" y="149.98" width="95.53" height="3.71" />
                                <rect class="cls-24" x="156.44" y="147.28" width="95.46" height="112.1" />
                                <polygon class="cls-27" points="161.49 147.28 244.38 259.38 251.9 259.38 251.9 147.28 161.49 147.28" />
                                <rect class="cls-11" x="164.61" y="145.96" width="87.28" height="9.45" />
                                <rect class="cls-28" x="156.44" y="145.96" width="95.46" height="10.98" />
                                <path class="cls-29" d="M234.46,248.49H176.1a6.83,6.83,0,0,1-6.82-6.82V165.5a6.84,6.84,0,0,1,6.82-6.82h58.36a6.83,6.83,0,0,1,6.82,6.82v76.17a6.83,6.83,0,0,1-6.82,6.82" />
                                <path class="lock-background cls-20" d="M236.33,249.6H181.88a6.45,6.45,0,0,1-6.43-6.44V170.55a6.44,6.44,0,0,1,6.43-6.43h54.45a6.45,6.45,0,0,1,6.44,6.43v72.61a6.46,6.46,0,0,1-6.44,6.44" />
                                <rect class="cls-30" x="169.28" y="158.68" width="72.01" height="89.81" rx="6.82" />

                                <g id="fingerprint">
                                    <path class="cls-31" d="M180.28,184a1.73,1.73,0,0,1-1.73-1.73v-6.52A6.76,6.76,0,0,1,185.3,169H192a1.73,1.73,0,0,1,0,3.46H185.3a3.3,3.3,0,0,0-3.29,3.3v6.52A1.73,1.73,0,0,1,180.28,184Z" />
                                    <path class="cls-31" d="M192.61,239.54h-6.52a6.76,6.76,0,0,1-6.75-6.76v-6.73a1.73,1.73,0,0,1,3.46,0v6.73a3.3,3.3,0,0,0,3.29,3.3h6.52a1.73,1.73,0,0,1,0,3.46Z" />
                                    <path class="cls-31" d="M227.6,239.54h-6.74a1.73,1.73,0,0,1,0-3.46h6.74a3.3,3.3,0,0,0,3.3-3.3v-6.51a1.73,1.73,0,0,1,3.46,0v6.51A6.76,6.76,0,0,1,227.6,239.54Z" />
                                    <path class="cls-31" d="M231.84,184.21a1.73,1.73,0,0,1-1.73-1.73v-6.74a3.3,3.3,0,0,0-3.3-3.3h-6.52a1.73,1.73,0,1,1,0-3.46h6.52a6.76,6.76,0,0,1,6.76,6.76v6.74A1.74,1.74,0,0,1,231.84,184.21Z" />
                                    <path class="cls-31" d="M219.89,185a1.78,1.78,0,0,1-1-.29,22.55,22.55,0,0,0-24.8-.06,1.85,1.85,0,0,1-2.18-3c.14-.1,13.8-9.86,29-.07a1.86,1.86,0,0,1,.55,2.56A1.84,1.84,0,0,1,219.89,185Z" />
                                    <path class="cls-31" d="M186.05,199.13a1.82,1.82,0,0,1-1-.28,1.84,1.84,0,0,1-.59-2.54c.32-.52,8-12.66,22.06-12.66s20.87,11.58,21.15,12.07a1.85,1.85,0,0,1-3.2,1.84c-.24-.41-6.07-10.22-17.95-10.22s-18.86,10.81-18.93,10.92A1.85,1.85,0,0,1,186.05,199.13Z" />
                                    <path class="cls-31" d="M213.31,231.71c-2.78,0-6.72-2.37-9.8-5.89-2.19-2.51-5.72-7.72-4.81-14.43.84-6.17,4.75-8.74,8.22-8.61,3.26.15,6.87,2.9,7.11,8.57.14,3.28,2.43,5,4.55,5h.12c2.1-.06,4.32-1.88,4.24-6.82-.09-5.79-4.59-11.75-10.94-14.5-5.68-2.45-11.33-1.68-15.49,2.12-10.23,9.32-4.84,23.54-4.79,23.68a1.85,1.85,0,1,1-3.44,1.34c-.26-.67-6.34-16.73,5.74-27.75,5.21-4.75,12.48-5.79,19.44-2.78,7.64,3.3,13.06,10.63,13.17,17.83s-3.85,10.46-7.83,10.58-8.22-3.05-8.46-8.54c-.14-3.37-1.9-5-3.59-5s-3.86,1.56-4.39,5.42c-.72,5.26,2.16,9.46,3.93,11.5,2.76,3.15,5.82,4.63,7,4.63a1.85,1.85,0,1,1,0,3.69Z" />
                                    <path class="cls-31" d="M200.72,230.85a1.84,1.84,0,0,1-1.41-.65c-6.39-7.55-8.37-17.82-4.94-25.57a12.88,12.88,0,0,1,11.55-8.12c10.48-.39,14.06,9.78,14.5,15.2a1.85,1.85,0,1,1-3.68.3c0-.5-1.12-11.82-10.29-11.82h-.4a9.23,9.23,0,0,0-8.31,5.93c-2.31,5.22-1.92,14.23,4.39,21.68a1.84,1.84,0,0,1-1.41,3Z" />
                                    <path class="cls-31" d="M219.19,226.19a13.9,13.9,0,0,1-9.49-3.32c-4.93-4.32-5.36-11.26-5.37-11.56a1.83,1.83,0,0,1,1.74-1.94,1.87,1.87,0,0,1,2,1.74c0,.1.38,5.73,4.13,9,2.09,1.82,4.9,2.61,8.35,2.34a1.85,1.85,0,1,1,.29,3.68C220.24,226.17,219.71,226.19,219.19,226.19Z" />
                                </g>

                                <line id="lock_line" class="cls-34" x1="179.08" y1="172.24" x2="235.23" y2="172.24" />
                            </g>
                            <g id="sparkles">
                                <path id="sparkle_mid" class="cls-18" d="M122.08,94.44S102.62,89,98.26,70.62C93.61,89.79,74.45,94.44,74.45,94.44s18.39,4.39,23.81,23.82C102.39,98.57,122.08,94.44,122.08,94.44Z" />
                                <path id="sparkle_left" class="cls-18" d="M106,144s-13.22-3.71-16.18-16.19C86.67,140.79,73.64,144,73.64,144s12.5,3,16.19,16.18C92.64,146.76,106,144,106,144Z" />
                                <path id="sparkle_right" class="cls-18" d="M334.28,97.89S321.06,94.18,318.1,81.7c-3.16,13-16.19,16.19-16.19,16.19s12.5,3,16.19,16.18C320.9,100.7,334.28,97.89,334.28,97.89Z" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div id="button-wrap">
            <div class="button" id="shake-chest">Shake</div>
            <div class="button" id="open-chest">Start</div>
            <div class="button" id="reset-chest" onclick="history.back()">Leave</div>
        </div>

        <ul id="debug"></ul>
    </div>

    <div id="app"></div>



    <audio class="hidden" id="audio" src="<?php echo e($fileUrl); ?>"></audio>


</body>

</html>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script>
    let resdata = "<?php echo e($fileUrl); ?>";
    var flag = false;

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

    const audio = document.getElementById("audio");

    document.body.addEventListener("click", function() {
        audio.play();
    })


    document.querySelector('#body').addEventListener('scroll', () => {
        console.log('scroll event fired!')
    });





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

    document.getElementById('open-chest').addEventListener('click', function() {
        setTimeout(function() {
            off()
        }, 4000)
    })
    const CHEST = document.querySelector('#chest');
    const SHAKE_BUTTON = document.querySelector('#shake-chest');
    const OPEN_BUTTON = document.querySelector('#open-chest');
    const RESET_BUTTON = document.querySelector('#reset-chest');

    function shakeChest() {
        CHEST.classList.add('shake-chest');
        CHEST.classList.remove('open-chest');
    }

    function openChest() {
        CHEST.classList.remove('shake-chest');
        CHEST.classList.add('open-chest');
    }

    function resetChest() {
        CHEST.classList.remove('open-chest');
        CHEST.classList.remove('shake-chest');
    }

    SHAKE_BUTTON.addEventListener('click', shakeChest);
    OPEN_BUTTON.addEventListener('click', openChest);
    RESET_BUTTON.addEventListener('click', resetChest);
    /*
Todo app structure

TodoApp
	- TodoHeader
	- TodoList
    - TodoListItem #1
		- TodoListItem #2
		  ...
		- TodoListItem #N
	- TodoForm
*/
    var todoItems = [];
    todoItems.push({
        index: 1,
        value: "Do Music Vid",
        done: false
    });
    todoItems.push({
        index: 2,
        value: "Record $oss",
        done: true
    });
    todoItems.push({
        index: 3,
        value: "Prepare Party",
        done: true
    });

    class TodoList extends React.Component {
        render() {
            var items = this.props.items.map((item, index) => {
                return /*#__PURE__*/ (
                    React.createElement(TodoListItem, {
                        key: index,
                        item: item,
                        index: index,
                        removeItem: this.props.removeItem,
                        markTodoDone: this.props.markTodoDone
                    }));

            });
            return /*#__PURE__*/ (
                React.createElement("ul", {
                    className: "list-group"
                }, " ", items, " "));

        }
    }


    class TodoListItem extends React.Component {
        constructor(props) {
            super(props);
            this.onClickClose = this.onClickClose.bind(this);
            this.onClickDone = this.onClickDone.bind(this);
        }
        onClickClose() {
            var index = parseInt(this.props.index);
            this.props.removeItem(index);
        }
        onClickDone() {
            var index = parseInt(this.props.index);
            this.props.markTodoDone(index);
        }
        render() {
            var todoClass = this.props.item.done ?
                "done" : "undone";
            return /*#__PURE__*/ (
                React.createElement("li", {
                        className: "list-group-item "
                    }, /*#__PURE__*/
                    React.createElement("div", {
                            className: todoClass
                        }, /*#__PURE__*/
                        React.createElement("span", {
                            className: "glyphicon glyphicon-ok icon",
                            "aria-hidden": "true",
                            onClick: this.onClickDone
                        }),
                        this.props.item.value, /*#__PURE__*/
                        React.createElement("button", {
                            type: "button",
                            className: "close",
                            onClick: this.onClickClose
                        }, "\xD7"))));



        }
    }


    class TodoForm extends React.Component {
        constructor(props) {
            super(props);
            this.onSubmit = this.onSubmit.bind(this);
        }
        componentDidMount() {
            this.refs.itemName.focus();
        }
        onSubmit(event) {
            event.preventDefault();
            var newItemValue = this.refs.itemName.value;

            if (newItemValue) {
                this.props.addItem({
                    newItemValue
                });
                this.refs.form.reset();
            }
        }
        render() {
            return /*#__PURE__*/ (
                React.createElement("form", {
                        ref: "form",
                        onSubmit: this.onSubmit,
                        className: "form-inline"
                    }, /*#__PURE__*/
                    React.createElement("input", {
                        type: "text",
                        ref: "itemName",
                        className: "form-control",
                        placeholder: "add a new todo..."
                    }), /*#__PURE__*/
                    React.createElement("button", {
                        type: "submit",
                        className: "btn btn-warning"
                    }, "Add")));


        }
    }


    class TodoHeader extends React.Component {
        render() {
            return /*#__PURE__*/ React.createElement("h1", null, "Todo list");
        }
    }


    class TodoApp extends React.Component {
        constructor(props) {
            super(props);
            this.addItem = this.addItem.bind(this);
            this.removeItem = this.removeItem.bind(this);
            this.markTodoDone = this.markTodoDone.bind(this);
            this.state = {
                todoItems: todoItems
            };
        }
        addItem(todoItem) {
            todoItems.unshift({
                index: todoItems.length + 1,
                value: todoItem.newItemValue,
                done: false
            });

            this.setState({
                todoItems: todoItems
            });
        }
        removeItem(itemIndex) {
            todoItems.splice(itemIndex, 1);
            this.setState({
                todoItems: todoItems
            });
        }
        markTodoDone(itemIndex) {
            var todo = todoItems[itemIndex];
            todoItems.splice(itemIndex, 1);
            todo.done = !todo.done;
            todo.done ? todoItems.push(todo) : todoItems.unshift(todo);
            this.setState({
                todoItems: todoItems
            });
        }
        render() {
            return /*#__PURE__*/ (
                React.createElement("div", {
                        id: "main"
                    }, /*#__PURE__*/
                    React.createElement(TodoHeader, null), /*#__PURE__*/
                    React.createElement(TodoList, {
                        items: this.props.initItems,
                        removeItem: this.removeItem,
                        markTodoDone: this.markTodoDone
                    }), /*#__PURE__*/
                    React.createElement(TodoForm, {
                        addItem: this.addItem
                    })));


        }
    }


    ReactDOM.render( /*#__PURE__*/ React.createElement(TodoApp, {
        initItems: todoItems
    }), document.getElementById('app'));
</script><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>