<?php
  class Account {

    private $errorArray;

    public function __construct() {
      $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
      $this->validateUsername($un);
      $this->validateFirstName($fn);
      $this->validateLastName($fn);
      $this->validateEmails($em, $em2);
      $this->validatePasswords($pw, $pw2);

      if(empty($this->errorArray)) {
        /* insert into database */
        return true;
      }
      else {
        return false;
      }
    }

    public function getError($error) {
      /* check if an error in the errorArray and output the error message to the user */
      if(!in_array($error, $this->errorArray)) {
        $error = "";
      }
      return "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un) {
      if(strlen($un) > 25 || strlen($un) < 5) {
        array_push($this->errorArray, "Your username must be between 5-25 characters.");
        return;
      }

      /* TODO: check if username exists */
    }
    
    private function validateFirstName($fn) {
      if(strlen($fn) > 25 || strlen($fn) < 2) {
        array_push($this->errorArray, "Your first name must be between 2-25 characters.");
        return;
      }
    }
    
    private function validateLastName($ln) {
      if(strlen($ln) > 25 || strlen($ln) < 2) {
        array_push($this->errorArray, "Your last name must be between 2-25 characters.");
        return;
      }
    }
    
    private function validateEmails($em, $em2) {
      if($em != $em2) {
        array_push($this->errorArray, "The emails do not match.");
        return;
      }

      if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, "Email is invalid.");
        return;
      }
      /* TODO: check if email has been used by another account */
    }
    
    private function validatePasswords($pw, $pw2) {
      if($pw != $pw2) {
        array_push($this->errorArray, "The passwords do not match.");
        return;
      }

      if(preg_match('/[^A-Za-z0-9]/', $pw)) {
        array_push($this->errorArray, "The password can only contain numbers and letters.");
        return;
      }

      if(strlen($pw) > 25 || strlen($pw) < 5) {
        array_push($this->errorArray, "Your password must be between 5-30 characters.");
        return;
      }
    }
  }
?>