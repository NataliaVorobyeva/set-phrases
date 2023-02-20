@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')

<form class="container p-2 border border-danger" action="{{ url('/frase/'.$frase->id) }}" method="post">
    @csrf
    {{method_field('PATCH') }} 

    <div class="container pb-4">
        <p class="mb-3 border-bottom border-danger">Update quote</p>

        <div class="col-md-6">
            <label class="form-label">Text</label>
            <input type="text" class="form-control" value="{{ $frase->text}}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" value="{{ $frase->author}}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Image URL</label>
            <input type="text" class="form-control" value="{{ $frase->image}}">
        </div>
    </div>

    <div class="container d-flex justify-content-center" >
        <button type="submit" class="btn btn-danger">Update</button>
    </div>
  </form>

@endsection