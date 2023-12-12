<?php

namespace MVC;

class Controller {
    protected function view($view, $data = []) {
        extract($data);

        require_once SITE_ROOT . "/App/views/$view.php";

        // header('location: /trabalho_ti/App/views/'. $view . '.php');
    }
}

?>