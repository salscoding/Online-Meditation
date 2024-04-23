@extends('frontend.layouts.master')
@section('title', 'Forest Meditation')

@push('links')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/meditationOne.css') }}" />
@endpush

@section('content')
    <section>
        <div id="home" class="hero-image">
            <div class="hero-video">
                <div class="hero-wo">
                    <img src="{{ asset('frontend/assets/image/tree1.jpeg') }}" alt="" />
                </div>
                <div class="setting-time">
                    <div class="img-font-box" style="position: relative">
                        <a href="{{ route('frontend.home') }}" style="text-decoration: none;">
                            <div>
                                <div>
                                    <img src="{{ asset('frontend/assets/image/home1.png') }}" alt="" width="50px"
                                        class="titme-hover" />
                                </div>
                                <div class="font-style">
                                    <span>Home</span>
                                </div>
                            </div>
                        </a>
                        <div>
                            <div>
                                <img src="{{ asset('frontend/assets/image/return.png') }}" alt=""
                                    class="titme-hover" data-toggle="modal" data-target="#confirmModalReturn" />
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
                                class="titme-hover" data-toggle="modal" data-target="#confirmModal" />
                        </div>
                        <div class="font-style">
                            <span>Set Time</span>
                        </div>
                    </div>
                    <div class="img-font-box" id="playStop">
                        <div>
                            <img src="{{ asset('frontend/assets/image/start1.png') }}" alt="" class="start-img"
                                id="playStopImg" />
                        </div>
                        <div class="font-style">
                            <span id="playStopText">Continue</span>
                        </div>
                    </div>
                    <div class="img-font-box" id="reset">
                        <div>
                            <img src="{{ asset('frontend/assets/image/reset.png') }}" alt="" class="start-img" />
                        </div>
                        <div class="font-style">
                            <span>Reset</span>
                        </div>
                    </div>
                    <div class="img-font-box" id="Mute">
                        <div>
                            <img src="{{ asset('frontend/assets/image/closeAudio.png') }}" alt="" class="start-img"
                                id="myImage" />
                        </div>
                        <div class="font-style">
                            <span>Mute</span>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="center-box" style="opacity: 0;">
                <p>Keep calm and just breathe</p>
            </div>

            <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Set Time</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body flex-box">
                            <div style="color: #fff;">
                                <span>Please set a time for your meditation.</span>
                            </div>
                            <div style="color: #fff;">
                                <span>You can edit your meditation settings at the top left corner.</span>
                            </div>
                            <div class="flex-center" style="display: flex;margin-top: 20px;">
                                <div style="margin-top: 6px">
                                    <span>Set Time：</span>
                                </div>
                                <div class="input-group">
                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)"
                                        id="timeValue" min="3" max="10"
                                        oninput="if(value> 10)value=10;if(value< 3)value=3" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="justify-content: center;">
                            <button type="button" class="color-btn btn btn-secondary" id="confirmButton"
                                onclick="setTime()">
                                Start Meditation
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
                                <span>Are you sure you want to end your meditation? <br>Please select your answers to the
                                    questions below.</span>
                            </div>
                            <div style="color: #fff; text-align: left;margin-top: 20px;">
                                <span>How stressed did you feel before your meditation?</span>
                            </div>
                            <div class="checkout" style="padding: 20px 0;color: #fff;text-align: left;">
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                        value="0" class="stress-radio">
                                    0: No Stress
                                </label>
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                        value="1" class="stress-radio">
                                    1: Some Stress
                                </label>
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel1"
                                        value="2" class="stress-radio">
                                    2: A Lot of Stress
                                </label>
                            </div>

                            <div style="color: #fff;text-align: left;">
                                <span>How stressed are you feeling now?</span>
                            </div>
                            <div class="checkout" style="padding: 20px 0;color: #fff;text-align: left;">
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                        value="0" class="stress-radio">
                                    0: No Stress
                                </label>
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                        value="1" class="stress-radio">
                                    1: Some Stress
                                </label>
                                <label style="margin-right: 10px;">
                                    <input style="width: 15px;height: 15px;" type="radio" name="stressLevel2"
                                        value="2" class="stress-radio">
                                    2: A Lot of Stress
                                </label>
                            </div>
                            <div style="color: #fff; text-align: center;">
                                <span>Thank you for meditating today! Hope to see you again soon</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="color-btn btn btn-secondary"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="color-btn btn btn-secondary" id="confirmButton"
                                onclick="returnHome()">Confirm</button>
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
                            <div style="color: #fff">
                                <span id="alertMsgVal">Whether to return to the home page</span>
                            </div>
                        </div>
                        <div class="modal-footer alertMsg-footer">
                            <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                                Yes
                            </button>
                            <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                                No
                            </button>
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
                    <source src="{{ asset('frontend/assets/video/forest.mp3') }}" />
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
    </section>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('frontend/js/meditationOne.js') }}"></script>

    <script>
        var startMeditationRoute = "{{ route('startMeditation') }}";
        var recordStressLevelsRoute = "{{ route('recordStressLevels') }}";
    </script>
@endpush
