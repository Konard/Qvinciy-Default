<?php 
if($user = Sentinel::check()){
        Response::redirect('/admin');
}else{
    //Response::redirect('user/login');
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="/resources/assets/panel/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/resources/assets/panel/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/resources/assets/panel/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/assets/panel/css/lib/unix.css" rel="stylesheet">
    <link href="/resources/assets/panel/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href=""><span>Site Name</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Страница входа</h4>
                            <?php
                            if(Request::get('login_message') !== null){
                              echo('<div class="alert '.Request::get('type').'">
                                        '.Request::get('login_message').'
                                    </div>');
                            }
                            ?>
                            <form method="post" accept-charset="utf-8" autocomplete="off" role="form">
                                <div class="form-group">
                                    <label>Ваш Email</label>
                                    <input type="email" class="form-control" name="email" id="login_value"
                                   placeholder="Email" tabindex="1" value="">
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password" value="" tabindex="2">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember_me" value="1" class=""
                                       tabindex="3"> Запомнить меня
                                    </label>
                                    <!-- <label class="pull-right">
                                        <a href="#">Забыли пароль?</a>
                                    </label> -->

                                </div>
                                <button type="submit" id="submit" tabindex="5" class="btn btn-primary btn-flat m-b-30 m-t-30">Войти</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Нету аккаунта ? <a href="register"> Зарегистрируйте его сдесь</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>