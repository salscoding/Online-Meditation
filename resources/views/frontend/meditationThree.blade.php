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
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/meditationThree.css') }}">

    <!--Google Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Notable|Permanent+Marker|Roboto|Saira+Stencil+One&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--Hero Image-->

    <div id="home" class="hero-image">
        <div class="hero-video">
            <div class="hero-wo">
                <!-- <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline id="myVideo" controls>
                    <source src="./assets/video/点击树后.mp4" type="video/mp4">
                    <video> -->
                <img src="{{ asset('frontend/assets/image/cloud1.jpeg') }}" alt="" />
            </div>
            <div class="setting-time">
                <div class="img-font-box" style="position: relative;">
                    <div>
                        <div>
                            <img src="{{ asset('frontend/assets/image/return.png') }}" alt=""
                                class="titme-hover" data-toggle="modal" data-target="#confirmModalReturn">
                        </div>
                        <div class="font-style">
                            <span>End Meditation</span>
                        </div>
                    </div>
                </div>
                <div id="container-countdown">
                    <div id="count" class="is-hied">
                        <p id="countdown"></p>
                    </div>
                </div>
                <div class="img-font-box">
                    <div>
                        <img src="{{ asset('frontend/assets/image/sttingTime.png') }}" alt=""
                            class="titme-hover" data-toggle="modal" data-target="#confirmModal">
                    </div>
                    <div class="font-style">
                        <span>Set time</span>
                    </div>
                </div>
                <!-- <div class="img-font-box" id="play">
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
                </div> -->
                <div class="img-font-box" id="playStop">
                    <div>
                        <img src="{{ asset('frontend/assets/image/start1.png') }}" alt="" class="start-img"
                            id="playStopImg">
                    </div>
                    <div class="font-style">
                        <span id="playStopText">Continue</span>
                    </div>
                </div>
                <div class="img-font-box" id="reset">
                    <div>
                        <img src="{{ asset('frontend/assets/image/reset.png') }}" alt="" class="start-img">
                    </div>
                    <div class="font-style">
                        <span>Reset</span>
                    </div>
                </div>
                <div class="img-font-box" id="Mute">
                    <div>
                        <img src="{{ asset('frontend/assets/image/closeAudio.png') }}" alt="" class="start-img"
                            id="myImage">
                    </div>
                    <div class="font-style">
                        <span>Mute</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Links
        <div class="footer">
            <p>Online Meditation Environment & 2024</p>
        </div>-->

        <div class="center-box" style="opacity: 0;">
            <p>Keep calm and just breathe</p>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">set time</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body flex-box">
                        <div style="color: #fff;">
                            <span>Keep calm and prepare to enjoy your meditation</span>
                        </div>
                        <div style="color: #fff;">
                            <span>You can edit your meditation on top left</span>
                        </div>
                        <div class="flex-center" style="display: flex;margin-top: 20px;">
                            <div style="margin-top: 6px;">
                                <span>set time：</span>
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control"
                                    aria-label="Amount (to the nearest dollar)" id="timeValue" min="1"
                                    max="10" oninput="if(value> 10)value=10;if(value< 1)value=1">
                                <div class=" input-group-append">
                                    <span class="input-group-text">min</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer" style="justify-content: center;">
                        <!-- <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                        <button type="button" class=" color-btn btn btn-secondary" id="confirmButton"
                            onclick="setTime()">Start meditation</button>
                    </div>
                </div>
            </div>
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="color-btn btn btn-secondary" id="confirmButton"
                            onclick="returnHome()">Confirm</button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="modal fade" id="confirmModalReturn" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">End Meditation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 20px;font-size: 18px;">
                        <div style="color: #fff;">
                            <span>Are you sure to stop your meditation？<br>You can write down your feelings here.</span>
                        </div>
                        <div style="color: #fff; text-align: left;margin-top: 20px;">
                            <span>How stressed are you before meditation?</span>
                        </div>
                        <div class="checkout" style="padding: 20px 0;color: #fff;text-align: left;font-size: 18px;">
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                    value="0" class="stress-radio">
                                0: No stress
                            </label>
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                    value="1" class="stress-radio">
                                1: Little stress
                            </label>
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                    value="2" class="stress-radio">
                                2: Much stress
                            </label>
                        </div>

                        <div style="color: #fff;text-align: left;">
                            <span>How stressed are you after meditation?</span>
                        </div>
                        <div class="checkout" style="padding: 20px 0;color: #fff;text-align: left;font-size: 18px;">
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                    value="0" class="stress-radio">
                                0: No stress
                            </label>
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                    value="1" class="stress-radio">
                                1: Little stress
                            </label>
                            <label style="margin-right: 10px;">
                                <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                    value="2" class="stress-radio">
                                2: Much stress
                            </label>
                        </div>
                        <div style="color: #fff; text-align: center;">
                            <span>Thank you for your meditation, see you next time!</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="color-btn btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="color-btn btn btn-secondary" id="confirmButton"
                            onclick="returnHome()">confirm</button>
                    </div>
                </div>
            </div>
        </div>

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
        <div class="modal fade" id="alertMsg1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header alertMsg-head">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="color: #fff">
                            <span id="alertMsgVal1">Whether to return to the home page</span>
                            <br>
                            <span id="alertMsgVal2">Whether to return to the home page</span>
                        </div>
                    </div>
                    <div class="modal-footer alertMsg-footer">
                        <button style="margin: 5px 50px;" type="button" class="color-btn btn btn-secondary"
                            onclick="openNextModal('Yes')">
                            Yes
                        </button>
                        <button style="margin: 5px 50px;" type="button" class="color-btn btn btn-secondary"
                            onclick="openNextModal('No')">
                            No
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <audio id="myAudio" loop>
                <source src="{{ asset('frontend/assets/video/cloud.mp3') }}" />
            </audio>
        </div>
        <!-- 音频1 -->
        <div>
            <audio id="myAudio1">
                <source src="{{ asset('frontend/assets/video/1517.mp3') }}" />
            </audio>
        </div>
        <!-- 音频2-->
        <div>
            <audio id="myAudio2">
                <source src="{{ asset('frontend/assets/video/y1938.mp3') }}" />
            </audio>
        </div>
        <!-- 音频3-->
        <div>
            <audio id="myAudio3">
                <source src="{{ asset('frontend/assets/video/y1751.mp3') }}" />
            </audio>
        </div>
        <!-- 音频4-->
        <div>
            <audio id="myAudio4">
                <source src="{{ asset('frontend/assets/video/y2008.mp3') }}" />
            </audio>
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
<script type="text/javascript" src="{{ asset('frontend/js/meditationThree.js') }}"></script>

</html>