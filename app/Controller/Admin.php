<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers
 *
 * @package		StupidlySimple
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 * @link		https://stupidlysimple.github.io/
 */
namespace Controller;

use Sentinel;
use Viewer;
use Response;

class Admin {

    public function __construct(){
        if($user = Sentinel::check()){
        }else{
            Response::redirect('user/login');
        }

    }

    public static function redirectToAdminHome(){
        Response::redirect('/panel');
    }

    public function displayAdminPage(){
        Viewer::file('resources/views/panel');
    }

}
