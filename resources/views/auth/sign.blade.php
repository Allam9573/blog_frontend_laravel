@extends('base')
@section('title')
    Welcome to BlueLabel Sports
@endsection
@include('includes/navbar_index')
@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-6 my-auto">
                <div class="d-flex flex-column">
                    <h2>Bienvenido a BlueLabel Sports</h2>
                    <div>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, repellendus? Cumque veritatis

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">Crear una cuenta</h3>
                        <form action="">
                            <input type="text" name="" placeholder="Usuario" class="form-control mb-3">
                            <input type="text" name="" placeholder="CorreoElectronico" class="form-control mb-3">
                            <input type="password" name="" placeholder="Password" class="form-control mb-3">
                            <input type="password" name="" placeholder="Coffirm Password" class="form-control mb-3">
                            <input type="submit" value="Registrar" class="btn btn-primary">
                        </form>
                        <p>Ya tienes una cuenta? <br> <a href="/login">Inicia Sesion</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
