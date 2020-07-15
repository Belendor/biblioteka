@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Pakeisti knygos irasa</div>

               <div class="card-body">
                    <form method="POST" action="{{route('book.update',[$book])}}">
                        
                        <div class="form-group">
                            <label>Title:</label>
                            <input class="form-control" type="text" name="book_title" value="{{$book->title}}">
                        </div>

                        <div class="form-group">
                            <label>ISBN:</label>
                            <input class="form-control" type="text" name="book_isbn" value="{{$book->isbn}}">
                        </div>


                        <div class="form-group">
                            <label>Pages:</label>
                            <input class="form-control" type="text" name="book_pages" value="{{$book->pages}}">
                        </div>

                        <div class="form-group">
                            <label>About:</label>
                            <textarea class="form-control" name="book_about">{{$book->about}}</textarea>
                        </div>
 

                        <select name="author_id">
                            @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>
                                    {{$author->name}} {{$author->surname}}
                                </option>
                            @endforeach
                    </select>
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection