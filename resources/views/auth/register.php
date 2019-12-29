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
                            <a href="index.html"><span>Site Name</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Регистрация пользователя</h4>
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
                                <button type="submit" id="submit" tabindex="5" class="btn btn-primary btn-flat m-b-30 m-t-30">Зарегистрироваться</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>У тебя есть аккаунт ? <a href="login">Вход</a></p>
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