@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Quote</div>
                    <div class="card-body">

                        <form action="{{ url('/frase/'.$frase->id) }}" method="POST">
                            @csrf
                            {{method_field('PATCH') }} 

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Text</label>
                                    <div class="col-md-6"> 
                                        <input type="text" class="form-control" value="{{ $frase->text}}" name="Text" required>
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Author</label>
                                    <div class="col-md-6"> 
                                        <input type="text" class="form-control" value="{{ $frase->author}}" name="Author" required>
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Image URL</label>
                                    <div class="col-md-6"> 
                                        <input type="text" class="form-control" value="{{ $frase->image}}" name="Image" required>
                                    </div> 
                                </div>
                        
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4" >
                                        <button type="submit" class="btn btn-primary me-3">Update</button>
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