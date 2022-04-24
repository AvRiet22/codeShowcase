<?php

class controllerController {

  public function routeAction($route = 'common') {

      if (file_exists('controller/' . $route . 'Controller.php')) {
        $class = $route . 'Controller';
        require_once('controller/' . $route . 'Controller.php');
        $instance = new $class();
        return($instance->indexAction());
      }

    exit('Pagina niet gevonden');


  }

  public function viewAction($route, $data = []) {

    $route = str_replace('.', '/', $route);

    if (file_exists('view/template/' . $route . 'View.html')) {

      ob_start();
      include('view/template/' . $route . 'View.html');
      return ob_get_clean();


    }

  }

}


?>
