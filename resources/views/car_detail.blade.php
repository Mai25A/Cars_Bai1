<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-4">Chi tiết xe</h3>
        <div class="row">
            <div class="col-6">
                <img src="{{'/img/'.$car->image}}" alt="" width="100%">
            </div>
            <div class="col-6">

                <ul class="list-group">
                    <li class="list-group-item active">Id: {{$car->id}}</li>
                    <li class="list-group-item">Discription: {{$car->discription}}</li>
                    <li class="list-group-item">Model: {{$car->model}}</li>
                    <li class="list-group-item disabled">Produced_on: {{$car->produced_on}}</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>