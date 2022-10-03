@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container text-center mt-2">
            <h3>Home</h3>
            <div class="row mt-2">

                <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                    <div class="card shadow">
                      <h2 class="mt-2">Crear</h2> 
                      <i class="mt-3 fa-solid fa-pencil fa-5x"></i>

                        <div class="container">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success mt-3 mb-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Crear Registro
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 " id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputAddress" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                        placeholder="1234 Main St">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                                    <input type="text" class="form-control" id="inputAddress2"
                                                        placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputState" class="form-label">State</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="inputZip" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Check me out
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                    <div class="card shadow">
                      <h2 class="mt-2">Consultar</h2> 
                      <i class="mt-3 fa-solid fa-solid fa-eye fa-5x"></i>

                        <div class="container">
                            <button type="button" class="btn btn-outline-secondary mt-3 mb-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">Mirar Registros
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                    <div class="card shadow">
                      <h2 class="mt-2">Actualizar</h2> 
                        <i class="mt-3 fa-solid fa-arrow-rotate-right fa-5x"></i>    
                        <div class="container">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-outline-warning mt-3 mb-3" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">Editar
                          </button>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-12 py-3 ">
                    <div class="card shadow">
                      <h2 class="mt-2">Eliminar</h2> 
                      <i class="mt-3 fa-solid fa-trash fa-5x"></i>

                        <div class="container">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-outline-danger mt-3 mb-3" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">Realizar Modificacion
                          </button>
                          
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
