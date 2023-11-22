@extends('authtemplate')

@section('Title', 'KMC')
@section('Content')

<h1>Edit Bio</h1>

<div class = "bar" style = " width:50%;  height: 1px;  background: #BDCFDC;"></div>

<br>
<br>

<form action="{{route('updateBio')}}" method = "POST">

@csrf
@method('patch')

<label for="bio" name= "bio">Bio : </label>
<input type="text" class ="form-control" id ="bio" name = "bio" value = "{{old('bio') ?? $user->bio}}">

<br>
<br>

<button type = "submit" class = "btn btn-primary mb-2" >Update</button>

</form>

@endsection