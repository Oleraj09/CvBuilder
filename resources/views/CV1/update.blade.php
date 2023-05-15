<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV Type 1 Resume!!</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href={{ asset('assets/CV1/style.css') }}> --}}
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #ffffff;
        }

        .container {
            background: #ffffff;
            max-width: 800px;
            margin: 60px auto;
            height: auto;
            padding: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
        }

        .header {
            text-align: center;
        }

        .header h1 {
            margin-bottom: 10px;
        }

        .header h3 {
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 500;
        }

        .img-area {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 25px auto;
            border: 15px groove deepskyblue;
        }

        .img-area img {
            width: 100%;
        }

        .main {
            display: flex;
            flex-wrap: wrap;
        }

        .left {
            flex: 1;
            padding: 30px;
        }

        .left p {
            line-height: 2;
        }

        .left ul li {
            line-height: 2;
        }

        h2 {
            background: #00b6c4;
            padding: 15px;
            color: #fff;
            margin: 30px 0;
            font-size: 20px;
            border-radius: 0 50px 50px 0;
        }

        .right {
            flex: 1;
            padding: 30px;
        }

        .right h3 {
            margin-bottom: 15px;
        }

        .right p {
            line-height: 1.8;
        }

        .right ul li {
            line-height: 2;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .container {
                width: 95%;
                height: auto;
            }

            h2 {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 594px) {
            .main {
                display: flex;
                /* flex-direction: column; */
            }

            .left {
                width: 50%;
            }

            .right {
                width: 50%;
            }

            .container {
                width: 95%;
                height: auto;
            }

            h2 {
                font-size: 12px;
            }
        }

        h1>input[type="text"] {
            border: none;
            background: none;
            font-weight: 600;
            font-size: x-large;
            text-align: center;
        }

        h3>input[type="text"] {
            border: none;
            background: none;
            font-weight: 400;
            font-size: large;
            text-align: center;
            width: 250px;
        }

        p>input[type="text"] {
            border: none;
            background: none;
            font-weight: 400;
            font-size: 16px;
            text-align: left;
            width: 240px;
        }

        li>input[type="text"] {
            border: none;
            background: none;
            font-weight: 400;
            font-size: small;
            text-align: left;
        }

        h4>input[type="text"] {
            border: none;
            background: none;
            font-weight: 600;
            font-size: large;
            text-align: left;
            width: 250px;
        }

        h6>input[type="file"] {
            text-align: center;
            margin-left: 15%;
            padding: 0 0 10px 0;
        }

        textarea {
            border: none;
            background: none;
            font-size: 16px;
            text-align: justify;
        }

        .buton {
            text-align: center;
            padding: 0 0 80px 0;
        }

        .butons {
            text-align: center;
            padding: 0 0 80px 0;
        }

        .mybtn {
            height: 60px;
            width: 180px;
            border: none;
            background: rgb(236, 170, 46);
            color: white;
            font-weight: 600;
            filter: drop-shadow(8px 8px 10px rgb(54, 54, 54));
            text-transform: uppercase;

        }

        .mybtn:hover {
            height: 60px;
            width: 180px;
            border: none;
            background: rgb(233, 176, 70);
            color: white;
            font-weight: 600;
            filter: drop-shadow(8px 8px 10px rgb(119, 117, 117));
            text-transform: uppercase;

        }

        .mybtns {
            height: 60px;
            width: 180px;
            border: none;
            background: rgb(46, 166, 236);
            color: white;
            font-weight: 600;
            filter: drop-shadow(8px 8px 10px rgb(54, 54, 54));
            text-transform: uppercase;

        }

        .mybtns:hover {
            height: 60px;
            width: 180px;
            border: none;
            background: rgb(70, 195, 233);
            color: white;
            font-weight: 600;
            filter: drop-shadow(8px 8px 10px rgb(119, 117, 117));
            text-transform: uppercase;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="img-area">
                {{-- <img src={{asset($data[0]->img)}} alt=""> --}}
                {{-- <img src={{ public_path($data[0]->img) }} alt=""> --}}
                <img src="/{{$data[0]->img}}" alt=""> 
            </div>
            <h1>{{ $data[0]->name }}</h1>
            <h3>{{ $data[0]->designation }}</h3>
        </div>
        <div class="main">
            <div class="left">
                <h2>Personal Information</h2>
                <p><strong>Name:</strong> {{ $data[0]->name }}</p>
                <p><strong>Age:</strong> {{ $data[0]->age }}</p>
                <p><strong>Email:</strong> {{ $data[0]->email }}</p>
                <p><strong>Phone:</strong> {{ $data[0]->phone }}</p>
                <h2>Skills</h2>
                <ul style="padding-left: 5%">
                    <li>{{ $data[0]->skill1 }}</li>
                    <li>{{ $data[0]->skill2 }}</li>
                    <li>{{ $data[0]->skill3 }}</li>
                    <li>{{ $data[0]->skill4 }}</li>
                    <li>{{ $data[0]->skill5 }}</li>
                </ul>
                <h2>Education</h2>
                <h4>{{ $data[0]->edu1 }}</h4>
                <p>{{ $data[0]->edudesc1 }}</p> <br>
                <h4>{{ $data[0]->edu2 }}</h4>
                <p>{{ $data[0]->edudsc2 }}</p>
            </div>

            <div class="right">
                <h2>Work Experience</h2>
                <h4 style="padding-bottom: 3px"> {{ $data[0]->work1 }}</h4>
                <p><strong>Position:</strong> {{ $data[0]->workpos1 }}</p>
                <p><strong>Duration:</strong> {{ $data[0]->workyear1 }}</p>
                <ul>
                    <p>
                        {{ $data[0]->workdsc1 }}
                    </p>
                </ul> <br>
                <h4 style="padding-bottom: 3px"> {{ $data[0]->work2 }}</h4>
                <p><strong>Position:</strong> {{ $data[0]->workpos2 }}</p>
                <p><strong>Duration:</strong> {{ $data[0]->workyear2 }}</p>
                <ul>
                    <p>
                        {{ $data[0]->workdsc2 }}
                    </p>
                </ul>
                <h2>References</h2>
                <h4>{{ $data[0]->ref }}</h4>
                <p>{{ $data[0]->refdesg }}</p>
                <p>{{ $data[0]->refdept }}</p>
                <p>{{ $data[0]->refphone }}</p>
            </div>
        </div>
    </div>
    <div class="buton">
        <a href={{ route('cv1download', Auth::user()->id) }}><button class="mybtn" type="submit">Download
                CV</button></a> <a href={{ route('cv1') }}><button class="mybtns">Go Back</button></a>
    </div>
</body>

</html>
