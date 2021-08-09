<?php

namespace doandv_MVC;

    class Request
    {
        public $url;

        public function __construct()
        {
            $this->url = $_SERVER["REQUEST_URI"];
        }
    }

?>