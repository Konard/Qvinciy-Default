<?php

//контроллер авторизации

namespace Controller;

use Sentinel;
use Response;
use Request;
use Viewer;

class Auth {

    public function __construct()
    {
    }

    public function displayRegisterPage()
    {
        Viewer::file('resources/views/auth/register');
    }

    public function displayLoginPage()
    {
        Viewer::file('resources/views/auth/login');
    }

    public function doAuthenticate()
    {
        try{
            $credentials = array(
                'email'    => Request::get('email'),
                'password' => Request::get('password')
            );
            
            Sentinel::authenticate($credentials, false);

        }catch (\Cartalyst\Sentinel\Users\LoginRequiredException $e){
            Response::redirect('login')->with([
                'login_message'=>'Login credentials not supplied',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\PasswordRequiredException $e){
            Response::redirect('login')->with([
                'login_message'=>'Password field is required',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\WrongPasswordException $e){
            Response::redirect('login')->with([
                'login_message'=>'Wrong password, try again.',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\UserNotFoundException $e){
            Response::redirect('login')->with([
                'login_message'=>'User not found.',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\UserNotActivatedException $e){
            Response::redirect('login')->with([
                'login_message'=>'User is not activated.',
                'type'         =>'alert-danger'
            ]);

        }finally{
            if($user = Sentinel::check()){
                Admin::redirectToAdminHome();
            }else{
                Response::redirect('login')->with([
                    'login_message'=>'Unable to login',
                    'type'         =>'alert-danger'
                ]);
            }
        }
    }

    public function doRegister(){
        try{
            $credentials = [
                'email'    => Request::get('email'),
                'password' => Request::get('password')
            ];

            $user = Sentinel::registerAndActivate($credentials);

        }catch (\Cartalyst\Sentinel\Users\LoginRequiredException $e){
            Response::redirect('register')->with([
                'login_message'=>'Login credentials not supplied',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\PasswordRequiredException $e){
            Response::redirect('register')->with([
                'login_message'=>'Password field is required',
                'type'         =>'alert-danger'
            ]);

        }catch (\Cartalyst\Sentinel\Users\UserExistsException $e){
            Response::redirect('register')->with([
                'login_message'=>'User with that login already exist.',
                'type'         =>'alert-danger'
            ]);

        }catch(\Exception $e){

        }finally{
            if($user){
                Response::redirect('login');
            }
        }
    }

    public function doLogout(){
        Sentinel::logout();
        Response::redirect('/home');
    }

}
