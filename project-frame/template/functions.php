<?php


function showError($name){
    if(isset($_SESSION[$name."_error"])){
        echo '<small class="text-danger font-weight-bold">'.$_SESSION[$name.'_error'].'</small>';
        $_SESSION[$name.'_error'] = "";
    }
}

function old($name){

    if(empty($_SESSION[$name."_error"])){
        echo @$_POST[$name];
    }

}

function register(){

//    return print_r($_POST);

    global $gender;


    if(empty($_POST['name'])){

        $_SESSION['name_error'] = "Name is required";

    }else{

        $name = $_POST['name'];


        if(strlen($name) < 5){

            $_SESSION['name_error'] = "Name is too short";

        }else{

            if(strlen($name) > 25){

                $_SESSION['name_error'] = "Name is too long";

            }else{

                if (!preg_match("/^[a-zA-Z- ]*$/",$name)) {
                    $_SESSION['name_error'] = "Only letters and white space allowed";
                }else{

                    $_SESSION['name_error'] = "";

                }

            }

        }

    }

    if(empty($_POST['email'])){
        $_SESSION['email_error'] = "Email Required";
    }else{

        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

            $_SESSION['email_error'] = "Invalid email format";


        }else{

            $_SESSION['email_error'] = "";

        }

    }

    if(empty($_POST['gender'])){
        $_SESSION['gender_error'] = "Gender Required";
    }else{

        if(!in_array($_POST['gender'],$gender)){

            $_SESSION['gender_error'] = "Gender is invalid";

        }else{


            $_SESSION['gender_error'] = "";

        }

    }




}