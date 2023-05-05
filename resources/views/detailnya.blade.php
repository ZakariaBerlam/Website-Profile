<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    @extends('Desc')
    @section('Detail')
    <div class="card" id="kartunya" style="width: 18rem;">
        <img src="{{$hob['image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$hob['Hobby name']}}</h5>
          <p class="card-text">{{$hob['Hobby Detail']}}</p>
          <a href="/{{$hob['Hobby name']}}" class="btn btn-primary">Detail</a>
        </div>
    </div>
</body>
</html>
