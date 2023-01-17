<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 19.05.2018
 * Time: 7:58
 */
namespace Core\Router\web_routes;


//use exceptions\ExceptionClass as Ex;*/

/**
 * Class web_routes
 * @package web_routes
 */
class web_routes
{
    /**
     * @var array
     */
    private static $routes = [
        '' => array(
            'route'      => '/',
            'file'       => 'app/controllers/indexController.php',
            'class'      => 'App\Controllers\IndexController',
            'function'   => 'index',
            'method'     => 'get',
            'middleware' => 'anyone',
            'view'       => 'index.html',
        ),
        "404" => array (
            'route'      => '/',
            'file'       => 'core/exceptions/ExceptionClass.php',
            'class'      => 'Core\Exception\ExceptionClass',
            'function'   => 'error',
            'method'     => 'get',
            'middleware' => 'anyone',
            'view'       => '404.html',
        ),
        "add" => array (
            'route'      => '/add',
            'file'       => 'app/controllers/AddController.php',
            'class'      => 'App\Controllers\AddController',
            'function'   => 'index',
            'method'     => 'get',
            'middleware' => 'anyone',
        ),
        "del" => array (
            'route'      => '/del',
            'file'       => 'app/controllers/DelController.php',
            'class'      => 'App\Controllers\DelController',
            'function'   => 'index',
            'method'     => 'get',
            'middleware' => 'anyone',
        ),
        "upd" => array (
            'route'      => '/upd',
            'file'       => 'app/controllers/UpdController.php',
            'class'      => 'App\Controllers\UpdController',
            'function'   => 'index',
            'method'     => 'get',
            'middleware' => 'anyone',
        ),
    ];

    public static function FindRoute($route){
        try {
            foreach (self::$routes as $k => $v){
                if ($k == $route[1]){
                    return $v;
                }
            }
			
			return self::$routes["404"];
        } catch (Exception $e){
            throw new Exception("Указанный путь не найден!");
        }

        return 0;
    }
} 