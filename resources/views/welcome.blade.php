<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    @extends('home')
    @section('konten')
    <nav class="nav justify-content-center sticky-top">
      <a class="nav-link" href="#">Profile</a>
      <a class="nav-link" href="#skillset">Skills</a>
      <a class="nav-link" href="#aboutme">About Me</a>
      <a class="nav-link " href="#hobbyku">Hobby</a>
      <a class="nav-link last-child" href="#sosmed">Know Me More</a>
    </nav>

    <section class="profile" id="Profile">
        <div class="containertulis">
            <div class="Profiletitle">
                <H1 class="nama">Hi, I'm Zakaria</H1>
            </div>
            <div class="descprofile">
                <p class="isidesc">I'm a Programmer with main interest on Artificial Intelligence and Computer Security.<Br>I love playing sport such like volleyball and basketball, Also self-proclaimed gymrat and gymbro>:3.</p>
            </div>
        </div>
        <div class="foto">
            <img class="back" src="bg.png" alt="" srcset="">
            <img class="fotoku" src="profil.png" alt="" srcset="">
        </div>
    </section>

    <div class="ist"></div>

    <section id="skillset">
        <div class="ist1"></div>
        <h2 class="titleskil">Skills</h2>
        <div class="containerskill">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner" id="kartu">
                    <div class="carousel-item">
                        <div class="card mb-3" style="max-width: 720px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="yo.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">Computer Security</h5>
                                    <p class="card-text">The field that most interests me to pursue is Information Technology, I have only been developing my skills in this field for the past month.</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary">
                                        <p class="matery">Mastery:</p>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 10%"></div>
                                        </div>
                                        </small>
                                    </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card mb-3" style="max-width: 720px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="bisa.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">Artificial Intelligence</h5>
                                    <p class="card-text">I have 2 semesters worth of experience in the field of artificial intelligence, with a main interest in Deep Learning.I have a high passion for delving into the knowledge of Artificial Intelligence.</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary">
                                        <p class="matery">Mastery:</p>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                        </small>
                                    </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mb-3" style="max-width: 720px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="lead.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">Leadership</h5>
                                    <p class="card-text">I have been experienced in organizing since junior high school, I have gained quite a lot of experience. Nevertheless, I still want to learn more about leadership in-depth.</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary">
                                        <p class="matery">Mastery:</p>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        </small>
                                    </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="aboutme">
        <div class="about">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="personality">
                            <div class="kepalap">
                                <h3 class="personalhead">Personality</h3>
                                <h4 class="ent">ENFJ-A</h4>
                                <h5 class="mc">The Protagonist</h5>
                                <img class="akumc" src="yahalo.svg" alt="" srcset="">
                                <p class="jelasmc">"A Protagonist (ENFJ) is a person with the Extraverted, Intuitive, Feeling, and Judging personality traits. These warm, forthright types love helping others, and they tend to have strong ideas and values. They back their perspective with the creative energy to achieve their goals."</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="personality">
                            <div class="kepalap">
                                <h3 class="D">My 3 D's</h3>
                                <h3 class="D1">Discipline</h3></h3>
                                <h3 class="D2">Determination</h3>
                                <h3 class="D3">Dedication</h3>
                            </div>
                            <p class="quote">“We must all suffer from one of two pains: the pain of discipline or the pain of regret. The difference is discipline weighs ounces while regret weighs tons.”</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="hobbyku" class="flex-container">
        @foreach ($Hobby as $hob)
            <div class="card" id="kartunya" style="width: 18rem;">
                <img src="{{$hob['image']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$hob['Hobby name']}}</h5>
                  <p class="card-text">{{$hob['Hobby Detail']}}</p>
                  <a href="/{{$hob['Hobby name']}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </section>

    <section id="sosmed">
        <div class="lmao"></div>
        <h1 class="kontak">Contact me on</h1>
        <div class="instagram">
            <img class="ig" src="ig.png" alt="">
            <a class="descig" href="https://www.youtube.com/watch?v=UIp6_0kct_U">@zach.berlam</a>
        </div>
        <div class="wa">
            <img class="ig" src="wa.png" alt="">
            <a class="descig" href="https://www.youtube.com/watch?v=UIp6_0kct_U">+6282147279041</a>
        </div>
        <div class="wa">
            <img class="palo" src="palo.png" alt="">
            <a class="pale" href="https://www.youtube.com/watch?v=UIp6_0kct_U">Pupu#2147</a>
        </div>
        <div class="lmao"></div>
    </section>


</body>
</html>
