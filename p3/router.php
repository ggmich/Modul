<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/pbw03/p3';

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL.'/users':
				require_once "controller/userController.php";
				$userCtrl = new UserController();
				echo $userCtrl->view_user();
				break;
			case $baseURL.'/roles':
				require_once "controller/roleController.php";
				$roleCtrl = new RoleController();
				echo $roleCtrl->view_roles();
				break;
			case $baseURL.'/update':
				require_once "controller/userController.php";
				$userCtrl = new UserController();
				echo $userCtrl->view_update();
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/roles':
				require_once "controller/roleController.php";
				$roleCtrl = new RoleController();
				$roleCtrl->addNewRole();
				header('Location: roles');
				break;
			case $baseURL.'/users/update':
				require_once "controller/userController.php";
				$userCtrl = new UserController();
				$userCtrl->updateUsername();
				header('Location: ../users');
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}
		
?>