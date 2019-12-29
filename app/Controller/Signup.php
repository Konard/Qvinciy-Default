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

use Sentry;
use Response;
use Request;
use Viewer;

class Signup {
    public function __construct()
    {
    }

    public function signupPage()
    {
         Viewer::file('resources/views/auth/login');
    }

}
