<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main style="display: flex; justify-content:center; align-items:center; padding-top:100px;">
            <form class="bg-light w-50 p-5" action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Add new!</h1>
                <div class="col-6 mb-3 w-100 justify-content-center">
                    <label for="description" class="form-label">Description: </label>
                    <input type="text" name="description" class="form-control rounded-bottom" id="description" placeholder="Description...">
                    @error('description')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3 w-100">
                    <label for="model" class="form-label">Model: </label>
                    <input type="text" name="model" class="form-control" id="model" placeholder="Model...">
                    @error('model')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3 w-100">
                    <label for="produced_on" class="form-label">Model: </label>
                    <input type="date" name="produced_on" class="form-control" id="produced_on" placeholder="Produced_on...">
                    @error('produced_on')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3 w-100 w-100">
                    <label for="img" class="form-label">Model: </label>
                    <input type="file" name="img" id="img" />
                    @error('img')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-primary w-100" value="Submit">
                </div>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
