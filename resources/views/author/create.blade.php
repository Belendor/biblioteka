@extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Visi autoriai</div>
 
                <div class="card-body">

                    <form method="POST" action="{{route('author.store')}}">

                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" type="text" name="author_name">
                        </div>

                        <div class="form-group">
                            <label>Surname:</label>
                            <input class="form-control" type="text" name="author_surname">
                        </div>
                        
                        @csrf
                        <button type="submit">ADD</button>
                     </form>

                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection
 