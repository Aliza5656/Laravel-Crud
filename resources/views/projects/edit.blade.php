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
     

    <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <h1 class="text-black text-capitalize text-3xl font-bold text-center">User Information</h1>

            <form action="{{ route('mymodel.update', $mymodel->id) }}" method="post" class="mt-5">
                @csrf
                @method('PUT') <!-- Required for PUT/PATCH routes -->

                <input type="text" name="name" class="form-control my-3" value="{{ $mymodel->name }}" placeholder="Name">

                <input type="text" name="email" class="form-control my-3" value="{{ $mymodel->email }}" placeholder="Email">

                <input type="text" name="password" class="form-control my-3" value="{{ $mymodel->password }}" placeholder="Password">

                <button type="submit" class="btn btn-danger text-center w-100 mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>

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
