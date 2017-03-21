@extends('layouts.app')
 
     @section('content')
    <body>
  
            <div class="content">
             @foreach($posts as $post)
             <div class='title'>{{$post->Title}}</div>
             <div class='author'>{{App\User::where('id','=', $post->owner)->pluck('name')}}</div>
             <div class='subtitle'>{{$post->Subtitle}}</div>
             <div class='content'>{{$post->Content}}</div>
             <div class='tags'>{{$post->tags}}</div>
             @if(auth()->user())
             <form action="/delete" role='form' method='post'>
            {!! csrf_field() !!}
                <div class='form-group'>
                    <div class='col-md-6 hidden'>
                        <input type="text" class='form-control input-md' name='id' placeholder="" value="{{$post->id}}" />
                    </div>
                </div>
                     <button class="btn btn-primary btn-success btn-sm" value="submit">Delete Blog Entry
                     </button>

            </form>
             @endif 
             @endforeach
            </div>
  
        </div>
    </body>
</html>
@endsection