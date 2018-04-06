@extends("layouts.app")
@section("content")
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New recipe Form -->
        <form action="{{ url('/chef/'.$chefId.'/edit-recipe/recipe')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- recipe Name -->
            <div class="form-group">
                <label for="recipe" class="col-sm-3 control-label">{{$chef->name}}'s Recipes Edit</label>

                <div class="col-sm-12">
                    <input type="text" name="name" id="recipe-name" class="form-control" placeholder="name">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="avatar_url" id="recipe-avatar-url" class="form-control" placeholder="avatar URL">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="detail" id="recipe-detail" class="form-control" placeholder="detail">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="description" id="recipe-description" class="form-control" placeholder="description">
                </div>
            </div>

            <!-- Add Recipe Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Recipe
                    </button>
                </div>
            </div>


        </form>
    </div>
    </body>
    <!-- TODO: Current recipes -->
    @if (count($recipes) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Recipes
            </div>

            <div class="panel-body">
                <table class="table table-striped recipe-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Recipe</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <!-- recipe Name -->
                            <td class="table-text row">
                                <div>
                                    <a href="http://food.test/recipe/{{$recipe->id}}">
                                        <div class="col-md-3">
                                            <img src="{{$recipe->avatar_url}}" height="50px;">
                                        </div>
                                        <div class="col-md-3">
                                            {{$recipe->name}}
                                        </div>
                                        <div class="col-md-3">
                                            {{$recipe->detail}}
                                        </div>
                                        <div class="col-md-3">
                                            {{$recipe->description}}
                                        </div>
                                    </a>
                                </div>


                            </td>

                            <!-- Edit Button -->
                            <td>
                                <form action="{{ url('/chef/'.$chefId.'/edit/form/'.$recipe->id)}}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            Edit
                                        </button>
                                </form>
                            </td>

                            <!-- Delete Button -->
                            <td>
                                <form action="{{ url('/chef/'.$chefId.'/edit-recipe/recipe/'.$recipe->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>


                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
