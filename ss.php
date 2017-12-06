<!DOCTYPE html>
<html lang="en">
<head>
    <title>Галактика 3D</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>
    <style>
        body {
            position: relative;
            background-image: url("img/3dgal.png");
            background-color: #eeeeee;
        }
        #card-academy{
            margin-top: 5vh;
        }
        h1 {
            text-align: center;
        }
        .img-circle {
            border-radius: 50%;
            width: 90%;
        }
        .services {
            margin-top: 2%;
        }
        h3 {
            margin-top: 5px;
            margin-left: -40px;
            color: black;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Logo</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#academy">АКАДЕМИЯ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">УСЛУГИ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallery">ГАЛЕРЕЯ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacts">КОНТАКТЫ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#map">КАК ДОБРАТЬСЯ</a>
            </li>
        </ul>
    </div>
</nav>

<div id="academy" class="container" style="padding-top:70px;padding-bottom:70px">
    <div class="card" id="card-academy">
        <div class="card-header" style="background-color: #1ab8b5">
            <h1 style="color: white">Академия 3D-печати</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <p>Если Вы совсем недавно знакомы с 3D индустрией или даже вообще ничего об этом не слышали - наши курсы и мастер-классы станут вашим первым шагом на пути к пониманию увлекательного мира 3D технологий и их применения в повседневной жизни. Мир 3D печати открыт каждому.</p>
                    <p>Если Вы уже имеете опыт работы с технологиями 3D-печати – наши специалисты помогут приумножить Ваши знания и прикладные навыки в необходимых Вам аспектах.</p>
                    <hr>
                    <p>Если Вы уже имеете опыт работы с технологиями 3D-печати – наши специалисты помогут приумножить Ваши знания и прикладные навыки в необходимых Вам аспектах.</p>
                    <p>Если Вы уже имеете опыт работы с технологиями 3D-печати – наши специалисты помогут приумножить Ваши знания и прикладные навыки в необходимых Вам аспектах.</p>
                    <p>Если Вы уже имеете опыт работы с технологиями 3D-печати – наши специалисты помогут приумножить Ваши знания и прикладные навыки в необходимых Вам аспектах.</p>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                    <img style="margin: auto" width="400" src="img/logo.png">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="btn btn-outline-dark btn-block">Записаться</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="services" class="container" style="padding-top:70px;padding-bottom:70px">
    <div class="card" id="card-academy">
        <div class="card-header" style="background-color: #1ab8b5">
            <h1 style="color: white">Услуги</h1>
        </div>
        <div class="card-body">
            <div id="accordion">
                <div class="card services"  style="margin-top: 5px">
                    <div class="card-header" style="background-color: white">
                        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <div class="row">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <img src="img/glyphicons-320-sort.png">
                                </div>
                                <div class="col-sm-11 d-flex align-items-center">
                                    <h3>3D-печать</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="card services"">
                    <div class="card-header" style="background-color: white">
                        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <div class="row">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <img src="img/glyphicons-161-imac.png">
                                </div>
                                <div class="col-sm-11 d-flex align-items-center">
                                    <h3>Разработка 3D-моделей</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="card services">
                    <div class="card-header" style="background-color: white">
                        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <div class="row">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <img src="img/glyphicons-137-cogwheel.png">
                                </div>
                                <div class="col-sm-11 d-flex align-items-center">
                                    <h3>Ремонт и настройка техники</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="card services">
                    <div class="card-header" style="background-color: white">
                        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <div class="row">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <img src="img/glyphicons-375-claw-hammer.png">
                                </div>
                                <div class="col-sm-11 d-flex align-items-center">
                                    <h3>Изготовление прототипов при помощи других технологий</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="card services">
                    <div class="card-header"  style="background-color: white">
                        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                            <div class="row">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <img src="img/glyphicons-82-refresh.png">
                                </div>
                                <div class="col-sm-11 d-flex align-items-center">
                                    <h3>Обмен старых катушек</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseFive" class="collapse">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="gallery" class="container" style="padding-top:70px;padding-bottom:70px">
    <div class="card" id="card-academy">
        <div class="card-header" style="background-color: #1ab8b5">
            <h1 style="color: white">Галерея</h1>
        </div>
        <div class="card-body" style="padding: 0">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/gallery1.jpg" width="1100" height="650">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery2.jpg" width="1100" height="650">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery3.jpg" width="1100" height="650">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery4.jpg" width="1100" height="650">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery5.jpg" width="1100" height="650">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="contacts" class="container" style="padding-top:70px;padding-bottom:70px">
    <div class="card" id="card-academy">
        <div class="card-header" style="background-color: #1ab8b5">
            <h1 style="color: white">Контакты</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Телефон:</h4>
                    <p><a href="#">+7(910)446-34-85</a></p>
                    <hr>
                    <h4>Услуги 3D-печати, 3D-моделирования, 3D-сканирование, обучение, мастер-классы и другие вопросы:</h4>
                    <p><a href="#">asya.a@3dpgalaxy.ru</a></p>
                </div>
                <div class="col-sm-6">
                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3, width: "auto", height: "auto"}, 80019390);
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <hr>
                    <h4>Продажа 3D-принтеров, 3D-ручек, 3D-сканеров:</h4>
                    <p><a href="#">sales@3dpgalaxy.ru</a></p>
                    <hr>
                    <h4>Техническая поддержка</h4>
                    <p><a href="#">support@3dpgalaxy.ru</a></p>
                </div>
                <div class="col-sm-6" style="padding-left: 27px; padding-right: 27px;">
                    <a href="#" class="btn btn-danger btn-block" style="margin-top: 15px">Youtube</a>
                    <a href="#" class="btn btn-warning btn-block" style="margin-top: 10px;">Instagram</a>
                    <a href="#" class="btn btn-primary btn-block" style="margin-top: 10px; background-color: #21427b">Facebook</a>
                    <a href="#" class="btn btn-info btn-block" style="margin-top: 10px">Telegram</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map" class="container" style="padding-top:70px;padding-bottom:70px">
    <div class="card" id="card-academy">
        <div class="card-header" style="background-color: #1ab8b5">
            <h1 style="color: white">Как добраться</h1>
        </div>
        <div class="card-body" style="padding: 0">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A487c514bdb4ce95890c857242df7b6a44fc8fe24197664dc0027d50614e0e389&amp;width=100%25&amp;height=637&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-4 d-flex align-items-center" style="margin-top: 13px">
                    <p id="address">ул. Марксистская, 34к7, Москва, МИРБИС</p>
                </div>
                <div class="col-sm-4 d-flex align-items-center">
                    <a href="#" class="btn btn-outline-dark btn-block">Скопировать адрес</a>
                </div>
                <div class="col-sm-4 d-flex align-items-center">
                    <a href="#" class="btn btn-outline-dark btn-block">Скопировать координаты</a>
                </div>
            <div class="container">

            </div>
        </div>
    </div>
</div>
</body>
</html>
