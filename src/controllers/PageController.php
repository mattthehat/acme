<?php

namespace Acme\Controllers;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
      echo $this->blade->render("home");
    }

}
