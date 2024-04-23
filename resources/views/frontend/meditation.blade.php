{{-- master layout extending --}}
@extends('frontend.layouts.master')
@section('title', 'Online Meditation Environment')

@push('links')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/meditation.css') }}">
@endpush

@section('content')
    <section>
        <div id="home" class="hero-image">
            <div class="hero-video">
                <div class="hero-wo">
                    <img src="{{ asset('frontend/assets/image/meditation.jpg') }}" alt="" />
                </div>
                <div class="title">
                    <span>Online Meditation Environment</span>
                </div>
                <div class="centre-content">
                    <span>Please choose a point to start your meditation (cloud, forest, or lake)</span>
                </div>
                <div class="setting-time">

                    <div class="img-font-box" style="position: relative;margin-top: 30px;">
                        <div>
                        </div>
                    </div>
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
                                User Profile
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="flex-box">
                                <form id="userProfileForm" action="{{ route('users.update', ['userId' => $user->id]) }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label"
                                            style="color: #fff">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="username"
                                                placeholder="Username" value="{{ $user->username }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-2 col-form-label" style="color: #fff">First
                                            Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name" value="{{ $user->first_name }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-2 col-form-label" style="color: #fff">Last
                                            Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name" value="{{ $user->last_name }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="birthday" class="col-sm-2 col-form-label" style="color: #fff">Birth
                                            Date</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control datepicker" id="birthday"
                                                name="birthday" placeholder=" Birthday" value="{{ $user->birthdate }}"
                                                autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label"
                                            style="color: #fff">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ $user->user->email }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label"
                                            style="color: #fff">Password<span style="color: red;"> *</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" required />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" form="userProfileForm" class="color-btn btn btn-secondary">
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
                            <div id="logsContainer">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Login Time</th>
                                            <th scope="col">Meditation Time</th>
                                            <th scope="col">Feelings Before</th>
                                            <th scope="col">Feelings After</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $key => $log)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $log->login_time }}</td>
                                                <td>{{ $log->meditation_time }}</td>
                                                <td>{{ $log->feelings_before }}</td>
                                                <td>{{ $log->feelings_after }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="color-btn btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
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
            <div>
                <audio id="myAudio" loop>
                    <source src="{{ asset('frontend/assets/video/y1972.mp3') }}" />
                </audio>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('frontend/js/meditation.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Initialize datepicker
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd', // Set desired date format
                autoclose: true, // Close the datepicker when a date is selected
                todayHighlight: true // Highlight today's date
            });
        });
    </script>
@endpush
