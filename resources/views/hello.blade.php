<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<h1>
    Hello world
</h1>

<?php
$users = App\Models\Teacher::all();
?>
<table>
    <tr><th>ID</th>
        <th>Name</th>
        <th>Surname</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?=$user->id?></td>
        <td><?=$user->name?></td>
        <td><?=$user->surname?></td>
    </tr>
    <?php endforeach; ?>
</table>

<form method="post" action="/mark">
    {{ csrf_field() }}
    <label for="mark">
        Оцінка
        <input id="mark" type="number" name="mark">
    </label>


    <button style="margin:40px;">Hi</button>
</form>
</body>
</html>
