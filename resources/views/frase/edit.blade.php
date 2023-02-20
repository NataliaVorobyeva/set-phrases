@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')

<form class="container p-2 border border-danger">
    <div class="container pb-4">
        <p class="mb-3 border-bottom border-danger">Add new quote</p>

        <div class="col-md-6">
            <label class="form-label">Text</label>
            <input type="text" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Image URL</label>
            <input type="text" class="form-control" required>
        </div>
    </div>

    <div class="container d-flex justify-content-center" >
        <button type="submit" class="btn btn-danger">Add</button>
    </div>
  </form>

@endsection