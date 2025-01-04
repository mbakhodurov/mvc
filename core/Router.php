<?php
namespace app\core;

class Router
{
    public $request;
    protected $routes=[];

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path,$callback)
    {
        $this->routes['get'][$path]=$callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
//        $callback = $this->routes[$method][$path] ?? false;
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
        } else {
            $callback = false;
        }
        echo $callback;
        exit;
        if ($callback == false){
            echo "Not found";
            exit;
        }
        echo call_user_func($callback);
    }
}