@extends('app');
@section('content')
    <div class="container w-25 border p-4  mt-4">
        <form action="{{ route('tareas-update', ['id' => $tarea->id]) }}" method="POST">
        
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
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $tarea->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

    </div>
@endsection