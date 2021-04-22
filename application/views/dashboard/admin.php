<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
       table{
            border: 2px solid black;
        }
            th,td{
                padding: 20px;
                border-right: 2px solid black;

            }
            th{
                background-color: #ccc;
            }
    </style>
</head>
<body>
<?php
    $this->load->view('partials/navbar');
?>
    <div class="container-md my-5 p-3">
        <table>
            <div>
                <h4 class="d-inline-block">Manage Users</h4>
                <a class="d-inline-block" href="Users/new">Add new</a>
            </div>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>User_Level</th>
                <th>Actions</th>
            </tr>
<?php
        for($i = 0; $i < count($users); $i++){
            if($users[$i]['user_level'] == 1){
                $user_level = "Admin";
            }
            else{
                $user_level = "Normal";
            }
?>
            <tr>
                <td><?=$users[$i]['id']?></td>
                <td><a href="Users/show/<?=$users[$i]['id']?>"><?=$users[$i]['name']?></a></td>
                <td><?=$users[$i]['email']?></td>
                <td><?=$users[$i]['created_at']?></td>
                <td><?=$user_level?></td>
                <td><a href="/Users/edit/<?=$users[$i]['id']?>">Edit</a> | <a href="/Users/remove/<?=$users[$i]['id']?>">Remove</a></td>
            </tr>
<?php
        }
?>
        </table>
    </div>
</body>
</html>