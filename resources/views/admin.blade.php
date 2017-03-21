@extends('layouts.app')

@section('content')



<div class="container">
      <form class="form" action="/createBoard" method="post">
                  {!! csrf_field() !!}

        <h2 class="form-heading">Create a New Board</h2>
        <label for="inputName" class="sr-only">Board Title</label>
         <input type="text" id="inputName" class="form-control" name="Name" placeholder="Board Name" required autofocus>

         <label for="inputSubname"  class="sr-only">Board Abbreviation</label>
        <input type="text" id="inputSubname" class="form-control" name="Abbreviation" placeholder="Abbreviation" required> 
 
          <label for="inputDesctiption"  class="sr-only">Board Description</label>
        <textarea   id="inputDescription" class="form-control" name="Description" placeholder="Description" required> </textarea>

        <label for="inputModerators"  class="sr-only">Board Moderators</label>
        <input type="text" id="inputModerators" class="form-control" name="moderators" placeholder="Moderators (eg. Hector, Francis)" required> 

        <label for="inputHeader"  class="sr-only"> </label>
        <input type="file" id="inputHeader" class="form-control" name="Header" placeholder="Header Image" accept="image/gif, image/jpeg, image/png" required> 
          
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create Board</button>
      </form>
	

</div>
@endsection