<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MZ-CV Builder :: Build your CV or Resume in Just one click!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css"
        integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css"
        integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href={{ asset('assets/style.css') }}>
</head>

<body>

    <nav class="navbar sticky-top navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand">
                <img src={{ asset('assets/logo.png') }} style="height: 60px; width:200px" alt="MZ-CV Builder">
            </a>
            <div class="d-flex input-group w-auto">
                @auth
                    <div class="btn btn-primary px-4">
                        <a href={{ route('reg') }}><span class="text-white" style="font-weight: 600">Dashboard</span></a>
                    </div>
                @else
                    <div class="btn btn-primary px-4">
                        <a href={{ route('reg') }}><span class="text-white" style="font-weight: 600">Sign Up For
                                Free</span></a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="items col-sm-7 col-12">
            <h1 class="h1own py-2">The CV that gets the job DONE!!</h1>
            <h4 class="h4own pb-2">Build a new CV in minutes or improve your existing one.</h4>
            <a href="#cv"><button class="mybtns">Create Your CV</button></a>
        </div>
    </div>

    <div class="cvdemo" id="cv">
        <div class="container">
            <div class="row">
                <div class="col-12 pad">
                    <h1 class="text-center text-white h1own">Templates to win recruiters over</h1>
                    <h4 class="text-center text-white h4own">Wide selection of designs. Carefully optimised for clarity
                        and impact. One click layouts - no formatting required.</h4>
                </div>
                <div class="col-sm-4 col-12 my-5">
                    <img src={{ asset('assets/cv1.PNG') }} alt="" style="height: 100%; width:100%">
                    <div class="dfelx">
                        <a href={{ route('cv1') }}><button class="mybtn">Build This CV</button></a>
                    </div>
                </div>
                <div class="col-sm-4 col-12 my-5">
                    <img src={{ asset('assets/cv2.PNG') }} alt="" style="height: 100%; width:100%">
                    <div class="dfelx">
                        <a href={{ route('cv1') }}><button class="mybtn">Build This CV</button></a>
                    </div>
                </div>
                <div class="col-sm-4 col-12 my-5">
                    <img src={{ asset('assets/cv1.PNG') }} alt="" style="height: 100%; width:100%">
                    <div class="dfelx">
                        <a href={{ route('cv1') }}><button class="mybtn">Build This CV</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center h1own py-5">Easiest and most feature-packed
                        <br> CV builder available
                    </h1>
                </div>
                <div class="col-md-6 d-flex my-4">
                    <div class="left p-4">
                        <img src={{ asset('assets/1.PNG') }} alt="" style="height:100px;width:100px">
                    </div>
                    <div class="right p-4">
                        <h4 class="h4own" style="font-weight: 600">Step-by-step builder</h4>
                        <p class="justify">Easy to use step-by-step builder enables you to create a well-polished,
                            professional CV in
                            minutes. Impress. Save time.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex my-4">
                    <div class="left p-4">
                        <img src={{ asset('assets/2.PNG') }} alt="" style="height:100px;width:100px">
                    </div>
                    <div class="right p-4">
                        <h4 class="h4own" style="font-weight: 600">Pre-written content</h4>
                        <p class="justify">Make your CV more sophisticated. Select from thousands of pre-written bullet
                            points for hundreds of jobs and careers. Just click and insert them directly into your CV!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex my-4">
                    <div class="left p-4">
                        <img src={{ asset('assets/3.PNG') }} alt="" style="height:100px;width:100px">
                    </div>
                    <div class="right p-4">
                        <h4 class="h4own" style="font-weight: 600">Expert tips & guidance</h4>
                        <p class="justify">Get detailed CV-building tips and advice every step of the way. CV pro or
                            beginner - we've got you covered.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex my-4">
                    <div class="left p-4">
                        <img src={{ asset('assets/4.PNG') }} alt="" style="height:100px;width:100px">
                    </div>
                    <div class="right p-4">
                        <h4 class="h4own" style="font-weight: 600">Unlimited CVs & Downloads</h4>
                        <p class="justify">No limit on the number of CVs you can create. Unlimited printing, sharing and
                            downloading in PDF, Word, plain text or image formats. Limitless creativity.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="bg-light text-center text-lg-start">
        <div class="container p-5 pb-3">
            <form action="">
                <div class="row">
                    <div class="col-auto mb-4 mb-md-0">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <div class="col-auto col-12 mb-4 mb-md-0">
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example25" class="form-control"
                                placeholder="Enter your email adress..." />
                        </div>
                    </div>
                    <div class="col-auto mb-4 mb-md-0">
                        <button type="submit" class="btn btn-primary mb-4 px-5">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="text-center text-lg-start text-white-50" style="background-color: #0c0b0b;;">
        <section class="container d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src={{ asset('assets/logo.png') }} style="height: 60px; width:200px"
                                alt="MZ-CV Builder">
                        </h6>
                        <p>
                            Build Modern CV or Resume and Create you own opportunity !
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-left p-4" style="background-color: #000000;">
            <div class="container d-flex">
                <span class="py-1">© 2023 Copyright reserved by MZ-CV Builder!!</span><span class="ms-auto">
                    <div id="mybutton" class="btn btn-secondary rounded-pill" onclick="topFunction()"><i
                            class="fa-solid fa-arrow-up"></i></div>
                </span>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.js"
        integrity="sha512-gMrnU9iM+azBQtrSC8kTJy6+g+hjaIHnElQmb41QeHNTGYjbbtm0BptpIMgXYpS6iyWq9bPkxrcqgK8aqRsjAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.js"
        integrity="sha512-6V5JccoHkiddv+vVubCp2TFQsx9UC/VIa5+l+zSObWn1Ns5nYQOkdCgRah1Fb0NOeYPAD6b+d7Ui9ImHTIwsJw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let mybutton = document.getElementById("mybutton");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
