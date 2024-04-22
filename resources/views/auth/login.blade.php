<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Online Meditation Environment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/login.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Notable|Permanent+Marker|Roboto|Saira+Stencil+One&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div id="home" class="hero-image">
        <div class="hero-video">
            <div class="hero-wo">
                <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline id="myVideo" controls>
                    <source src="{{ asset('frontend/assets/video/video1.mp4') }}" type="video/mp4" />
                </video>
            </div>
            <div
                style="
            position: relative;
            z-index: 999 !important;
            display: flex;
            justify-content: center;
            align-items: center;
          ">
                <a href="{{ route('frontend.main') }}" class="btn mt-5 custom-button" style="position: relative">
                    Return
                </a>
            </div>
        </div>
        <div class="container" id="container">
            <!-- Register -->
            <div class="form-container sign-up-container">
                <form action="{{ route('frontend.register') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"
                            style="color: #fff; width: 120px">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="name" id="name" name="name"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"
                            style="color: #fff; width: 120px">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" type="text" placeholder="email" id="email"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"
                            style="color: #fff; width: 120px">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="password" type="password" placeholder="password"
                                id="password" required />
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"
                            style="color: #fff; width: 120px">ConfirmPwd</label>
                        <div class="col-sm-10">
                            <input type="password" placeholder="confirm password" id="password2" required />
                        </div>
                    </div> --}}
                    <button type="submit" class="color-op">
                        Register
                    </button>
                </form>
            </div>
            <!-- Login -->
            <div class="form-container sing-in-container" id="isShowLogin">
                <form action="{{ route('frontend.authenticate') }}" method="post">
                    @csrf
                    <h1 class="color-op">Login</h1>
                    <input class="form-control" type="text" placeholder="email" id="usernameLogin" name="email"
                        required />
                    <input class="form-control" type="password" placeholder="password" id="passwordLogin"
                        name="password" required />
                    <div class="remember">
                        <input type="checkbox" id="rememberMe" name="remember" />
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="color-op">
                        Login
                    </button>
                </form>
            </div>

            <!-- Sidebar content -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-pannel overlay-left" id="isAccount">
                        <h1 class="color-op">Existing account?</h1>
                        <p class="color-op">Click here to login and start your meditation.</p>
                        <button class="ghost" id="signIn" onclick="signIn()">
                            Login
                        </button>
                    </div>
                    <div class="overlay-pannel overlay-right">
                        <h1 class="color-op">No account？</h1>
                        <p class="color-op">Click Register to create a new account.</p>
                        <button class="ghost" id="signUp" onclick="signUp()">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br />

        <div class="modal fade" id="alertMsg" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header alertMsg-head">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="color: #fff;text-align: center;">
                            <span id="alertMsgVal">Whether to return to the home page</span>
                        </div>
                    </div>
                    <div class="modal-footer alertMsg-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ asset('frontend/js/login.js') }}"></script>

</html>
