@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            View recipe
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('recipes.index')  }}">Go Back</a>
            </div>
            <div class="form-group">
                <strong>Name: </strong> {{ $recipe->name  }}
            </div>
            <div class="form-group">
                <strong>Description: </strong> {{ $recipe->description  }}
            </div>
        </div>
    </div>

@endsection