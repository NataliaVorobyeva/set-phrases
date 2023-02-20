@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')
@include('partials.flash_alerts')
<form class="container p-2 border border-danger" action="{{ url('/frase') }}" method="post">
@csrf
    <div class="container pb-4">
        <p class="mb-3 border-bottom border-danger">Add new quote</p>

        <div class="col-md-6">
            <label for="Text" class="form-label">Text</label>
            <input type="text" class="form-control" required name="Text" >
        </div>

        <div class="col-md-6">
            <label for="Author" class="form-label">Author</label>
            <input type="text" class="form-control" required name="Author">
        </div>

        <div class="col-md-6">
            <label for="Image" class="form-label">Image URL</label>
            <input type="text" class="form-control" required name="Image">
        </div>
    </div>

    <div class="container d-flex justify-content-center" >
        <button type="submit" class="btn btn-danger">Add</button>
    </div>
  </form>

@endsection