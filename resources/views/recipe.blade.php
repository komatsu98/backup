@extends("layouts.app")


@section("content")
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<body>

    Cac mon an cua dau bep {{$chef->name}}
    <ul>
        @foreach($recipes as $recipe)
            <li>
                <div>
                    <a href="http://food.test/recipe/{{$recipe->id}}">
                        {{$recipe->name}}
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
    <a href='http://food.test/chef/{{$chef->id}}/edit-recipe'>
        <button>
            Edit
        </button>
    </a>

@endsection


