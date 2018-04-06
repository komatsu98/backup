@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/chef/'.$chefId.'/edit/'.$recipe->id) }}" method="POST">
            {{ csrf_field() }}
            @include('common.errors')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="{{ $recipe->name }}" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" value="{{ $recipe->description }}" name="description">
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <input type="text" value="{{ $recipe->detail }}" name="detail">
            </div>
            <div class="form-group">
                <label for="avatar-url">Avatar URL</label>
                <input type="text" value="{{ $recipe->avatar_url }}" name="avatar_url">
            </div>
            <div class="float-right">
                <button class="btn btn-light" name="cancel">Cancel</button>
                <button class="btn btn-primary" name="edit" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection