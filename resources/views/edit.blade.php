@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Edit recipe</div>
        <div class="panel-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            { Collective\Html\FormFacade::model($recipe, ['method' => 'PATCH','route' => ['update', $recipe->id]]) }
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{  $recipe->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3">{{  $recipe->description }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save Changes" class="btn btn-info">
                <a href="{{ route('edit-recipe')  }}" class="btn btn-default">Cancel</a>
            </div>
            { Collective\Html\FormFacade::close() }
        </div>
    </div>

@endsection