<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        table{
            border: 2px solid black;
        }
            th,td{
                padding: 20px;
                border-right: 2px solid black;

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
    <div class="container-md my-5 p-3">
        <table>
            <div>
                <h4 class="d-inline-block">Manage Users</h4>
                <a class="d-inline-block" href="/">Add new</a>
            </div>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>User_Level</th>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="">Michael Choi</a></td>
                <td>michael@village88.com</td>
                <td>Dec. 24th 2012</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="">James Santos</a></td>
                <td>jamessantos996@village88.com</td>
                <td>Mar. 8th 2021</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="">Dummy</a></td>
                <td>dummy@village88.com</td>
                <td>Mar. 19th 2021</td>
                <td>normal</td>
            </tr>
        </table>
    </div>
</body>
</html>