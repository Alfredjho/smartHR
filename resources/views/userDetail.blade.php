@extends('authtemplate')

@section('Title', 'Structure')
@section('Style')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
@endsection

@section('Content')


<h1>Structure</h1>

<div class="bar"></div>

<br>

<li class = "nav-link">
    
    <a href = "{{route('structure')}}">
        <img src="{{asset ('img/backIcon.png')}}" alt="back">
        Back
    </a>

</li>

<br>


<div class="profile-container">
    <div class="containerCard">
        <div class="profileCard">
            <div class="cardContent">
                <img src="{{ asset($userSelected->image) }}" alt="" style="width: 12vw; height: 12vw;">
                <h6>{{ $userSelected->position }}</h6>
                {{ $userSelected->name }}
            </div>
        </div>

    <div class="isiProfile">
        <p><strong>Employee ID:</strong> {{ $userSelected->employee_id }}</p>
        <p><strong>Name:</strong> {{ $userSelected->name }}</p>
        <p><strong>Department:</strong> {{ $userSelected->department->name }}</p>
        <p><strong>Position:</strong> {{ $userSelected->position }}</p>
        <p><strong>Email:</strong> {{ $userSelected->email }}</p>
        <p><strong>Bio:</strong></p>

        <div class="biobox">
            <div class="bioText">
                <p>{{ $userSelected->bio }}</p>
            </div>
        </div>

    </div>
</div>


@endsection
