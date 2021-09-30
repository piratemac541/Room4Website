<?php

namespace Room4;

class Room4Routes {
    public function getRoutes() {
        include __DIR__ . '/../../includes/DatabaseConnection.php';
	    
	    $blogsTable = new \Ninja\DatabaseTable($pdo, 'blog', 'id');
        $authorsTable = new \Ninja\DatabaseTable($pdo, 'author', 'id');    

        $blogController = new \Room4\Controllers\Blog($blogsTable, $authorsTable);
        

        $routes = [
			'blog/edit' => [
				'POST' => [
					'controller' => $blogController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $blogController,
					'action' => 'edit'
				]
				
			],
			'blog/delete' => [
				'POST' => [
					'controller' => $blogController,
					'action' => 'delete'
				]
			],
			'blog/list' => [
				'GET' => [
					'controller' => $blogController,
					'action' => 'list'
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
}
        
        
        