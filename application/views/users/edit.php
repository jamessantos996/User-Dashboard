<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        h3{
            padding: 20px;
        }
        form{
            width: 500px;
            text-align: left;
            vertical-align: top;
            padding: 10px;
            border: 2px solid black;
        }
            .form-group{
                padding: 5px 10px 10px 0px;

            }
            .description-form,
            textarea{
                width: 100%;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Test App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Profile</a>
                    </li>
                </ul>
                <a class="nav-link active" aria-current="page" href="/">Log off</a>
            </div>
        </div>
    </nav>
    <h3>Edit Profile</h3>
    <div class="container-md">
        <form class="mx-auto my-3 p-3 d-inline-block">
            <h4>Edit Information</h4>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="first_name">First Name </label>
                <input type="text" class="form-control" id="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <form class="mx-5 my-3 p-3 d-inline-block">
            <h4>Change Password</h4>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Password Confirmation</label>
                <input type="text" class="form-control" id="confirm_password">
            </div>
            
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>

        <form class="mx-auto my-3 p-3 d-block description-form">
            <h4>Edit Description</h4>
            <div class="form-group">
                <textarea name="description" id="description" cols="30" rows="4"></textarea>
            </div>           
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    
</body>
</html>