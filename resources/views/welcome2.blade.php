<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Academic Planner</title>
    <script src="https://kit.fontawesome.com/38beaf997f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3">My Academic Planner</h1>

    @if(session("correcto"))
        <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if(session("incorrecto"))
    <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif
    
    <script>
        var res=function(){
            var not=confirm("Estas seguro de eliminar")
            return not;
        }
    </script>

    <div class="modal fade" id="modalregistrar" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro datos del
                                            profesor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("crud.create1")}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Id</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtcodigo">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtnombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Rol</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtrol">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtusuario">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Identificacion</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtidentificacion">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtemail">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

    <div class="p-5 table-responsive">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalregistrar">Añadir profesor</button>
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->rol }}</td>
                        <td>{{ $item->usuario }}</td>
                        <td>{{ $item->identificacion }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{ $item->id }}" 
                                class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                            <a href="{{route("crud.delete1",$item->id)}}" onclick="return res()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>

                        <!-- Modal modificar datos-->
                        <div class="modal fade" id="modalEditar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del
                                            profesor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("crud.update1")}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Id</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtcodigo" value="{{ $item->id }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtnombre" value="{{ $item->nombre }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Rol</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtrol" value="{{ $item->rol }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtusuario" value="{{ $item->usuario }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Identificacion</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtidentificacion" value="{{ $item->identificacion }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtemail" value="{{ $item->email }}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Modificar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
