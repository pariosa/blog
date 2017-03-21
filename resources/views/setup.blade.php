@extends('layouts.app')

@section('content')



<div class="container">
      <form class="form" action="/setupRun" method="post">
                  {!! csrf_field() !!}

        <h2 class="form-heading">First time setup, please enter administrator account</h2>
        <label for="inputName" class="sr-only">Username</label>
         <input type="text" id="inputName" class="form-control" name="name" placeholder="Username" required autofocus>
         <label for="inputEmail"  class="sr-only">Email</label>

        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
        <label for="inputPassword"  class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	

</div>
@endsection