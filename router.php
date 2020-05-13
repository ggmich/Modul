<?php
	$url = $_SERVER['REDIRECT_URL'];

	switch ($request) {
    case '/' :
        require __DIR__ . '/View/index.php';
        break;
    case '' :
        require __DIR__ . '/View/index.php';
        break;
    case '/about' :
        require __DIR__ . '/View/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/View/404.php';
        break;
}	
?>