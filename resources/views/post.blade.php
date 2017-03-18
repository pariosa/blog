
@extends('layouts.app')
 
     @section('content')

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .hidden{
                display:none;
            }
        </style>

    <body>
        <div class="flex-center position-ref full-height">
                 <div class="top-right links">
                </div>
 
            @if(auth()->user())
            <div class="content">
            <form action="/blogpost" role='form' method='post'>
            {!! csrf_field() !!}
                <div class='form-group'>
                    <div class='col-md-6'>
                        <input type="text" class='form-control input-md' name='Title' placeholder="Title" />
                        <input type="text" class='form-control input-md' name='Subtitle' placeholder="Subtitle" />
                        <textarea name="Content" cols="50" rows="10" placeholder="Blog text goes here"></textarea>
                        <input type="text" class='form-control hidden input-md' value="{{auth()->user()->id}}" name='owner'/>
                        <input type="text" class='form-control input-md' name='tags' placeholder="Tags" />
                        <button class="btn btn-primary btn-success btn-sm" value="submit">Create Blog Entry</button>
                    </div>
                </div>
            </form>
            </div>
            @endif
        </div>
    </body>
</html>
@endsection