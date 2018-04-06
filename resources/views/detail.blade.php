@extends("layouts.app")


@section("content")
<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body >
<div class="container">
    <p>{{$recipe->name}}</p>
    <img src="{{$recipe->avatar_url}}" height="400px;">
</div>
<div class="container">
    ingredients:
    @foreach($ingredients as $ingredient)
        <li>
            <div>
                <a href="http://food.test/ingredient/{{$ingredient->id}}">
                    {{ $ingredient->name }}
                </a>
            </div>
        </li>


    @endforeach
</div>

</body>
</html>



@endsection