<?php
require "./vendor/autoload.php";

$router = new AltoRouter();

$router->setBasePath('PT/');

$loader = new Twig_Loader_Filesystem('views');


$twig = new Twig_Environment($loader, array(
    'cache' => false,
	'debug' => true
));

// map homepage

$router->map( 'GET', '/home', function() {
	
	global $twig;
	echo $twig->render('index.html.twig', array('name' => 'Fabien'));
	
});


$router->map( 'GET', '/form', function() {
	
	$a = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
	global $twig;
	echo $twig->render('form.html.twig', array('data' => $a));
	
});


$router->map( 'GET', '/history', function() {
	
		global $twig;
	echo $twig->render('history.html.twig');
	
});

$router->map( 'GET', '/apropos', function() {
	
		global $twig;
	echo $twig->render('apropos.html.twig');
	
});

$router->map( 'GET', '/contact', function() {
	
		global $twig;
	echo $twig->render('contact.html.twig');
	
});


$router->map( 'GET', '/insert', function() {
	
		require_once db_config.php;
		global $twig;
	echo $twig->render('insert.html.twig');
	
});



$router->map( 'GET', '/test', function() {
    echo "Bonjour";
});






















$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}



?>