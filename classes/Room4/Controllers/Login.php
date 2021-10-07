<?php
namespace Room4\Controllers;

class Login {
    private $authentication;

    public function __construct(\Ninja\Authentication $authentication) {
		$this->authentication = $authentication;
	}

    public function loginForm() {
		return ['template' => 'login.html.php', 
		'title' => 'Log In', 
		'keywords' => '',
        'description' => '',
        'heading' => 'Log In',
        'subHeading' => ''];
	}

    public function processLogin() {
		if ($this->authentication->login($_POST['email'], $_POST['password'])) {
			header('location: /login/success');
		}
		else {
			return ['template' => 'login.html.php',
					'title' => 'Log In',
					'variables' => [
							'error' => 'Invalid username/password.'
						]
					];
		}
	}

	public function success() {
		return ['template' => 'loginsuccess.html.php',
		 'title' => 'Login Successful',
		 'keywords' => '',
		 'description' => '',
		 'heading' => 'Login Successful',
		 'subHeading' => ''];
	}

    public function error() {
            return ['template' => 'loginerror.html.php', 'title' => 'You are not logged in'];
    }

	public function logout() {
		unset($_SESSION);
		return ['template' => 'logout.html.php', 
		'title' => 'You have been logged out', 
		'keywords' => '',
        'description' => '',
        'heading' => 'Logged Out',
        'subHeading' => ''] ;
	}

}