<?php
class LoginState {

    const USERNAME_NOT_EXISTS = 1;
    const PASSWORD_WRONG = 2;
    const SUCCESS = 3;
    

    public function __contruct() {
        
    }

    public $state;
    public $username;
    public $uid;
public $pic;
}

?>
