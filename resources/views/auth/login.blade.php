@extends('layouts/main')
@section('contenido')
    <link rel="stylesheet" href="{{asset('css/web/login.css')}}">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 p-5 text-center">
                <div class="titulo my-5">Login</div>
                <img class="logo" src="{{asset('img/logo.jpeg')}}" alt="">
            </div>
            <div class="col-lg-7 p-5 form">
                <div class="container p-0">
                    <div class="row justify-content-center p-0">
                        <div class="col-lg-7 p-5 text-center">
                            <div class="text-start fs-2 fw-lighter mt-3 mb-5 ">Iniciar Sesion</div>
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control rounded-pill border-black" id="usuario" name="usuario" placeholder="Usuario">
                                    <label for="usuario" class="text-muted">Usuario <i class="ms-2 fa-solid fa-user icon"></i></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control rounded-pill border-black" id="password" name="password" placeholder="Contraseña">
                                    <label for="password" class="text-muted">Contraseña <i class="ms-2 fa-solid fa-lock"></i></label>
                                </div>
                                <div class="d-grid mt-4 mb-2 gap-2">
                                    <span id="btn_form" class="btn btn-primary rounded-pill" type="button">Iniciar sesion</span>
                                </div>
                                <div class="text-muted small fw-light">No tienes cuenta? <a class="text-decoration-none" href="">Crea una</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/web/login.js')}}"></script>
@endsection