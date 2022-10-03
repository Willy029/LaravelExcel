<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel/CSV</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body class="text-light">
    <nav class="navbar ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
          </a>
        </div>
      </nav>
      
      <div class="container border mt-2">
        <div class="card mt-3 mb-3 ">
            <div class="card-header text-center ">
                <h4></h4>
            </div>
            <div class="card-body ">
                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Importar User Data</button>
                </form>
      
                <table class="table table-bordered mt-3 ">
                    <tr>
                        <th colspan="3">
                            Lista de Usuarios
                            <a class="btn btn-outline-info float-end" href="{{ route('users.export') }}">Exportar User Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </table>
      
            </div>
        </div>
    </div>
</body>
</html>