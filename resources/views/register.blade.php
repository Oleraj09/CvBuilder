<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Panel :: Get Your All Access!!</title>
    <style>
        .style {
            color: red;
            font-size: 12px;
            margin: 0 !important;
            padding-top: 0px !important;
            text-align: left;
            padding-bottom: 10px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css"
        integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href={{ asset('assets/login.css') }}>
</head>

<body>
    @auth
        <div class="title shadow sticky-top">
            <div class="container-fluid d-flex">
                <p class="mt-3"> Hey <strong class="text-warning">{{ Auth::user()->name }}</strong>, Build Your CV from
                    our Template! It's Easy and Awasome to Get Job!!</p>
                <p class="ms-auto">
                    <a href={{route('home')}}><button class="btn btn-warning mt-2 text-white">Home</button></a>
                    <a href={{route('logout')}}><button class="btn btn-warning mt-2 text-white">Logout</button></a>
                </p>
            </div>
        </div>
        <div class="cvdemo" id="cv">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 pad">
                        <h1 class="text-center text-warning h1own">Templates to win recruiters over</h1>
                        <h4 class="text-center text-white h4own">Wide selection of designs. Carefully optimised for clarity
                            and impact. One click layouts - no formatting required.</h4>
                    </div>
                    <div class="col-sm-4 col-12 my-5">
                        <img src={{ asset('assets/cv1.PNG') }} alt="" style="height: 100%; width:100%">
                        <div class="dfelx">
                            <a href={{ route('cv1') }}><button class="mybtns">Build This CV</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 my-5">
                        <img src={{ asset('assets/cv2.PNG') }} alt="" style="height: 100%; width:100%">
                        <div class="dfelx">
                            <a href={{ route('cv1') }}><button class="mybtns">Build This CV</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 my-5">
                        <img src={{ asset('assets/cv1.PNG') }} alt="" style="height: 100%; width:100%">
                        <div class="dfelx">
                            <a href={{ route('cv1') }}><button class="mybtns">Build This CV</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left p-4" style="background-color:  #2d787e;">
            <div class="container-fluid d-flex">
                <span class="text-white-50">© 2023 Copyright reserved by MZ-CV Builder!!</span><span class="ms-auto">
                </span>
            </div>
        </div>
    @else
        <div class="login-page">
            @include('sweetalert::alert')
            <div class="form">
                <form method="POST" action={{ route('regconf') }} class="register-form" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Enter Name" required />
                    <input type="password" name="password" placeholder="Enter password" required />
                    @if ($errors->has('password'))
                        <p class="style">{{ $errors->first('password') }}</p>
                    @endif
                    <input type="text" name="email" placeholder="Enter mail address" required />
                    @if ($errors->has('email'))
                        <p class="style">{{ $errors->first('email') }}</p>
                    @endif
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form method="POST" action={{ route('logconf') }} class="login-form">
                    @csrf
                    <input type="text" name="email" placeholder="Enter Email" required />
                    <input type="password" name="password" placeholder="Enter password" required />
                    <button>login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>
    @endauth
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.js"
        integrity="sha512-gMrnU9iM+azBQtrSC8kTJy6+g+hjaIHnElQmb41QeHNTGYjbbtm0BptpIMgXYpS6iyWq9bPkxrcqgK8aqRsjAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.message a').click(function() {
                $('form').animate({
                    height: "toggle",
                    opacity: "toggle"
                }, "slow");
            });
        })
    </script>
</body>

</html>
