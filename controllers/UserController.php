<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 8/2/2016
 * Time: 11:18 PM
 */


class UserController extends BaseController
{
    public function registration()
    {
        if($this->isPost){
            $username =$_POST['username'];
            if (strlen($username) < 2 || strlen ($username)> 50) {
                $this -> setValidationError("username", "Invalid Username");
            }
            $passwordRepeat =$_POST['password-repeat'];
            $password =$_POST['password'];
            if (strlen($username) < 3) {
                $this -> setValidationError("password", "Invalid Password - password must be at least 3 symbols.");
            }
            if ($password != $passwordRepeat) {
                $this -> setValidationError("password", "the 2 passwords do not match.");
            }

            $fullName =$_POST['fullName'];
            if (strlen($fullName) < 2|| strlen ($fullName)> 200) {
                $this->setValidationError("fullName", "Full Name must be between 2 and 200 characters.");
            }

                $email = $_POST['email'];
                if (strlen($email) < 2 || strlen($email) > 80) {
                    $this->setValidationError("email", "Please, enter your email address.");

                }
            if($this->formValid()){
                $userID = $this->model->registration ($username, $password, $fullName, $email);
                if ($userID){
                    $_SESSION['username'] = $username;
                    $_SESSION['userID'] = $userID;
                    $this -> addInfoMessage("Registration successful.");
                    $this -> redirect('index.php');
                }else{
                    $this->addErrorMessage("Registration failed. Try again.");
                }


            }

            }
    }

    public function login()
    {

    }
    public function logout()
    {

    }
}