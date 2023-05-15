<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV Type 1 Resume!!</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('assets/CV1/style.css') }}>
</head>

<body>
    <form action={{route('cv1submit')}} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="header">
                <div class="img-area">
                    <img src={{$data->img}}
                        alt="">
                </div>
                <h6><input type="file" name="image"></h6>
                <h1><input type="text" value="{{$data->name}}" id="txtFirst" name="name"></h1>
                <h3><input type="text" value="{{$data->designation}}" name="designation"></h3>
            </div>
            <div class="main">
                <div class="left">
                    <h2>Personal Information</h2>
                    <p><strong>Name:</strong> <input type="text" value="{{$data->name}}" id="txtSecond"></p>
                    <p><strong>Age:</strong> <input type="text" value="{{$data->age}}" name="age"></p>
                    <p><strong>Email:</strong> <input type="text" value="{{$data->email}}" name="email"></p>
                    <p><strong>Phone:</strong> <input type="text" value="{{$data->phone}}" name="phone"></p>
                    <h2>Skills</h2>
                    <ul style="padding-left: 5%">
                        <li><input type="text" value="{{$data->skill1}}" name="skill1"></li>
                        <li><input type="text" value="{{$data->skill2}}" name="skill2"></li>
                        <li><input type="text" value="{{$data->skill3}}" name="skill3"></li>
                        <li><input type="text" value="{{$data->skill4}}" name="skill4"></li>
                        <li><input type="text" value="{{$data->skill5}}" name="skill5"></li>
                    </ul>
                    <h2>Education</h2>
                    <h4><input type="text" value="{{$data->edu1}}" name="edu1"></h4>
                    <p><input type="text" value="{{$data->edudesc1}}" name="edudesc1"></p> <br>
                    <h4><input type="text" value="{{$data->edu2}}" name="edu2"></h4>
                    <p><input type="text" value="{{$data->edudsc2}}" name="edudsc2"></p>
                </div>

                <div class="right">
                    <h2>Work Experience</h2>
                    <h4 style="padding-bottom: 3px"><input type="text" value="{{$data->work1}}" name="work1"></h4>
                    <p><strong>Position:</strong><input type="text" value=" {{$data->workpos1}}" name="workpos1"></p>
                    <p><strong>Duration:</strong><input type="text" value=" {{$data->workyear1}}" name="workyear1"></p>
                    <ul>
                        <p>
                            <textarea name="workdsc1" id="" cols="30" rows="5">{{$data->workdsc1}}</textarea>
                        </p>
                    </ul>
                    <h4 style="padding-bottom: 3px"><input type="text" value="{{$data->work2}}" name="work2"></h4>
                    <p><strong>Position:</strong><input type="text" value=" {{$data->workpos2}}" name="workpos2"></p>
                    <p><strong>Duration:</strong><input type="text" value=" {{$data->workyear2}}" name="workyear2"></p>
                    <ul>
                        <p>
                            <textarea name="workdsc2" id="" cols="30" rows="5">{{$data->workdsc2}}</textarea>
                        </p>
                    </ul>
                    <h2>References</h2>
                    <h4><input type="text" value="{{$data->ref}}" name="ref"></h4>
                    <p><input type="text" value="{{$data->refdesg}}" name="refdesg"></p>
                    <p><input type="text" value="{{$data->refdept}}" name="refdept"></p>
                    <p><strong>Phone:</strong><input type="text" value=" {{$data->refphone}}" name="refphone"></p>
                </div>
            </div>
        </div>
        <div class="buton">
            <button class="mybtn" type="submit">SUBMIT INFO</button>
        </div>
    </form>
    <div class="butons">
        <a href={{ route('reg') }}><button class="mybtns">Go Back</button></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#txtFirst').keyup(function(e) {
                var txtVal = $(this).val();
                $('#txtSecond').val(txtVal);
            });

            $('#txtSecond').keyup(function(e) {
                var txtVal = $(this).val();
                $('#txtFirst').val(txtVal);
            });
        });
    </script>
</body>

</html>
