@extends('layouts.app')

@section('content')
    @foreach ($chefs as $chef)
        <tr>
            <!-- Task Name -->
            <td class="table-text">
                <div class="container">
                    <!--link edit khac'-->
                    <a href="http://food.test/chef/{{$chef->id}}">
                        {{$chef->name}}
                    </a>
                </div>

            </td>
        </tr>
    @endforeach

    <form action="{{ url('search') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group custom-search-form container">
            <input type="text" class="form-control" id="recipe_name" name="recipe_name" placeholder="Recipe's name">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>Search
            </button>
        </div>
    </form>

    <div class="panel-body">
        @if(isset($results))

            @foreach($results as $result)
                <div class="row">
                    <div class="col-md-6">
                        <img  src="{{ $result->avatar_url }}" height="50px" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>Name</h3>
                        <p>{{ $result->name }}</p>
                        <br/>
                        <h3>Author</h3>
                        <?php
                        $user = App\User::find($result->chef_id);
                        ?>
                        <p>{{ $user->name }}</p>
                        <br/>
                        <h3>Description</h3>
                        <p>{{ $result->description }}</p>
                        <br/>
                        <h3>Detail</h3>
                        <p>{{ $result->detail }}</p>
                        <br/>
                        <h3>Ingredient</h3>
                        <?php
                        $ingredients = App\Recipe::find($result->id)->ingredients;
                        //dd($ingredients);
                        ?>
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
                </div>
                <hr/>
    @endforeach
    @endif
@endsection
