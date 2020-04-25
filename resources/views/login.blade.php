<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src="js/admin/signup.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 form-layout">
                <div class="row">
                    <div class="col-sm-12 title-form">
                        <i>Đăng nhập</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-body">
                        <form action="/login-admin" name="formLogin" method="post" onsubmit="return(validate());">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-sm-12 app-name">
                                    <span>FINBU</span>
                                </div>
                            </div>
                            <div class="row">
                                @if (isset($notice))
                                    <span style="color: red">{{$notice}}</span>
                                @endif
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </div>
                                            <input type="text" placeholder="Email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </div>
                                            <input type="password" placeholder="Mật khẩu" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <button class="btn btn-danger btn-block" type="submit">ĐĂNG NHẬP <i class="glyphicon glyphicon-log-in"></i></button>
                                </div><hr>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>