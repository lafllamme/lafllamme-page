<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TAPE DROPS SOON">
    <meta name="keywords" content="TRAP, HIP HOP, MUSIC">
    <meta name="author" content="Lafllamme">
    <link rel="shortcut icon" href="https://iconarchive.com/download/i107732/google/noto-emoji-travel-places/42697-fire.ico">

    <title>Lafllamme</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        .hidden {
            display: none;
        }

        @charset "UTF-8";

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
            font-family: 'MyWebFont';

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
            top: 40%;
            left: 50%;
            font-size: 3.5em;
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

        .spacer {
            margin-top: 8em;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%) !important;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: white;
        }

        .nav-link {
            color: white !important;
        }
    </style>

</head>

<body id="body">

    <!-- Overlay Content -->
    <div id="overlay" onclick="off()">
        <div class="shake-opacity shake-constant">
            <div id="text">LOADING</div>
        </div>
        <br>
        <div style="font-family: 'MyWebFont'; color: white; font-size: 3.5em; margin-top: 3.5em;" class="shake-opacity shake-constant">COUNTDOWN</div>
        <button id="start" type="button" style="margin-top: 8em;" class="btn btn-danger btn-lg btn-block">Start</button>
        <ul id="debug"></ul>
    </div>
    <!-- Main Content -->
    <div class="row justify-content-center" onclick="play()" id="cd">
        <img src="https://i.gifer.com/origin/6a/6af36f7b9c1ac8a7e9d7dbcaa479b616.gif" style=" width: 150px;
  height: auto;" alt="Responsive image">

    </div>
    <br>
    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">HOME</a>
        </li>
        <li class="nav-item">
            <a onclick="play()" class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">MUSIC</a>
        </li>
        <li class="nav-item">
            <a onclick="video()" class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">VIDEOS</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row justify-content-center">
                <div class="alert alert-warning" role="alert">
                    <p class="text-center"> MORE INFO SOON !
                    </p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row justify-content-center">
                <div class="alert alert-warning" role="alert">
                    <p class="text-center"> MORE INFO SOON !
                    </p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row justify-content-center">
                <div class="alert alert-warning" role="alert">
                    <p class="text-center"> MORE INFO SOON !
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="app"></div>



    <audio class="hidden" id="audio" src="{{$fileUrl}}"></audio>


</body>

</html>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    let resdata = "{{ $fileUrl }}";
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


    play = () => {
        window.location = "https://open.spotify.com/artist/5NxPWcRFOCKAat7bkH6yT7";

    }
    video = () => {
        window.location = "https://www.youtube.com/channel/UCtJryaBQxg1FNJcB1k4HRhg/videos";
    }
    document.getElementById('start').addEventListener('click', () => {
        setTimeout(off, 2000);
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
            document.getElementById("text").innerHTML = "EXPIRED";
        }
    }, 1000);

    $('#myTab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>