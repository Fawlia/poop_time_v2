<?php
require "./vendor/autoload.php";

$router = new AltoRouter();
$router->setBasePath('poop_time_v2/');
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
    'debug' => true
));

// map homepage

$router->map('GET', '/index.php',function(){
	header('Location: http://localhost/poop_time_v2/home');

});

$router->map('GET', '/',function(){
	header('Location: http://localhost/poop_time_v2/home');

});


$router->map( 'GET', '/home', function() {

	include_once "db_config.php";
	include_once "./models/Toilettes.class.php";
	$mark = new Toilettes;
	$mark2 = $mark->selectionToilettes($pdo);
  //print_r($mark2);
	global $twig;
	echo $twig->render('index.html.twig', array('mark2' => $mark2));
});

$router->map( 'GET', '/[i:id]', function($id) {

	  include_once "db_config.php";

	  include_once "./models/Toilettes.class.php";
	  $toilette = new Toilettes;
	  $tabInfo['adresse'] = $toilette->selectInfoToiletteById($pdo, $id)[0][0];
	  $tabInfo['handicape'] = $toilette->selectInfoToiletteById($pdo, $id)[0][1];
	  $tabInfo['payant'] = $toilette->selectInfoToiletteById($pdo, $id)[0][2];
	  $tabInfo['description'] = $toilette->selectInfoToiletteById($pdo, $id)[0][3];
	  $tabInfo['type'] = $toilette->selectInfoToiletteById($pdo, $id)[0][4];

	  include_once "./models/Ville.class.php";
	  $ville = new Ville;
	  $tabInfo['ville'] = $ville->selectVilleById($pdo, $id)[0][0];

	  include_once "./models/Users.class.php";
	  $user = new Users;
	  $tabInfo['user'] = $user->selectUserById($pdo, $id)[0][0];
		global $twig;
		echo $twig->render('description.html.twig', array('tabInfo' => $tabInfo));
	  //print_r($tabInfo);

});

$router->map( 'GET', '/description', function() {

		global $twig;
	echo $twig->render('description.html.twig');

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


		require_once "db_config.php";
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
