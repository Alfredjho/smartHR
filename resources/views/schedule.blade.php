@extends('authtemplate')

@section('Title', 'Schedule')
@section('Style')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script async src="{{ asset('js/schedule.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/schedule.css') }}" />

@endsection


@section('Content')

<div class="container">
        <div class="left">
            <div class="today-date">
                <div class="event-day"><span class="day-number">12 </span>loading</div>
            </div>
            <div class="events"></div>
            <div class="add-event-wrapper">
                <div class="add-event-header">
                    <div class="title">Add Event</div>
                    <i class="fas fa-times close"></i>
                </div>
                <div class="add-event-body">
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Name" class="event-name" />
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Time From" class="event-time-from" />
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Time To" class="event-time-to" />
                    </div>
                </div>
                <div class="add-event-footer">
                    <button class="add-event-btn">Add Event</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev">{{ '<' }}</i>
                    <div class="date">loadingg</div>
                    <i class="fas fa-angle-right next">{{ '>' }}</i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days"></div>
                <div class="goto-today">
                    <button class="today-btn">Today</button>
                    <button class="add-event">
                        <i class="fas fa-plus">{{ '+' }}</i>
                    </button>
                </div>
            </div>


        </div>
    </div>

@endsection