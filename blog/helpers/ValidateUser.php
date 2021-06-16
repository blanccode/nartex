<?php
// include('../../path.php');


class ValidateUser extends Users{

    private $input;
    private $errors = [];
    private static $fields = ['email', 'password'];


    public function __construct($input) 
    {
       $this->input = $input;
    }

    public function checkInput() 
    {
      
        foreach (self::$fields as $field) {
              if (!array_key_exists($field, $this->input)) {
                trigger_error("$field is not present in input key");
                return;
              }
        }

        $this->validateEmail();
        $pw = $this->validatePassword();
        if (isset($_POST['register-user'])) {
          array_push(self::$fields, 'pw-repeat');
          $this->checkPwMatch($pw);
        }
       
        return $this->errors;

        
    }

    private function validateEmail()
    {
        $email = trim($this->input['email']);

        if (empty($email)) {
          $this->addError('email', 'Please fill in a email address');
        } else {
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'Please fill in a valid email');
          }
        }
    }
    private function validatePassword()
    {
        $pw = trim($this->input['password']);

        if (empty($pw)) {
          $this->addError('password', 'Please fill in a password');
        } else {
          if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $pw)) {
            $this->addError('password', 'Password must be 6-12 chars & alphanumeric');
          } else {
            return $pw;
          }
          
        }
    }
    private function checkPwMatch($pw) {

      $pwRepeat = trim($this->input['pw-repeat']);

      if (empty($pwRepeat)) {
        $this->addError('pw-repeat', 'Please repeat your');
      } else {
        if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $pwRepeat)) {
          $this->addError('pw-repeat', 'Password must be 6-12 chars & alphanumeric');
        } else {
          if ($pw !== $pwRepeat) {
            $this->addError('pw-repeat', "Passwords didn't match");
          }
        }
      }

    }

 

    private function addError($key, $val) {
      $this->errors[$key] = $val;

    }

}

?>