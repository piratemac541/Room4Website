<?php

namespace Room4;

class Room4Routes  implements \Ninja\Routes {
    public function __construct() {
        include __DIR__ . '/../../includes/DatabaseConnection.php';
	    
	    $this->blogsTable = new \Ninja\DatabaseTable($pdo, 'blog', 'id');
        $this->authorsTable = new \Ninja\DatabaseTable($pdo, 'author', 'id');    
		$this->authentication = new \Ninja\Authentication($this->authorsTable, 'email', 'password');
	}
        

	public function getRoutes():array {
		$blogController = new \Room4\Controllers\Blog($this->blogsTable, $this->authorsTable);
        $authorController = new \Room4\Controllers\Register($this->authorsTable);
		$loginController = new \Room4\Controllers\Login($this->authentication);

		$routes = [
			'author/register' => [
				'GET' => [
					'controller' => $authorController,
					'action' => 'registrationForm'
				],
				'POST' => [
					'controller' => $authorController,
					'action' => 'registerUser'
				]
			],
			'author/success' => [
				'GET' => [
					'controller' => $authorController,
					'action' => 'success'
				]
			],
			'blog/edit' => [
				'POST' => [
					'controller' => $blogController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $blogController,
					'action' => 'edit'
				], 
				'login' => true
				
			],
			'blog/delete' => [
				'POST' => [
					'controller' => $blogController,
					'action' => 'delete'
				], 
				'login' => true
			],
			'blog/list' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'list'
				]
			],
			'login/error' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'error'
				]
			],

			'login' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'loginForm'
				],
				'POST' => [
					'controller' => $loginController,
					'action' => 'processLogin'
				]
			],
			'login/success' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'success'
				]
			],
			'logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],
			'' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'home'
				]
			],
			'blog/rehearsal' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'rehearsal'
				]
			],
			'blog/recording' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'recording'
				]
			],
			'blog/video' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'video'
				]
			],
			'blog/hire' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'hire'
				]
			],
			'blog/vouchers' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'vouchers'
				]
			]
                
		];

		return $routes;
	}

	public function getAuthentication(): \Ninja\Authentication
	{
		return $this->authentication;
	}
}
        
        
        