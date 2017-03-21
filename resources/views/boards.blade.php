@extends('layouts.app')

@section('content')


<div class="container">
@if($boards)
@foreach($boards as $board)
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{$board->Header}}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><a href="/b/{{$board->Abbreviation}}">{{$board->Name}}</a></h4>
    <p class="card-text">{{$board->Description}}</p>
    <a href="/b/{{$board->Abbreviation}}" class="btn btn-primary">Browse</a>
  </div>
</div>
@endforeach
@endif
</div>
@endsection