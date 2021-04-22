<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">User Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
                <a class="nav-link active" aria-current="page" href="signin">Sign in</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron m-5 p-5 bg-light">
        <h1 class="display-4">Welcome to the Test</h1>
        <p class="lead">We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
        <p class="lead">
            <a class="btn btn-primary btn-md" href="signin" role="button">Start</a>
        </p>
    </div>
    <div class="container-md">
        <div class="row">
            <div class="col-sm">
                <h4>Manage Users</h4>
                <p class="lead">Using this application, you'll learn how to add, remove, and edit users for the application.</p>
            </div>
            <div class="col-sm">
                <h4>Leave messages</h4>
                    <p class="lead">Users will be  able to leave a message to another user using this application</p>
                </div>
            <div class="col-sm">
                <h4>Edit User Information</h4>
                    <p class="lead">Admins will be able to edit another user's information(email address, first name, last name, etc)</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>