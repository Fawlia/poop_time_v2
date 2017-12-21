<?php
require "./vendor/autoload.php";

$router = new AltoRouter();


$router->setBasePath('poop_time_v2/index.php/');


$loader = new Twig_Loader_Filesystem('views');


$twig = new Twig_Environment($loader, array(
    'cache' => false,
    'debug' => true
));

// map homepage

$router->map( 'GET', '/home', function() {

	include_once "db_config.php";
	include_once "./models/Toilettes.class.php";
	$mark = new Toilettes;
	$mark2 = $mark->selectionToilettes($pdo);
	global $twig;
	echo $twig->render('index.html.twig', array('mark2' => $mark2));
	//print_r($mark2);

});

$router->map( 'GET', '/description/[i:id]', function($id) {

  include_once "db_config.php";
  include_once "./models/Toilettes.class.php";
  $test = new Toilettes;
  $test2['id'] = $test->selectVilleById($pdo, $id)[0][0];
  $test2['user'] = $test->selectUserById($pdo, $id)[0][0];
  $test2['infos'] = $test->selectInfoToiletteById($pdo, $id)[0];
	global $twig;
	echo $twig->render('description.html.twig');
  print_r($test2);

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
