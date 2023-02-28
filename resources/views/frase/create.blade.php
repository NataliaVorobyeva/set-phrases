@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')

@include('partials.flash_alerts')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new quote</div>
                    <div class="card-body">

                        <form action="{{ url('/frase') }}" method="POST">
                            @csrf

                                <div class="row mb-3">
                                    <label for="Text" class="col-md-4 col-form-label text-md-end">Text</label>
                                    <div class="col-md-6"> 
                                        <textarea type="text" class="form-control" required name="Text" rows="5"></textarea>
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                    <label for="Author" class="col-md-4 col-form-label text-md-end">Author</label>
                                    <div class="col-md-6"> 
                                        <input type="text" class="form-control" required name="Author" >
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                    <label for="Image" class="col-md-4 col-form-label text-md-end">Image URL</label>
                                    <div class="col-md-6"> 
                                        <input type="text" class="form-control" required name="Image" >
                                    </div> 
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4" >
                                        <button type="submit" class="btn btn-primary me-3">Add</button>
                                        <a href="{{ url('/frase') }}" class="btn btn-outline-primary">Cancel</a>
                                    </div>
                                </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection