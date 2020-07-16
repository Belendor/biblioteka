@extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prideti nauja knyga:</div>
 
                <div class="card-body">

                    <form method="POST" action="{{route('book.store')}}">

                        <div class="form-group">
                            <label>Title:</label>
                            <input class="form-control" type="text" name="book_title">
                        </div>

                        <div class="form-group">
                            <label>ISBN:</label>
                            <input class="form-control" type="text" name="book_isbn">
                        </div>

                        <div class="form-group">
                            <label>Pages:</label>
                            <input class="form-control" type="text" name="book_pages">
                        </div>

                        <div class="form-group">
                            <label>About:</label>
                            <textarea class="form-control" name="book_about"></textarea>
                        </div>

                        <select name="author_id">
                            @foreach ($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                            @endforeach
                        </select>

                        @csrf
                        <button class="btn btn-success" type="submit">ADD</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection