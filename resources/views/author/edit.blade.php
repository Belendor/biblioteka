@extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>
 
                <div class="card-body">
                    <form method="POST" action="{{route('author.update',[$author])}}">

                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" type="text" name="author_name" value="{{$author->name}}">
                        </div>

                        <div class="form-group">
                            <label>Surname:</label>
                            <input class="form-control" type="text" name="author_surname" value="{{$author->surname}}">
                        </div>

                        @csrf
                        <button class="btn btn-success" type="submit">EDIT</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection