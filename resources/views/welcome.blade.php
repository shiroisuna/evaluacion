@extends('layout')

@section('content')
           
    <div class="row justify-content-md-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
           
            <div class="card mt-5">
                <form action="/api/auth/login" method="post">
                    @csrf
                    <h3 class="card-title mt-3" align="center">Acceso</h3>
                    <div class="card-body">
                    <!-- <form action=""> -->
                        <div class="form-group">
                            
                        <label for="user">Usuario:</label>
                            <input type="text" name="user" id="user" class="form-control">
                            <label for="clave">Clave:</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <input type="hidden" name="remember_me" id="remember_me" value="true">
                            <input type="submit" id="login" name="login" class="btn btn-primary mt-2" value="ENTRAR">
                            <!-- <p class="mt-3"><a href="#">Recuperar clave </a></p> -->
                            <p>Si no posees usuario, puedes registrarte <a href="/register">aquí</a></p>
                        </div>
                

                
                    </div>
                </form>
            </div>
        </div>
    </div>
           


@endsection
