<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
<?php
    $this->load->view('partials/navbar');
?>
    <h3>Edit Profile</h3>
    <div class="container-md">
        <form class="mx-auto my-3 p-3 d-inline-block" action="edit_information" method="post">
            <h4>Edit Information</h4>
            <input type="hidden" name="id" value="<?=$users['id']?>">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" name="email" id="email" value=<?=$users['email']?>>
            </div>
            <div class="form-group">
                <label for="first_name">First Name </label>
                <input type="text" class="form-control" name="first_name" id="first_name" value=<?=$users['first_name']?>>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value=<?=$users['last_name']?>>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Save"></input>
        </form>

        <form class="mx-5 my-3 p-3 d-inline-block" action="edit_password" method="post">
            <h4>Change Password</h4>
            <input type="hidden" name="id" value="<?=$users['id']?>">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Password Confirmation</label>
                <input type="text" class="form-control" name="confirm_password" id="confirm_password">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Update Password"></input>
        </form>

        <form class="mx-auto my-3 p-3 d-block description-form" action="edit_description" method="post">
            <h4>Edit Description</h4>
            <input type="hidden" name="id" value="<?=$users['id']?>">
            <div class="form-group">
                <textarea name="description" name="description" id="description" cols="30" rows="4"></textarea>
            </div>           
            <input type="submit" class="btn btn-primary" value="Save"></input>
        </form>
    </div>

    
</body>
</html>