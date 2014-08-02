<?php
// include __DIR__ . "/vendor/autoload.php";


include __DIR__ . "/src/Http/Request.php";

use Phpcourses\Http\Request;
$request = new Request();

if ($request->getRoute() == "list") {
    todoList($request);
}

if ($request->getRoute() == "delete") {
    todoDelete();
}

if ($request->getRoute() == "add") {
    todoAdd();
}

function todoList($request)
{
    $pageTitle = "ToDo List";
    include __DIR__."/app/views/list.php";
}

function todoDelete()
{   
}

// http://localhost:12345/?r=add
function todoAdd()
{
    // get from $_POST
    $title;
    $data;

    include __DIR__."/app/views/add.php";
}

function todoShow()
{

}


function todoResolve()
{

}


// $filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
// if (php_sapi_name() === 'cli-server' && is_file($filename)) {
//     return false;
// }

// $app = require __DIR__.'/src/app.php';
// $app->run();


