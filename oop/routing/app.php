<?php
declare(strict_types = 1);
// include 'router.php';
namespace App;
use App\Router;
use App\Exception\RouteException;

class App1 {
    private static \PDO $db;
    public function __construct(protected Router $router, protected array $request)
    {
        try {
            static::$db = new \PDO('mysql:host=localhost;dbname=pos', 'root', '');
        } catch(\PDOException $e) {
            throw new \PDOException($e->getMessage() , $e->getCode());
        }
    }

    public static function db() {
        return static::$db;
    }

    public function run() {
        try {
            $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
        }
        catch (RouteException $e) {
            $e->Message();
            // header('HTTP/1.1 404 Not Found'); //or
            http_response_code(404);   //param must be integer  header must be set before any output like session and cookie
            // echo View::make('error/404');
        }
    }
}