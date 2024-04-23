<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Online Meditation Environment</title>

    <!--Links-->

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!--Mystyle-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/index.css') }}" />
    {{-- asset --}}

    <!--Google Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Notable|Permanent+Marker|Roboto|Saira+Stencil+One&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!--Hero Image-->

    <div id="home" class="hero-image">
        <div class="hero-video">
            <div class="hero-wo">
                <!-- <video
            autoplay="autoplay"
            loop="loop"
            muted
            defaultMuted
            playsinline
            id="myVideo"
            controls="false">
            <source
              src="./assets/video/pexels-rostislav-uzunov-7513671.mp4"
              type="video/mp4" />
          </video> -->
                <img src="{{ asset('frontend/assets/image/index.jpg') }}" alt="" />
            </div>
        </div>
        <br />
    </div>
    <div class="header">
        <div class="center-box">
            <p>Online Meditation Environment</p>
        </div>
        <a href="{{ route('frontend.login') }}"class="btn custom-button" style="position: relative; z-index: 1000;">
            Register / Login
        </a>
    </div>
    <div class="content" id="textContainer">
        <img src="{{ asset('frontend/assets/image/index_popup.jpg') }}" alt="">
        <div class="text">
            <div>Discover the transformative power of online meditation. Join us on a journey of self-discovery and
                inner peace from the comfort of your own home. Our guided sessions provide an oasis of calm in the midst
                of life's chaos, helping you to reduce stress, improve focus, and cultivate mindfulness. Embrace the
                convenience of online meditation and unlock a world of relaxation at your fingertips.
            </div>

            <div>Let's start this journey together......</div>
        </div>
    </div>
    <div class="footer">
        <p>Online Meditation Environment & 2024</p>
    </div>
</body>
<!--Script-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ asset('frontend/js/index.js') }}"></script>

</html>
