<?php
namespace App\Controllers;

use \Core\View;
use App\Models\User;

/**
 * Summary of Login
 * This class have fucntions to check login details
 */
class Login extends \Core\Controller
{

    /**
     * Summary of newAction
     * fucntion to view login form
     * @return void
     */
    public function newAction(){
        View::render('Login/login.php');
    }

    /**
     * Summary of createAction
     * function to check login details in database
     * @return void
     */
    public function RegisterAction(){
        $user = new User($_POST);
        if($user->save()) {
            header('Location: /Signup/success');
        }
        else{
            View::render('Login/register.php',[
                'user' => $user
            ]);
        }
    }

    /**
     * Summary of successAction
     * function to view next page if logged in sucessfully 
     * @return void
     */
    public function successAction(){
        View::render('/Feed/viewpost.php');
    }
}
?>