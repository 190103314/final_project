<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/prob_style.css">
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
            <form method="POST" action="{{ route('add-form') }}" enctype="multipart/form-data" style="placeholder { color: #fff }
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
  border:none;" name="email" type="text" class="form-control" id="email" placeholder="{{__('lang.9')}}" required=""/>
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 17px auto;
  padding: 13px 10px;
  font-size: 14px;
  border:none;" class="form-control" type="file" name="photos">
                <input style="display: block;
  width: 50%;
  outline: none;
  background-color: rgba(250,250,250,0.1);
  width: 100%;
  margin: 9px auto;
  padding: 13px 10px;
  border:none;" name="message" class="form-control" id="message" placeholder="{{__('lang.7')}}" required=""/>

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
  cursor: pointer;" >{{__('lang.8')}}</button>
            </form>
        </div>
    </div>
<!-- <footer class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">         
                    <form id="contact" method="POST" action="{{ route('add-form') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="{{__('lang.9')}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input rows="6" class="form-control" type="file" name="photos">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="{{__('lang.7')}}" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">{{__('lang.8')}}</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer> -->
</body>
</html>