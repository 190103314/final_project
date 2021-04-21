<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/prob_style.css">
    <script type="text/javascript" src="js/prob.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </script>
    
</head>
<body>
<div class="screen">
        <div class="screen_content" style="background-color: rgba(22,34,57,1);
    height: 500px;
    width: 500px;
    position: absolute;
    padding: 80px;
    text-align: center;
    margin: 100px 500px;">
            <div class="text">
                <strong style="font-weight: 1000;font-size: 20px;
  padding-top: -25px;font-style: normal;
  color: #f5a425;">{{__('lang.15')}}</strong>
            </div>
            <form class="register-form" id="same" method="POST" action="{{ route('get-form') }}" style="placeholder { color: #fff }
placeholder { color: #fff; }
placeholder { color: #fff; }
focus{
  
    color: #fff;  
}">
                @csrf
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 9px auto;
  padding: 13px 10px;
  font-size: 14px;
  border:none;" type="text" name="name" placeholder="{{__('lang.11')}}"/>
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 9px auto;
  padding: 13px 10px;
  font-size: 14px;
  border:none;" type="text" name="surname" placeholder="{{__('lang.16')}}"/>
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 9px auto;
  padding: 13px 10px;
  font-size: 14px;
  border:none;" type="text" name="phone" placeholder="{{__('lang.12')}}"/>
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 9px auto;
  padding: 13px 10px;
  font-size: 14px;
  border:none;" type="text" name="email" placeholder="{{__('lang.13')}}"/>
                <button type='submit' style="text-transform: uppercase;
  outline: 0;
  background-color: #f5a425;
  width: 100%;
  border: 0;
  margin: 13px auto;
  padding: 13px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;">{{__('lang.14')}}</button>
            </form>
        </div>
    </div>
</body>
</html>