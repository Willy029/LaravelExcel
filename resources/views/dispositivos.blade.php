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
                <form action="{{ route('dispositivos.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Importar User Data</button>
                </form>
      
                <!--<table class="table table-bordered mt-3 ">
                    <tr>
                        <th colspan="3">
                            Lista de Dispoitivos
                            <a class="btn btn-outline-info float-end" href="{{ route('dispositivos.export') }}">Exportar User Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>n_Empleado</th>
                        <th>Folio_Pagare_y_Carta_Responsiva</th>
                        <th>Nombre_del_Responsable_del_Equipo</th>
                        <th>Departamento</th>
                        <th>Equipo</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>n_Telefono</th>
                        <th>Contraseña_del_dispositivo_celular</th>
                        <th>IMEI</th>
                        <th>Nombre_del_Dispositivo</th>
                        <th>n_Serie</th>
                        <th>HDD</th>
                        <th>SSD</th>
                        <th>Contraseña_del_dispositivo</th>
                        <th>Precio_a_pagar_en_caso_de_daño_directo</th>
                        <th>Fecha_de_Entrega</th>
                        <th>Fecha_de_Devolucion</th>
                        <th>QR_Code</th>
                        <th>Valor_QR</th>
                    </tr>
                    @foreach($dispositivos as $dispositivo)
                    <tr>
                        <td>{{ $dispositivo->n_Empleado }}
                        <td>{{ $dispositivo->Folio_Pagare_y_Carta_Responsiva }}</td>
                        <td>{{ $dispositivo->Nombre_del_Responsable_del_Equipo }}</td>
                        <td>{{ $dispositivo->Departamento }}</td>
                        <td>{{ $dispositivo->Equipo }}</td>
                        <td>{{ $dispositivo->Descripcion }}</td>
                        <td>{{ $dispositivo->Marca }}</td>
                        <td>{{ $dispositivo->Modelo }}</td>
                        <td>{{ $dispositivo->n_Telefono }}</td>
                        <td>{{ $dispositivo->Contraseña_del_dispositivo_celular }}</td>
                        <td>{{ $dispositivo->IMEI }}</td>
                        <td>{{ $dispositivo->Nombre_del_Dispositivo }}</td>
                        <td>{{ $dispositivo->n_Serie }}</td>
                        <td>{{ $dispositivo->HDD }}</td>
                        <td>{{ $dispositivo->SSD }}</td>
                        <td>{{ $dispositivo->Contraseña_del_dispositivo }}</td>
                        <td>{{ $dispositivo->Precio_a_pagar_en_caso_de_daño_directo }}</td>
                        <td>{{ $dispositivo->Fecha_de_Entrega }}</td>
                        <td>{{ $dispositivo->Fecha_de_Devolucion }}</td>
                        <td>{{ $dispositivo->QR_Code }}</td>
                        <td>{{ $dispositivo->Valor_QR }}</td>
                    </tr>
                    @endforeach
                </table>
            -->

            <tr>
                <th colspan="3">
                    Lista de Dispoitivos
                    <a class="btn btn-outline-info float-end" href="{{ route('dispositivos.export') }}">Exportar User Data</a>
                </th>
            </tr>
            
            <table class="table table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">n_Empleado</th>
                        <th scope="col">Folio_Pagare_y_Carta_Responsiva</th>
                        <th scope="col">Nombre_del_Responsable_del_Equipo</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Equipo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dispositivos as $dispositivo)
                    <tr>
                      <th scope="row">{{ $dispositivo->n_Empleado }}</th>
                      <td>{{ $dispositivo->Folio_Pagare_y_Carta_Responsiva }}</td>
                      <td>{{ $dispositivo->Nombre_del_Responsable_del_Equipo }}</td>
                      <td>{{ $dispositivo->Departamento }}</td>
                      <td>{{ $dispositivo->Equipo }}</td>
                      <td>{{ $dispositivo->Descripcion }}</td>
                      <td>{{ $dispositivo->Marca }}</td>
                      <td>{{ $dispositivo->Modelo }}</td>
                    </tr>
                    @endforeach
                  </tbody>
          </table>
   
          

              <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">n_Empleado</th>
                            <th scope="col">n_Telefono</th>
                            <th scope="col">Contraseña_del_dispositivo_celular</th>
                            <th scope="col">IMEI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dispositivos as $dispositivo)
                        <tr>
                          <th scope="row">{{ $dispositivo->n_Empleado }}</th>
                          <td>{{ $dispositivo->n_Telefono }}</td>
                          <td>{{ $dispositivo->Contraseña_del_dispositivo_celular }}</td>
                          <td>{{ $dispositivo->IMEI }}</td>
                        </tr>
                        @endforeach
                      </tbody>
              </table>

              <table class="table table-striped table-bordered">
                    <thead>
                        
                        <tr>
                            <th scope="col">n_Empleado</th>
                            <th scope="col">Nombre_del_Dispositivo</th>
                            <th scope="col">n_Serie</th>
                            <th scope="col">HDD</th>
                            <th scope="col">SSD</th>
                            <th scope="col">Contraseña_del_dispositivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dispositivos as $dispositivo)
                        <tr>
                          <th scope="row">{{ $dispositivo->n_Empleado }}</th>
                          <td>{{ $dispositivo->Nombre_del_Dispositivo }}</td>
                          <td>{{ $dispositivo->n_Serie }}</td>
                          <td>{{ $dispositivo->HDD }}</td>
                          <td>{{ $dispositivo->SSD }}</td>
                          <td>{{ $dispositivo->Contraseña_del_dispositivo }}</td>
                        </tr>
                        @endforeach
                      </tbody>
              </table>

              <table class="table table-striped table-bordered">
                    <thead>
                        
                        <tr>
                            <th scope="col">n_Empleado</th>
                            <th scope="col">Precio_a_pagar_en_caso_de_daño_directo</th>
                            <th scope="col">Fecha_de_Entrega</th>
                            <th scope="col">Fecha_de_Devolucion</th>
                            <th scope="col">QR_Code</th>
                            <th scope="col">Valor_QR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dispositivos as $dispositivo)
                        <tr>
                          <th scope="row">{{ $dispositivo->n_Empleado }}</th>
                          <td>{{ $dispositivo->Precio_a_pagar_en_caso_de_daño_directo }}</td>
                          <td>{{ $dispositivo->Fecha_de_Entrega }}</td>
                          <td>{{ $dispositivo->Fecha_de_Devolucion }}</td>
                          <td>{{ $dispositivo->QR_Code }}</td>
                          <td>{{ $dispositivo->Valor_QR }}</td>
                        </tr>
                        @endforeach
                      </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html>