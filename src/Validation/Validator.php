<?php

namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

class Validator {

  public function isValid($validation_data){
    
    $errors = [];

    foreach($validation_data as $name => $value){
        $rules = explode("|", $value);

        foreach($rules as $rule){
          $exploded = explode(':', $rule);
          switch($exploded[0]){
            case 'min':
            $min = $exploded[1];
            if(Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false){
              $errors[] = $name . " must be at least 3 characters long!"; 
            }
            break;

            case 'email':
            if(Valid::email()->Validate($_REQUEST[$name]) == false){
              $errors[] = $name . " must be a valid email address!";
            }
            break;
            case 'equalTo':
            if(Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == false){
              $errors[] = "Values do not match verification value";
            }
            break;
            

            default:
            // Do nothing
            $errors[] = "No Value Found!";
          }
        }  
      } 
    return $errors;

  }

}