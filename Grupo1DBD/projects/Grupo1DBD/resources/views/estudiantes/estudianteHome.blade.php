@extends('layout')
@section('contenido') 

<center><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Inicio de Estudiante</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido Estudiante, su numero de id es:  {{ Auth::user()->id}}
                </div></center>
            </div>
        </div>
    </div>
</div></center>
@endsection