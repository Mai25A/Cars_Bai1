<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script>
        setTimeout(function(){
            document.getElementById('alert').style.display='none';
        },3000);
      </script>
</head>

<body>
    <div class="container">
        @if (isset($message))
        <div id="alert" class="alert alert-success p-4" style="margin-top:100px !important;" role="alert">
            {{$message}}
          </div>
    @endif
        <div class="col-3">
            <a href="{{ route('cars.create') }}"><input type="button" class="btn btn-success m-3" value="Create"></a>
        </div>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">model</th>
                    <th scope="col">produced_on</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->description}}</td>
                    <td><img src="{{'/img/'.$car->image}}" alt="" width="100px"></td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->produced_on}}</td>
                    <td>
                        <a href="{{action([App\Http\Controllers\CarController::class,'show'],['car'=>$car->id])}}" role="button" class="btn btn-primary">Detail</a>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>