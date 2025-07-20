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


    <div class="container">
            
    <table class="table table-bordered">
        <thead class="table-dark">
             <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
            <th scope="col">Delete</th>
               <th scope="col">Update</th>
 <th scope="col">View</th>

    </tr>
  </thead>
  <h1 class = "text-center mt-5">Show INFORMATION</h1>
        @foreach($mymodel as $index => $model)
            <div class="col-md-6 mt-5">
                  
        
 
  <tbody>
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$model->name}}</td>
      <td>{{$model->email}}</td>
      <td>{{$model->password}}</td>
      <td><form action="{{route('mymodel.destroy' , $model->id)}}" method="post">
           @csrf
           @method('DELETE')
          <button class="btn btn-danger ">DELETE</button></td>

      </form>
          </td>

    <td>
<a href="{{ route('mymodel.edit', $model->id) }}" class="btn btn-warning">Update</a>

      </td>
      <td>
<a href="{{ route('mymodel.show', $model->id) }}" class="btn btn-warning">View DATA</a>

      </td>
   
</tr>
                    
          @endforeach
        </tbody>
    </table>
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
