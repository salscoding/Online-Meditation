<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Meditation Environment</title>

    <!--Links-->

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Mystyle-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/meditation.css') }}">

    <!--Google Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Notable|Permanent+Marker|Roboto|Saira+Stencil+One&display=swap"
        rel="stylesheet">
</head>
<style>
</style>

<body>
    <!--Hero Image-->

    <div id="home" class="hero-image">
        <div class="hero-video">
            <div class="hero-wo">
                <!-- <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline id="myVideo" controls>
                    <source src="./assets/video/开始冥想.mp4" type="video/mp4">
                    </video> -->
                <img src="{{ asset('frontend/assets/image/meditation.jpg') }}" alt="" />

            </div>
            <div class="title">
                <span>Online Meditation Environment</span>
            </div>
            <div class="centre-content">
                <span>You can choose the point to start your meditation</span>
            </div>
            <div class="setting-time">

                <div class="img-font-box" style="position: relative;margin-top: 30px;">
                    <div>
                        <!-- <div>
                            <img src="./assets/image/home.png" alt="" class="titme-hover" data-toggle="modal"
                                data-target="#confirmModalReturn">
                        </div> -->
                    </div>
                </div>
                <!-- <div id="container-countdown">
                    <div id="count" class="is-hied">
                        <p id="countdown"></p>
                    </div>
                </div> -->
                <!-- <div class="img-font-box">
                    <div>
                        <img src="./assets/image/sttingTime.png" alt="" class="titme-hover" data-toggle="modal"
                            data-target="#confirmModal">
                    </div>
                    <div class="font-style">
                        <span>Set time</span>
                    </div>
                </div>
                <div class="img-font-box" id="play">
                    <div>
                        <img src="./assets/image/start1.png" alt="" class="start-img">
                    </div>
                    <div class="font-style">
                        <span>Start</span>
                    </div>
                </div>
                <div class="img-font-box" id="stop">
                    <div>
                        <img src="./assets/image/pause.png" alt="" class="start-img">
                    </div>
                    <div class="font-style">
                        <span>Pause</span>
                    </div>
                </div>
                <div class="img-font-box" id="reset">
                    <div>
                        <img src="./assets/image/reset.png" alt="" class="start-img">
                    </div>
                    <div class="font-style">
                        <span>Reset</span>
                    </div>
                </div> -->
                <div class="img-font-box" id="Mute" style="opacity: 1;">
                    <div>
                        <img src="{{ asset('frontend/assets/image/closeAudio.png') }}" alt="" class="start-img"
                            id="myImage">
                    </div>
                    <div class="font-style">
                        <span>Mute</span>
                    </div>
                </div>
            </div>
            <div class="custom-button" style="top: 30%; left: 10%;">
                <button onclick="fadeAndRedirect();" class="btn  mt-5 custom-button"
                    style="position: relative;z-index: 999;" id="btn01">O</button>
            </div>
            <div class="custom-button1" style="top: 68%; left: 34%;">
                <button onclick="fadeAndRedirect1();" class="btn mt-5 custom-button" style="position: relative;"
                    id="btn02">O</button>
            </div>
            <div class="custom-button2" style="top: 22%; left: 46%;">
                <button onclick="fadeAndRedirect2();" class="btn  mt-5 custom-button" style="position: relative;"
                    id="btn03">O</button>
            </div>
            <!-- <div class="custom-button-bottom" style="top: 84%; left: 6%;">
                <button type="button" class="btn  mt-5 custom-button" data-toggle="tooltip"
                    data-placement="top" title="Don't feel alone, I'll accompany you." id="btn04">
                    O
                </button>
            </div> -->
        </div>
        <br>
        <div class="order-box">
            <div>
                <button class="order-btn btn mt-5" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    User Account
                </button>
            </div>
            <div>
                <button class="order-btn btn mt-5" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#examplehistoryRecord">
                    Logs
                </button>
            </div>
            <div>
                <button class="order-btn btn mt-5" type="button" data-toggle="modal" data-target="#confirmModal">
                    Log Out
                </button>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 800px" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            User Center
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="flex-box">
                            <form>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="name" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">First name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Family name" placeholder="First name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">Family name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Family name" placeholder="Family name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">Birthday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Birthday" placeholder="Birthday" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="color: #fff">ConfirmPwd</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Etc" placeholder="ConfirmPwd" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="color-btn btn btn-secondary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="examplehistoryRecord" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 800px" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            Logs
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="testTable">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Login time</th>
                                    <th scope="col">Meditation time</th>
                                    <th scope="col">Feelings before</th>
                                    <th scope="col">Feelings after</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>the Bird</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Larry</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>

                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Log out or not</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body flex-box">
                        <div class="flex-center">
                            <span>Are you sure to log out?</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>
                        <a href="{{ route('frontend.logout') }}" type="button" class="color-btn btn btn-secondary"
                            id="confirmButton">
                            Log out
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Set time</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body flex-box">
                        <div class="flex-center" style="display: flex;">
                            <div style="margin-top: 6px;">
                                <span>Please set the time：</span>
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control" id="timeValue" min="0" max="10"
                                    oninput="if(value> 10)value=10;if(value< 1)value=1">
                                <div class=" input-group-append">
                                    <span class="input-group-text">min</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class=" color-btn btn btn-secondary" id="confirmButton"
                            onclick="setTime()">Confirm</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div
        class="modal fade"
        id="confirmModalReturn"
        tabindex="-1"
        role="dialog">
        <div
          class="modal-dialog"
          role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Return Home</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body flex-box">
              <div class="flex-center">
                <span>Are you sure to return home？</span>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="color-btn btn btn-secondary"
                data-dismiss="modal">
                Cancel
              </button>
              <button
                type="button"
                class="color-btn btn btn-secondary"
                id="confirmButton"
                onclick="returnHome()">
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <!-- <div class="modal fade" id="confirmModalReturn" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">home back</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="color: #fff;">
                            <span>Whether to return to the home page</span>
                        </div>
                        <div style="color: #fff;">
                            <span>Any thoughts on meditation</span>
                        </div>
                        <div style="padding: 20px;">
                            <input class="form-control" placeholder="Please enter your thoughts">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="color-btn btn btn-secondary" id="confirmButton"
                            onclick="returnHome()">Confirm</button>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="modal fade" id="alertMsg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alertMsg-head">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="color: #fff;">
                        <span id="alertMsgVal">Whether to return to the home page</span>
                    </div>

                </div>
                <div class="modal-footer alertMsg-footer">
                    <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <audio id="myAudio" loop>
            <source src="{{ asset('frontend/assets/video/y1972.mp3') }}" />
        </audio>
    </div>
    <!-- 音频1
        <div>
            <audio id="myAudio1">
                <source src="./assets/video/1517.mp3" />
            </audio>
        </div>
        音频2
        <div>
            <audio id="myAudio2">
                <source src="./assets/video/y1938.mp3" />
            </audio>
        </div>
        
        <div>
            <audio id="myAudio3">
                <source src="./assets/video/y1751.mp3" />
            </audio>
        </div>
        
        <div>
            <audio id="myAudio4">
                <source src="./assets/video/y2008.mp3" />
            </audio>-->
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
<script src="{{ asset('frontend/js/meditation.js') }}"></script>

</html>
