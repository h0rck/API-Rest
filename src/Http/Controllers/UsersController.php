<?php
	namespace Http\Controllers;

	class UsersController {
		public function getall()
		{
			if (AuthController::checkAuth()) {
				return array(1 => 'Samuel', 2 => 'Sarah', 3 => 'Mel');
			}
			
			throw new \Exception('Não autenticado');
		}
	}