  
@extends('layouts.app')
 
     @section('content')
  <body>

  

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">{{$board->Name}}</h1>
        <p>{{$board->Description}}</p>
       </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <h3>New Topic:</h3>
        <form action="/createTopic" role='form' method='post'>
            {!! csrf_field() !!}
                <div class='form-group'>
                    <div class='col-md-6'>
                        <input type="text" class='form-control input-md' name='Subject' placeholder="Subject" />

                        <input type="text" class='form-control input-md' name='Tripseed' placeholder="Username" />
                        <input type="text" class="hidden form-control" name="Board" value="{{$board->id}}"/>
                        <textarea name="Content" cols="100" rows="4" placeholder="Input reply here"></textarea>

                        <input type="text" class='form-control hidden input-md' value="{{auth()->user()->id}}" name='Author'/>

                        <input type="file" class='form-control input-md' name='Image' placeholder="Image" />
                        <button class="btn btn-primary btn-success btn-sm" value="submit">Create Topic</button>
                    </div>
                </div>
            </form> 
      </div>
      <div class="row">
      <h3>Topics:</h3>
      @foreach($topics as $topic)
        {{$topic->Author}} .... {{$topic->id}}

        @foreach(App\Reply::where("Topic", '=', $topic->id)->get() as $reply)
          <div class="col-md-3">{{$reply->Tripseed}}</div>
          <div class="col-md-6">{{$reply->Subject}}</div>
          <div class="col-md-9">{{$reply->created_at}}</div>
          <div class="col-md-12">{{$reply->Content}}</div>
       @endforeach
      @endforeach

      </div>
      <hr>

      <footer>
        <p>&copy; Pepechan v2</p>
      </footer>
    </div>
    @endsection