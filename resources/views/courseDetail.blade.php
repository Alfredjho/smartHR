@extends('authtemplate')

@section('Title', 'Training & Development')
@section('Style')

<link rel="stylesheet" href="{{asset('css/coursedetail.css')}}">

@endsection


@section('Content')

<div class = "d-flex flex-direction-row">
    <a class = "see nav-link" href = "{{route('tnd')}}" >Go back</a>
</div>

<div class = "Container">

    <div class = "courseContainer">

            <div class="profileCard" onclick = "showDetails(this)">
                <div class="cardContainer">
                    <img src="{{ asset($course->image) }}" alt="" style="width: 100%; height: 12vw; margin-bottom: 10px;">
                    <h6>{{ $course->judul }}</h6>
                </div>
            </div>

            <div style = "text-align = justify;">
                    <h5>{{ $course->judul }}</h5>
                    <h6>{{$course ->lecturer }}</h1>
                    <p>{{$course ->description}}</p>
            </div>

                                
            <div class = "courseOutline" id ="courseOutline">
                    <h6>Course Outline</h6>
                        <?php
                        $outline = $course->outline;
                        $outline = str_replace(['<ul>', '</ul>', '<li>', '</li>'], '', $outline);
                        $items = explode('</li>', $outline);
                        foreach ($items as &$item) {
                            $item = str_replace('<li>', '', $item);
                        }
                        // Periksa apakah ada item sebelum menampilkan elemen ol
                        if (!empty($items)) {
                            $olHTML = '<ol><li> ' . implode('</li><li> ', $items) . '</li></ol>';
                            echo "<h6>${olHTML}</h6>";
                        } else {
                            echo "<h6>No outline available.</h6>";
                        }
                        ?>
            </div>
            

    </div>

</div>


<hr>

<div class = "d-flex justify-content-center" style = "margin-bottom : 20px;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6WgvzCU3TI8?si=_1GNvohgLtI0Mf2i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>



@endsection