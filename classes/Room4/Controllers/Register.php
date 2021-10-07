<?php
namespace Room4\Controllers;
use \Ninja\DatabaseTable;

class Register {
	private $authorsTable;

	public function __construct(DatabaseTable $authorsTable) {
		$this->authorsTable = $authorsTable;
	}

	public function registrationForm() {
		return ['template' => 'register.html.php', 
				'title' => 'Register an account', 'keywords' => '', 'description' => '', 'heading' => 'Register', 'subHeading' => ''];
	}


	public function success() {
		$title = 'Room4 Studios';
        $keywords = '';
        $description = '';
        $heading = 'Success';
        $subHeading = '';
		return ['template' => 'registersuccess.html.php', 
			'title' => 'Registration Successful', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
	}

	public function registerUser() {
		$author = $_POST['author'];

		//assume the data is valid to begin with
		$valid = true;
		$errors = [];

		//but if any of the fields have been left blank
		//set $valid to false
		if (empty($author['name'])) {
			$valid = false;
			$errors[] = 'Name cannot be blank';
		}

		if (empty($author['email'])){
			$valid = false;
			$errors[] = 'Email cannot be blank';
		}

		else if (filter_var($author['email'], FILTER_VALIDATE_EMAIL) == false) {
			$valid = false;
			$errors[] = 'Invalid email address';
		}

		else { //if the email is not blank and valid:
			//convert the email to lowercase
			$author['email'] = strtolower($author['email']);

			//search for the lowercase version of `$author['email']`
			if (count($this->authorsTable->find('email', $author['email'])) > 0) {
				$valid = false;
				$errors[] = 'That email address is already registered';
			}
		}


		if (empty($author['password'])){
			$valid = false;
			$errors[] = 'Password cannot be blank';
		}

		
		//if $valid is still true, no fields were blank
		//and the data can be added
		if($valid == true) {
			//hash the password before saving into database
			$author['password'] = password_hash($author['password'], PASSWORD_DEFAULT);
			//when submitted. the $author variable  now contains a 
			//lowercase value for email and a hashed password

		$this->authorsTable->save($author);

		header('Location: /author/success');
		}
		else {
			// if the data is not valid, show the form again
			return ['template' => 'register.html.php', 
			'variables' => [
				'errors' => $errors,
				'author' => $author
			],
			'title' => 'Register an account', 'keywords' => '', 'description' => '', 'heading' => 'Register', 'subHeading' => ''];
		}
	}
}