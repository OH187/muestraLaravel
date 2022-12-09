@extends('app');
@section('content')
    <div class="container w-25 border p-4  mt-4">
        <form action="{{ route('tareas') }}" method="POST">
        
            @csrf 
            <!-- Lo anterior sirve para agregar seguridad -->

            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo de la tarea</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

        <div>
            @foreach ($tareas as $tarea )
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('tareas-update', ['id' => $tarea->id]) }}">{{ $tarea->title }}</a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('tareas-destroy', [$tarea->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection