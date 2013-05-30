<?php
require 'vendor/autoload.php';

// create new Slim instance
$app = new \Slim\Slim(array(
    "MODE" => "development",
    "TEMPLATES.PATH" => "./templates"
));

// add new Route 
$app->get("/home", function () {	
    include "home.php";
});

$app->get("/work", function () {	
    include "work.php";
});

$app->get("/", function () {	
    include "home.php";
});

$app->get("/home", function () {	
    include "home.php";
});

$app->get("/company", function () {	
    include "company.php";
});
$app->get("/contact", function () {	
    include "contact.php";
});

$app->get("/team", function () {	
    include "team.php";
});

$app->get("/services", function () {	
    include "services.php";
});

$app->get("/ourexperience", function () {	
    include "pastprojects.php";
});

$app->get("/data", function () {	
    include "js/data.php";
});

$res = $app->response();
$app->run();

?>