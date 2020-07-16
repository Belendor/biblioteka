@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Visi autoriai:</div>

               <div class="card-body">

                    @foreach ($authors as $author)
                    <p>{{$author->name}} {{$author->surname}}</p>
                    <form method="POST" action="{{route('author.destroy', [$author])}}">
                    @csrf
                    <button class="btn btn-danger" type="submit">DELETE</button>
                    <a class="btn btn-success" href="{{route('author.edit',[$author])}}">EDIT</a>
                    </form>
                    <br>
                  @endforeach

               </div>
           </div>
       </div>
   </div>
</div>
@endsection