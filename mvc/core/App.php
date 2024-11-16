<?php
class App
{

    protected $controller = 'home';
    protected $action = 'index';
    protected $params = [];

    function __construct()
    {
        $url = $this->UrlProcess() ?? ['home'];
        //controller
        // var_dump($url);
        //controller admin

        if (isset($url)) {
            $urlCheck = '';
            foreach ($url as $key => $value) {
                $urlCheck .=  $value . '/';
                if (isset($url[$key - 1])) {
                    unset($url[$key - 1]);
                }
                $fillUrl = rtrim($urlCheck, '/');
                if (file_exists('./mvc/controllers/' . $fillUrl . '.php')) {
                    $urlCheck = $fillUrl;

                    break;
                }
            }
        } else {
            require_once './mvc/controllers/' . $this->controller . '.php';
        }
        $url = array_values($url);
        if (isset($url[0])) {
            if (file_exists('./mvc/controllers/' . $urlCheck . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
                require_once './mvc/controllers/' . $urlCheck . '.php';
            } else {
                $this->loadError('404');
                die();
            }
        }
        // action
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            }
        }
        // $url = array_values($url);
        //params
        $this->params = $url ? array_values($url) : [];
        if (method_exists($this->controller, $this->action)) {
            call_user_func_array([new $this->controller, $this->action], $this->params);
        } else {
            $this->loadError('404');
            die();
        }
    }
    function UrlProcess()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            $url = str_replace("-", "_", $_SERVER['PATH_INFO']);
            // $url = $_SERVER['PATH_INFO'];
            // return explode("/", trim($url, "/"));
            return explode("/", filter_var(trim($url, "/")));
        }
    }
    public function loadError($name)
    {
        require_once './mvc/error/' . $name . '.php';
    }
}
