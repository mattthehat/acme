<?php

namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;

class RegisterController extends BaseController
{

    public function getShowRegisterPage()
    {
      echo $this->blade->render("register");
    }

    public function postShowRegisterPage()
    {
        $validation_data = [
          "first_name" => "min:3",
          "last_name" => "min:3",
          "email" => 'email',
          "password" => 'min:3|equalTo:confirm_password'
    ];
        // Validate data
        $validator = new Validator;

        $errors = $validator->isValid($validation_data);
    
        // If validation fails go back to register page and display errors
        if(sizeof($errors) > 0)
        {
          $_SESSION['msg'] = $errors;
          echo $this->blade->render("register");
          unset($_SESSION['msg']);
          exit();
        }
        // Save data into database
        $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['first_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();

        echo "Posted";
    }

    public function getShowLoginPage()
    {
      echo $this->blade->render("login");
    }

}
