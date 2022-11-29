@include('deleteModal')
@include('editModal')

@extends('template')

@section('contenido')

    @if (session()->has('Eliminado'))
        {!! "<script> Swal.fire(
                    'Eliminado',
                    'Tu recuerdo se elimino correctamente!',
                    'success'
                  )</script> " !!}
    @endif

    @if (session()->has('Actualizado'))
        {!! "<script> Swal.fire(
                'Correcto!',
                'Tu recuerdo se actualizo correctamente!',
                'success'
              )</script> " !!}
    @endif

    @foreach ($resultRec as $consulta)
        <div class="container col-md-6">

            <div class="card text-center mt-5 mb-5">
                <div class="display-7 card-header">
                    {{ $consulta->fecha }}
                </div>

                <div class="card-body">
                    {{ $consulta->titulo }}
                    <br>
                    {{ $consulta->recuerdo }}
                </div>

                <div class="card-footer">
                    <!-- with modals -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target='#EditModal{{ $consulta->idRecuerdo }}'>
                        Edit
                    </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target='#DeleteModal{{ $consulta->idRecuerdo }}'>
                        Delete
                    </button>

                </div>
            </div>
        </div>
    @endforeach
@stop
