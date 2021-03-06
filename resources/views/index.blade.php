
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/prob_style.css">
    <script type="text/javascript" src="js/prob.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=5d124e77-c58e-41aa-9f61-a41781260b63key&lang=en_US" type="text/javascript">
    </script>
</head>
<body>
    <header>
        <div class="logo"><img src="http://pngimg.com/uploads/hourglass/hourglass_PNG13.png" onclick="window.location.reload()"></div>
        <div>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
        </div>
        <div class="main-nav">
            <ul>
                <li><a href="#home">{{__('lang.one')}}</a></li>
                <li><a href="#timeto" onclick="change2()">{{__('lang.two')}}</a>
                <li><a href="#about" onclick="change()">{{__('lang.three')}}</a></li>
                <li><a href="{{ route('contact') }}">{{__('lang.four')}}</a></li>
                <li><a href="en">{{__('lang.1')}}</a></li>
                <li><a href="ru">{{__('lang.2')}}</a></li>
            </ul>
            <div class="profile">
                <img id="img" title = "Name" src="https://tec-sense.com/wp-content/uploads/2019/09/avtar-man.png" alt="">
            </div>
            
        </div>
    </header>

    <nav id="home" class='set'>
        <div class="overlay">
            <div class="main_text">
                <h5>{{__('lang.five')}}</h5>
                <h2><em>{{__('lang.six')}}</em></h2>
                
            </div>
            <button class="main-button" id="btn"><a href="{{ route('forms') }}" >{{__('lang.10')}}</a></button>
        </div>
    </nav>

    <div class="screen">
        <div class="screen_content">
            <div class="text">
                <strong><em>{{__('lang.15')}}</em></strong>
            </div>
            <form class="register-form" id="same" method="POST" action="{{ route('get-form') }}">
                @csrf
                <input type="text" name="name" placeholder="{{__('lang.11')}}"/>
                <input type="text" name="surname" placeholder="{{__('lang.16')}}"/>
                <input type="text" name="phone" placeholder="{{__('lang.12')}}"/>
                <input type="text" name="email" placeholder="{{__('lang.13')}}"/>
                <button type='submit'><a href=>{{__('lang.14')}}</a></button>
            </form>
        </div>
    </div>
    <section class="items" id="timeto">
        <div class="item">
            <div class="card">
                <img class="card-img-top" src="https://www.scuba-monkey.com/wp-content/uploads/2015/04/planning-graphic.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{__('lang.seven')}}</h4>
                  <h6 class="card-text">{{__('lang.eight')}}</h6>
                  <a class="btn btn-outline-secondary" href="#learn">{{__('lang.nine')}}</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/originals/48/e7/32/48e732005b1dc9302ae443ced9d4a341.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{__('lang.ten')}}</h4>
                  <h6 class="card-text">{{__('lang.a')}}</h6>
                  <a  class="btn btn-outline-secondary" href="#learn">{{__('lang.nine')}}</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="card-img-top" src="https://logosrated.net/wp-content/uploads/parser/Challenge-Logo-1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{__('lang.b')}}</h4>
                  <h6 class="card-text">{{__('lang.c')}}</h6>
                  <a class="btn btn-outline-secondary" href="#learn">{{__('lang.nine')}}</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img class="card-img-top" src="https://miro.medium.com/max/3828/1*pYwSyihmU20SBdWevafO8Q.jpeg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{__('lang.d')}}</h4>
                  <h6 class="card-text">{{__('lang.e')}}</h6>
                  <a class="btn btn-outline-secondary" href="#learn">{{__('lang.nine')}}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="learn" id="learn">
            <div class="col-md-6 align-self-center">
                <div class="left-content">
                    <h4><em>{{__('lang.3')}}</em></h4>
                    <p>{{__('lang.4')}}</p>
                </div>
            </div>
            <div class="col col-md-15 offset-md-4 col-lg-7 offset-lg-0">
                    <div id="carousel-example" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example" data-slide-to="1"></li>
                            <li data-target="#carousel-example" data-slide-to="2"></li>
                            <li data-target="#carousel-example" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/py1JFnpLJoI" 
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-icQWPBBPZE" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/E71APyXDW5w" allowfullscreen></iframe>
                                 </div>
                            </div>
                            <div class="carousel-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lkDBImBAmN0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </section>

    <article id="about">
        <div class="txt">
            <h2 id="tag1"><em>{{__('lang.5')}}</em></h2>
            <h3 id="tag2">{{__('lang.6')}}</h3>
        </div>
        <div class="image">
            <img src="http://pngimg.com/uploads/sea/sea_PNG16.png" class="moun">
            <img src="http://pngimg.com/uploads/sea/sea_PNG16.png" class="moun1">
        </div>
    </article>
    
</body>
</html>