<?php

namespace Acme\Controllers;

use Acme\Validation\Validator;
use duncan3dc\Laravel\Blade;

class BaseController
{

    // protected $loader;
    // protected $twig;

    // public function __construct(){
    //   $this->loader = new \Twig_Loader_Filesystem(__DIR__."/../../views");
    //   $this->twig = new \Twig_Environment($this->loader,[
    //     'cache' => false,
    //     'debug' => true
    //   ]);
    // }

    protected $blade;

    public function __construct(){
      $this->blade = new Blade("/vagrant/views", "/vagrant/cache/views");
    }
}
