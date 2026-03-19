@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">{{ __('Mes posts') }}</div>

                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

@foreach($posts as $post)
<p style = "border:1px solid black; max-width:500px;" > {{$post-> content }}</p>
@endforeach
</body>
</html>

