<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mewo.uz - Eternity Dream</title>
    <link rel="shortcut icon" href="images/logo.png">
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
<div class="loader">

    <div class="loader-anim progress-bar">
        <div class="bg-success position-absolute h-100 inner"
             data-percent="100"
             data-color="green"></div>
        <img src="{{asset('images/logo-loader.png')}}" alt="">
    </div>

</div>


<main>

    <div class="position-absolute zindex">
        <div class="section">
            <div class="bg">
                <video autoplay loop muted>
                    <source src="{{asset('images/bg.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="black-overlay w-100">
        <nav class="navbar navbar-expand-lg w-100 navbar-light bg-transparent ">
            <a class="navbar-brand mb-auto" href="#"><img class="logo-lg" src="{{asset('images/logo%201.png')}}" alt=""><img class="logo-sm" src="images/logo%20mask.png" alt=""></a>
            <button  class="navbar-toggler collapsed border-0" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="dropdown nav-item ml-sm-auto lang-sm">
                <a class="nav-link " href="#" id="langDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    O'Z
                    <span class="ml-1"><img src="{{asset('images/Polygon%203.png')}}" alt=""></span>
                </a>
                <div class="dropdown-menu lang-menu" aria-labelledby="langDropdown">
                    <a class="dropdown-item lang-item" href="/uz">O'zbekcha</a>
                    <a class="dropdown-item lang-item" href="/">Ruscha</a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li class="nav-item mx-lg-auto">
                        <a class="nav-link" href="#product">Mahsulot</a>
                        <div class="line"></div>
                    </li>
                    <li class="nav-item  mx-lg-auto">
                        <a class="nav-link" href="#usluga">Xizmatlarimiz</a>
                        <div class="line"></div>

                    </li>
                    <li class="nav-item  mx-lg-auto">
                        <a class="nav-link" href="#comments">Fikrlar</a>
                        <div class="line"></div>

                    </li>
                    <li class="nav-item mx-lg-auto">
                        <a class="nav-link" href="#news">Tavsiyalar</a>
                        <div class="line"></div>

                    </li>
                    <li class="nav-item  mx-lg-auto  "  >
                        <div class="lang-lg  qdropdown">
                            <a class="nav-link text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Uz
                                <span class="ml-1"><img src="{{asset('images/Polygon%203.png')}}" alt=""></span>

                            </a>
                            <div class="line"></div>


                            <div class="dropdown-menu lang-menu"  style="z-index: 9999999999999!important; position: relative" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item lang-item" href="/uz">O'zbekcha</a>
                                <a class="dropdown-item lang-item" href="/" style="z-index: 999999!important; position: absolute ">Ruscha</a>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item  mx-lg-auto">
                        <a class="nav-link" href="tel:+998712058095">
                            <span class="ml-1"><img src="{{asset('images/phone.svg')}}" alt=""></span>
                            {{\App\General::find(1)->phone2}}
                        </a>
                        <div class="line"></div>


                    </li>

                    <li class="nav-item ml-auto">
                        <button type="button" class="order" data-toggle="modal" data-target="#zayavka">
                            Murojaat yuborish

                            <span class="btn-animate"></span>

                        </button>
                    </li>


                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 main-left ">
                    <div class="margin-left mt-0">
                        <div class="main-header">Eternity Dream</div>
                        <div class="carousel-sm">
                            <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/drug1.png')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/drug2.png')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/drug3.png')}}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text text-left">Sog'liqni yaxshilaydigan mahsulot, parhezdagi ozuqa. Hayot energiyasi manbai</p>
                        <button class="order-lg order text-center d-block"  data-toggle="modal" data-target="#zayavka" >
                             Buyurtma berish
                            <span class="btn-animate-lg btn-animate"></span>
                        </button>
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                <div class="li"><div class="round"></div> <div class="t">100% Tabiiy mahsulot</div></div>
                                <div class="li"><div class="round"></div><div class="t">Alkogolsiz mahsulot</div></div>
                                <div class="li"><div class="round"></div><div class="t">Analoglari mavjud emas</div></div>
                                <div class="li"><div class="round"></div><div class="t">Bepul maslahatlar</div></div>
                            </div>
                            <div class="col-lg-6 mt-lg-5">
                                <div class="li"><div class="round"></div><div class="t">O'zbekiston bo'yicha bepul yetkazib berish</div></div>
                                <div class="li"><div class="round"></div><div class="t">Fitobalzamni qabul qilish davomida mutaxassisdan maslahatlar olish</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 carousel-lg">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="2000">
                                <img src="{{asset('images/drug1.png')}}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="{{asset('images/drug2.png')}}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="{{asset('images/drug3.png')}}" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="black-overlay px-4" id="usluga">
        <div class="container-fluid skidki">
            <div class="row pb-5">
                <div class="header my-5">Xizmatlarimiz</div>
                <div class="col-lg-3">
                    <div class="offer ">
                        <div class="row align-items-center text-center justify-content-center h-100">
                            <div class="offer-img">
                                <img src="{{asset('images/natural.svg')}}" alt="">
                            </div>
                            <div class="col-12">
                                <div class="offer-text">
                                    100% Tabiiy mahsulot
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="offer ">
                        <div class="row align-items-center text-center justify-content-center h-100">
                            <div class="offer-img">
                                <img src="{{asset('images/consultant%201.svg')}}" alt="">
                            </div>
                            <div class="col-12">
                                <div class="offer-text">
                                    Fitobalzamni qabul qilish davomida mutaxassisdan maslahatlar olish
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="offer ">
                        <div class="row align-items-center text-center justify-content-center h-100">
                            <div class="offer-img">
                                <img src="{{asset('images/fast-delivery.svg')}}" alt="">
                            </div>
                            <div class="col-12">
                                <div class="offer-text">
                                    O'zbekiston bo'yicha bepul yetkazib berish
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="offer">
                        <div class="row align-items-center text-center justify-content-center h-100">
                            <div class="offer-img">
                                <img src="{{asset('images/tabler_discount-2.svg')}}" alt="">
                            </div>
                            <div class="col-12">
                                <div class="offer-text">
                                    Pensioner va Nogironlar uchun maxsus chegirmalar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="black-overlay deseases px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="header text-left">Men Women qanday kasalliklarga davo bo'la oladi:</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="desease desease-1">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/brain.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                                <div class="t2">Yuqori qon bosimi</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button class=""   data-toggle="modal" data-target=".info-modal-1"  >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-2">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/eyes.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Ko'z kasalliklari</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button class="" data-toggle="modal" data-target=".info-modal-2" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-3">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/tomoq.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Qalqonsimon bez</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-3" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-4">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/lung.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Bronx va o'pka kasalliklari</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-4" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-5">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/heart.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Yurak-qon tomir tizimi</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-5" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-6">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/pechen.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Jigar kasalliklari</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-6" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-7">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/stomach.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Oshqozon ichak kasalliklari</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-7" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-8">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/buyrak.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Buyrak kasalliklari</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-8" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-9">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/motion.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Muskul-skelet tizimi</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-9" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-10">
                        <div class="img-overlay-2 ">
                            <img src="{{asset('images/diabet.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Qandli diabet</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button data-toggle="modal" data-target=".info-modal-10" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-11">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/male.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Erkaklarda uchraydigan kasalliklar</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-11" >Batafsil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="desease desease-12">
                        <div class="img-overlay-2">
                            <img src="{{asset('images/female.jpg')}}" class="img-overlay-inner" alt="">
                        </div>
                        <div class="title">
                            <div class="t2">Ayollarda uchraydigan kasalliklar</div>
                        </div>
                        <div class="more">
                            <div class="white-animate"></div>
                            <div class="pink"></div>
                            <button  data-toggle="modal" data-target=".info-modal-12" >Batafsil</button>
                        </div>
                    </div>
                </div>vom
            </div>
            <div class="row py-5">
                <div class="col-lg-5 ">
                    <div class="head-2">
                       MenWoman haqida batafsil ma'lumotni yuklab olish
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <a class="rounded-circle mx-auto  p-3 bg-white" href=""  style="height: 100px; width: 100px; display: flex; align-items: center;">
                        <img src="{{asset('images/pdf.png')}}" style="margin: auto; display: inline;" alt="">
                    </a>

                </div>
            </div>

        </div>
    </section>


    @if(\App\Property::all()->count()!=0)
        <section class="black-overlay properties px-lg-4 px-sm-0">
            <div class="container-fluid py-5">
                <div class="row py-5">
                    <div class="col-lg-6">
                        <div class="header text-left">Men Women tarkibi:</div>
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <div class="head-2">Ayollar va erkaklar uchun tibbiy va sog'liqni yaxshilash mahsuloti</div>
                    </div>

                </div>
                <div class="row drug-back ">
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::first()->id}}"
                                            data-head="{{\App\Property::first()->head_uz}}" data-body="{{\App\Property::first()->body_uz}}"
                                            data-image="{{\App\Property::first()->image}}">
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::first()->head_uz}}
                                        </div>
                                        <div class="striped-line-1">
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-2">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(1)->first()->id}}"
                                            data-head="{{\App\Property::skip(1)->first()->head_uz}}" data-body="{{\App\Property::first()->body_uz}}"
                                            data-image="{{\App\Property::skip(1)->first()->image}}">
                                        <div class="striped-line-2 " style="transform: rotateY(180deg);" >
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(1)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(1)->first()->head_uz}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(2)->first()->id}}"
                                            data-head="{{\App\Property::skip(2)->first()->head_uz}}" data-body="{{\App\Property::skip(2)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(2)->first()->image}}">
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(2)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(2)->first()->head_uz}}
                                        </div>
                                        <div class="striped-line-1">
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(3)->first()->id}}"
                                            data-head="{{\App\Property::skip(3)->first()->head_uz}}" data-body="{{\App\Property::skip(3)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(3)->first()->image}}">
                                        <div class="striped-line-2 " style="transform: rotateY(180deg);" >
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(3)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(3)->first()->head_uz}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-2">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(4)->first()->id}}"
                                            data-head="{{\App\Property::skip(4)->first()->head_uz}}" data-body="{{\App\Property::skip(4)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(4)->first()->image}}">
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(4)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(4)->first()->head_uz}}
                                        </div>
                                        <div class="striped-line-1">
                                            <img src="{{asset('images/line2.svg')}}" alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(5)->first()->id}}"
                                            data-head="{{\App\Property::skip(5)->first()->head_uz}}" data-body="{{\App\Property::skip(5)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(5)->first()->image}}">
                                        <div class="striped-line-2"  style="transform: rotateY(180deg);" >
                                            <img src="{{asset('images/line2.svg')}}" alt="">
                                        </div>
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(5)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(5)->first()->head_uz}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(6)->first()->id}}"
                                            data-head="{{\App\Property::skip(6)->first()->head_uz}}" data-body="{{\App\Property::skip(6)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(6)->first()->image}}">
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(6)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(6)->first()->head_uz}}
                                        </div>
                                        <div class="striped-line-1">
                                            <img src="{{asset('images/line3.svg')}}" alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(7)->first()->id}}"
                                            data-head="{{\App\Property::skip(7)->first()->head_uz}}" data-body="{{\App\Property::skip(7)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(7)->first()->image}}">
                                        <div class="striped-line-2"  style="transform: rotateY(180deg);" >
                                            <img src="{{asset('images/line3.svg')}}" alt="">
                                        </div>
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(7)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(7)->first()->head_uz}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(8)->first()->id}}"
                                            data-head="{{\App\Property::skip(8)->first()->head_uz}}" data-body="{{\App\Property::skip(8)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(8)->first()->image}}">
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(8)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(8)->first()->head_uz}}
                                        </div>
                                        <div class="striped-line-1 " style="transform: rotateX(180deg);" >
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-2">
                                    <button class="property mx-lg-auto mx-sm-auto" data-toggle="modal"
                                            data-target=".properties-modal" id="property_{{\App\Property::skip(9)->first()->id}}"
                                            data-head="{{\App\Property::skip(9)->first()->head_uz}}" data-body="{{\App\Property::skip(9)->first()->body_uz}}"
                                            data-image="{{\App\Property::skip(9)->first()->image}}">
                                        <div class="striped-line-2 " style="transform: rotateX(180deg) rotateY(180deg);" >
                                            <img src="{{asset('images/line1.svg')}}" alt="">
                                        </div>
                                        <div class="avatar-2">
                                            <img src="{{\App\Property::skip(9)->first()->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            {{\App\Property::skip(9)->first()->head_uz}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="mx-auto d-block">
                        <button class="view"  data-toggle="modal" data-target="#properties2">
                    <span class="inner-text">
                        To'liq tarkibni ko'rish
                    </span>
                            <span class="view-animate"></span>
                        </button>
                    </div>
                </div>
            </div>

        </section>

    @endif
    @if(\App\Certificate::all()->count()!=0)
    <section class="black-overlay certificates px-lg-4 pr-4 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-3 mt-5">
                        mahsulot sifatini tasdiqlash
                    </div>
                    <h1 class="text w-100 text-left">Sertifikatlar va fikrlar</h1>

                </div>
                <div class="col-lg-12 pt-5 px-0">


                    <div class="ivySlide slide3 owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach(\App\Certificate::all() as $certificate)
                                    <div class="owl-item">
                                        <img src="{{$certificate->image}}" alt="">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="slideState"><span></span></div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(\App\Video::all()->count()!=0)
    <section class="black-overlay pr-4 px-lg-4 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="head-3 mt-5">
                        Video axborot
                    </div>

                </div>
                <div class="col-lg-12 pt-5 px-0">
                    <div class="ivySlide slide2 owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach(\App\Video::all() as $video)
                                    <div class="owl-item">
                                        <button class="video" type="button" data-target="#video_modal" data-video="{{$video->link}}" data-toggle="modal" >
                                    <span class="img-overlay">
                                        <img class=".inner" src="{{$video->image}}" alt="">
                                    </span>
                                            <span class="play">
                                        <img src="{{asset('images/triangle.png')}}" alt="">
                                    </span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="slideState"><span></span></div>
                </div>
            </div>
        </div>


    </section>
    @endif
    <section class="black-overlay px-4 py-5 " id="product">
        <div class="container-fluid">
            <div class="row px-lg-5">
                <div class="col-lg-8">
                    <div class="head-3 pt-5 pl-5">Men Women</div>

                    <div class="text w-100 text-left">
                        MeWo ning yo'tal va yuqori nafas yo'llari kasalliklari uchun foydalari
                    </div>

                    <img src="images/drugs.png" class="w-100 d-lg-none"  alt="">

                    <div class="m-0 main-text t2">
                        Choyning ildizi, qizilmiya ildizi, darvoza, kekik, kestirib, dumba kabi o'simliklarning mahsuloti tarkibida mavjud bo'lganligi sababli u quyidagilarga boy.
                    </div>

                    <div class="row">
                        <div class="col-lg-6 px-0 mt-5">
                            <div class="li mb-3"><div class="round"></div> <div class="t">Saponin - dezinfektsiyalovchi va yallig'lanishga qarshi ta'sirga ega</div></div>
                            <div class="li"><div class="round"></div><div class="t">Glitsirizin kislotasi - nafas yo'llarining silliq mushaklariga antispazmodik ta'sir ko'rsatadi</div></div>
                        </div>
                        <div class="col-lg-6 px-0 mt-lg-5">
                            <div class="li mb-3"><div class="round"></div><div class="t"> S - vitamini tabiiy immunostimulyatordir</div></div>
                            <div class="li"><div class="round"></div><div class="t">Efir moylari mikroblarga qarshi, tozalash va mukolitik ta'sirga ega</div></div>
                        </div>
                    </div>

                    <button class="bg-white border-0 order-rect"  data-toggle="modal" data-target="#zayavka">

                        <span class="btn-animate-dark"></span>
                        Buyurtma berish
                    </button>



                </div>
                <div class="col-lg-4">
                    <div class="mt-5 drugs-lg pt-5">
                        <img src="{{asset('images/drugs.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(\App\VideoComment::all()->count()!=0)
    <section class="black-overlay  pr-4 px-lg-4 pb-5" id="comments">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-3 mt-5">
                        Baxtli mijozlarimizdan fikrlar
                    </div>
                </div>
                <div class="col-lg-12 pt-5 px-0">
                    <div class="ivySlide slide1 owl-carousel owl-theme owl-loaded" >
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach(\App\VideoComment::all() as $video_comment)
                                    <div class="owl-item">
                                        <button class="video comment" data-target="#comment_modal" data-video="{{$video_comment->link}}" data-toggle="modal">
                                    <span class="img-overlay">
                                        <img class=".inner" src="{{$video_comment->image}}" alt="">
                                    </span>
                                            <span class="play">
                                        <img src="{{asset('images/triangle.png')}}" alt="">
                                    </span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="slideState"><span></span></div>

                </div>


            </div>




        </div>
    </section>
    @endif
    @if(\App\Review::all()->count()!=0)
    <section class="black-overlay px-4 recommendations">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="header">отзывы</div>
                    <h1 class="text w-100 text-center">Некоторые цитаты наших счастливых клиентов</h1>
                </div>

                <div class="owl-carousel owl-carousel1 owl-theme px-0  owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                            @foreach(\App\Review::all() as $review)
                                <div class="owl-item">
                                    <div class="rec">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="avatar">
                                                        <img src="{{$review->image}}" alt="">
                                                    </div>
                                                    <div class="star">
                                                        @for($i=1; $i<=$review->star; $i++)
                                                            <img src="{{asset('images/Star.svg')}}" alt="">
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="citate">
                                                        {{Str::limit($review->text, 50)}}
                                                    </div>
                                                    <div class="author">
                                                        {{$review->author}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav">
                        <div class="owl-prev ml-auto mr-2"></div>
                        <div class="owl-next mr-auto ml-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5">
            <div class="row justify-content-between pt-5">
                <div class="col-12">
                    <div class="head-2 head-3 pb-lg-5">Нас рекомендуют</div>
                </div>

                @foreach(\App\Coworker::all() as $coworker)
                    <div class="col-lg-2 col-6">
                        <div class="coworkers"><img src="{{$coworker->image}}" alt=""></div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
    @endif

    <section class="black-overlay">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="head-2 mt-5">
                        Telefon raqamingizni yozib qoldiring va bepul konsultatsiyaga ega bo'ling
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="otziv position-relative">

                        <div class="head-2 text-center">Ma'lumotlaringizni kiriting</div>
                        <div class="main-text text-center text-white">Albatta bepul konsultatsiya olasiz</div>

                        <form action="{{route('applications.store')}}" data-form="1" class="application-post" method="post" class="h-100">
                            @csrf
                            <div class="mx-lg-4 row h-100 align-items-center mt-4">
                                <div class="col-12 ">
                                    <label>Ismingiz</label>
                                    <input type="text" name="name" data-name="1" class="name" id="name2">
                                </div>
                                <div class="col-12 mt-4">
                                    <label>Telefon raqamingiz</label>
                                    <input type="text" name="phone" data-phone="1"  data-masked-input="99-999-9999" class="phone" id="phone2">
                                </div>


                                <div class="col-12 mt-4">
                                    <label>Yashash viloyatingiz</label>

                                    <select name="region" class="w-100 select" data-region="1">
                                        <option value="Toshkent">Toshkent</option>
                                        <option value="Samarqand">Samarqand</option>
                                        <option value="Farg'ona">Farg'ona</option>
                                        <option value="Buxoro">Buxoro</option>
                                        <option value="Qashqadaryo">Qashqadaryo</option>
                                        <option value="Surxondaryo">Surxondaryo</option>
                                        <option value="Andijon">Andijon</option>
                                        <option value="Namangan">Namangan</option>
                                        <option value="Navoiy">Navoiy</option>
                                        <option value="Jizzax">Jizzax</option>
                                        <option value="Sirdaryo">Sirdaryo</option>
                                        <option value="Xorazm">Xorazm</option>
                                        <option value="Qoraqalpog'iston">Qoraqalpog'iston</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="send mx-auto d-table" data-form="1">Jo'natish</div>
                                    <button type="submit" class="d-none submit" data-submit="1"></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </section>

</main>

<!-- Modal -->

<!-- Modal -->
<div class="modal  fade" id="video_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="video_replace">
        </div>
    </div>
</div>
<div class="modal  fade" id="comment_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="comment_replace">
        </div>
    </div>
</div>

<div class="modal fade info-modal properties-modal" id="properties" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal- mx-lg-5 position-relative">

        <div class="modal-content">

            <div class="content">
                <button type="button" class="close ml-auto mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                    <img src="{{asset('images/ion_close-circle.svg')}}" alt="">
                </button>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="head-2 m-4">Men Women Tarkibi:</div>
                        </div>
                    </div>
                    <div class="property-content-2 row">

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade info-modal properties-modal" id="properties2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal- mx-lg-5 position-relative">

        <div class="modal-content">

            <div class="content">
                <button type="button" class="close ml-auto mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                    <img src="{{asset('images/ion_close-circle.svg')}}" alt="">
                </button>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="head-2 m-4">Состав Men Women:</div>
                        </div>
                    </div>
                    <div class="property-content row">

                        @foreach(\App\Property::all() as $propery)
                            <div class="col-lg-6 col-12">
                                <a class="" data-toggle="collapse" href="#collapse{{$propery->id}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <div class="property">
                                        <div class="avatar-2">
                                            <img src="{{$propery->image}}" alt="">
                                        </div>
                                        <div class="inner-text">
                                            <span class="d-table-cell">{{$propery->head_uz}}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse multi-collapse" id="collapse{{$propery->id}}">
                                    <div class="card card-body bg-transparent text-white main-text border-0">
                                        {{$propery->body_uz}}
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@foreach(\App\Desease::all() as $desease)
    <div class="modal fade info-modal info-modal-{{$desease->id}}" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal- mx-lg-5 position-relative">
            <div class="modal-content">

                <div class="content">
                    <button type="button" class="close ml-auto mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                        <img src="{{asset('images/ion_close-circle.svg')}}" alt="">
                    </button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <div class="head-3 ml-auto">{{$desease->head_uz}}</div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="container-fluid">
                                    <div class="row my-lg-3">
                                        <div class="col-lg-7 my-lg-5">
                                            <div class="main-text text-white">
                                                {{$desease->body_uz}}
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="otziv position-relative">
                                                <div class="head-2 text-center">Оставьте свои данные</div>
                                                <div class="main-text text-center text-white">Чтобы получить бесплатную консультацию</div>

                                                <form action="{{route('applications.store')}}" data-form="desease_{{$desease->id}}" class="application-post" method="post" class="h-100">
                                                    @csrf
                                                    <div class="mx-lg-4 row h-100 align-items-center mt-4">
                                                        <div class="col-12 ">
                                                            <label>Введите имя</label>
                                                            <input type="text" name="name" data-name="desease_{{$desease->id}}" class="name" id="name2">
                                                        </div>
                                                        <div class="col-12 mt-4">
                                                            <label>Номер телефона</label>
                                                            <input type="text" name="phone" data-phone="desease_{{$desease->id}}"  data-masked-input="99-999-9999" class="phone" id="phone2">
                                                        </div>


                                                        <div class="col-12 mt-4">
                                                            <label>Ваш регион</label>

                                                            <select name="region" class="w-100 select" data-region="desease_{{$desease->id}}">
                                                                <option value="Toshkent">Toshkent</option>
                                                                <option value="Samarqand">Samarqand</option>
                                                                <option value="Farg'ona">Farg'ona</option>
                                                                <option value="Buxoro">Buxoro</option>
                                                                <option value="Qashqadaryo">Qashqadaryo</option>
                                                                <option value="Surxondaryo">Surxondaryo</option>
                                                                <option value="Andijon">Andijon</option>
                                                                <option value="Namangan">Namangan</option>
                                                                <option value="Navoiy">Navoiy</option>
                                                                <option value="Jizzax">Jizzax</option>
                                                                <option value="Sirdaryo">Sirdaryo</option>
                                                                <option value="Xorazm">Xorazm</option>
                                                                <option value="Qoraqalpog'iston">Qoraqalpog'iston</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mt-4">
                                                            <div class="send mx-auto d-table" data-form="desease_{{$desease->id}}">Отправить</div>
                                                            <button type="submit" class="d-none submit" data-submit="desease_{{$desease->id}}"></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="modal fade zayavka-modal" id="zayavka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="otziv position-relative">

                <button type="button" class="close ml-auto mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                    <img src="{{asset('images/ion_close-circle.svg')}}" alt="">
                </button>
                <div class="head-2 text-center">Ma'lumotlaringizni kiriting</div>
                <div class="main-text text-center text-white">va Albatta bepul konsultatsiyaga ega bo'lasiz</div>

                <form action="{{route('applications.store')}}" data-form="2" class="application-post" method="post" class="h-100">
                    @csrf
                    <div class="mx-lg-4 row h-100 align-items-center mt-4">
                        <div class="col-12 ">
                            <label>Ismingiz</label>
                            <input type="text" name="name" data-name="2" class="name" id="name2">
                        </div>
                        <div class="col-12 mt-4">
                            <label>Telefon raqamingiz</label>
                            <input type="text" name="phone" data-phone="2"  data-masked-input="99-999-9999" class="phone" id="phone2">
                        </div>


                        <div class="col-12 mt-4">
                            <label>Yashash viloyatingiz</label>

                            <select name="region" class="w-100 select" data-region="2">
                                <option value="Toshkent">Toshkent</option>
                                <option value="Samarqand">Samarqand</option>
                                <option value="Farg'ona">Farg'ona</option>
                                <option value="Buxoro">Buxoro</option>
                                <option value="Qashqadaryo">Qashqadaryo</option>
                                <option value="Surxondaryo">Surxondaryo</option>
                                <option value="Andijon">Andijon</option>
                                <option value="Namangan">Namangan</option>
                                <option value="Navoiy">Navoiy</option>
                                <option value="Jizzax">Jizzax</option>
                                <option value="Sirdaryo">Sirdaryo</option>
                                <option value="Xorazm">Xorazm</option>
                                <option value="Qoraqalpog'iston">Qoraqalpog'iston</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="send mx-auto d-table" data-form="2">Jo'natish</div>
                            <button type="submit" class="d-none submit" data-submit="2"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<input type="hidden" value="{{$general = \App\General::latest()->first()}}">

<div class="more-content">

    <div class="more-btn-general more-instagram ">
        <a class="more-btn-inner" href="https://instagram.com/{{$general->instagram}}">
            <img src="{{asset('images/instagramm.svg')}}" alt="">
        </a>
    </div>
    <div class="more-btn-general more-phone ">
        <a class="more-btn-inner" href="tel:{{$general->phone2}}">
            <img src="{{asset('images/call.png')}}" alt="">
        </a>
    </div>
    <div class="more-btn-general more-telegram ">
        <a class="more-btn-inner" href="https://t.me/{{$general->telegram}}">
            <img src="{{asset('images/telegramm.svg')}}" alt="">
        </a>
    </div>
    <div class="more-btn-general more-whatsapp ">
        <a class="more-btn-inner"  href="{{$general->whatsapp}}">
            <img src="{{asset('images/watsapp.svg')}}" alt="">
        </a>
    </div>
    <div class="more-btn">
        <button class="more-btn-inner">
            <img src="{{asset('images/3dots.svg')}}" alt="">
        </button>
    </div>
</div>
<footer >
    <div class="container-fluid w-100 h-100">
        <div class="line"></div>

        <div class="row pl-5 h-100">

            <div class="col-lg-3 pt-3">
                <a href="" class="w-100 mt-2"><img class="w-50" src="{{'images/logo%20mask.png'}}" alt=""></a>
                <div class="text mt-3 w-100">
                    <div class="col-12 text-lg-left">Bizning maqsadimiz bor va bizning vazifamiz - barcha rejalarimizni bosqichma -bosqich amalga oshirish! </div>
                </div>
            </div>

            <div class="col-lg-4 offset-lg-1 h-100">
                <div class="container-fluid h-100">
                    <div class="row pt-5 contact justify-content-center h-100">
                        <div class="col-12">
                            <div class="m-0 t">Kontaktlarimiz</div>
                        </div>
                        <div class="col-12">
                            <div class="links">
                                <a href="https://t.me/{{$general->telegram}}"><img src="{{asset('images/telegramm.svg')}}" alt=""></a>
                                <a href=""><img src="{{asset('images/watsapp.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="links">
                                <a href="tel:{{$general->phone1}}"><img src="{{asset('images/call.svg')}}" alt=""><span class="t"> {{$general->phone1}}</span></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="links">
                                <a href="https://{{$general->email}}"><img src="{{asset('images/email%201.svg')}}" alt=""><span class="footer-text"> {{$general->email}}</span></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="links">
                                <div class="d-flex m-0 flex-row">
                                    <img src="{{asset('images/Exclude.svg')}}" alt="">
                                    <span class="footer-text">{{$general->address}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="container-fluid">
                    <div class="row pt-5">
                        <div class="col-12">
                            <div class="footer-text ml-sm-0">so'nggi yangiliklardan xabardor bo'lish uchun ijtimoiy tarmoqlarga obuna bo'ling</div>
                        </div>
                        <div class="col-12">
                            <div class="links">
                                <a href="https://instagram.com/{{$general->instagram}}"><img src="{{asset('images/instagramm.svg')}}" alt=""></a>
                                <a href="{{$general->youtube}}"><img src="{{asset('images/youtube.svg')}}" alt=""></a>
                                <a href="https://t.me/{{$general->telegram}}"><img src="{{asset('images/telegramm.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</footer>

<div class="modal fade modal-success" tabindex="-1" aria-labelledby="validationModal" aria-hidden="true">
    <div class="modal-dialog  bg-violet">
        <div class="modal-content"  style="margin-top: 100px">
            <div class="modal-header">
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-white">
                Ma'lumotlaringiz muvaffaqiyatli jo'natildi! Iltimos Operatorlarimiz javobini kuting!

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<!--Validation Modal -->
<div class="modal fade " id="validationModal" tabindex="-1" aria-labelledby="validationModal" aria-hidden="true">
    <div class="modal-dialog  bg-violet">
        <div class="modal-content"  style="margin-top: 100px">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="validationModal">Xato</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-white">
                So'ralayotgan barcha ma'lumotlar (Ism, Telefon raqam, Viloyat) kiritishi shart!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/main2.js')}}"></script>
<script src="{{asset('js/jquery.masked-input.js')}}"></script>

<script>

    $(document).ready(function(){
        @if(session()->has('success'))

        $('.modal-success').modal('show');
        @endif

        $('#video_modal').on('hide.bs.modal', function (e) {
            $('#video_replace').html('');
        });
        $('.property').click(function (){
            $('.property-content-2').html("<div class='col-lg-12'><div class='head-3'>"+$(this).attr('data-head')+"</div></div><div class='col-lg-12'><img width='100px' class='mx-auto' src='"+$(this).attr('data-image')+"'></div>" +
                "<div class='col-lg-12'><div class='main-text text-white'>"+$(this).attr('data-body')+"</div></div>");
        });
        $('#comment_modal').on('hide.bs.modal', function (e) {
            $('#comment_replace').html('') });

        $('.video').click(function (){
            $('#video_replace').html('<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' + $(this).attr('data-video') + '" allowfullscreen></iframe></div>');
        });

        $('.comment').click(function (){
            $('#comment_replace').html('<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' + $(this).attr('data-video') + '" allowfullscreen></iframe></div>');
        });

        $('.send').click(function (){
            var name = $('*[data-name='+$(this).attr('data-form')+']');
            var form = $('*[data-form='+$(this).attr('data-form')+']');
            var phone = $('*[data-phone='+$(this).attr('data-form')+']');
            var region = $('*[data-region='+$(this).attr('data-form')+']');

            if(name.val() && region.val() && phone)
            {
                $('*[data-submit='+$(this).attr('data-form')+']').click();

            }else{
                $('#validationModal').modal('show');
            }

        });

    });
</script>


</body>
</html>
