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
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";
    }
}