@extends('authtemplate')

@section('Title', 'Training & Development')
@section('Style')

<link rel="stylesheet" href="{{asset('css/tnd.css')}}">

@endsection


@section('Content')

<h1>My Courses</h1>

<div class = "d-flex flex-direction-row">
    <div class="bar"  style = "margin-right: 10vh;"></div>
    <a class = "see nav-link" href = "{{route('tnd')}}" >Go back</a>
</div>

<div class = "Container">

    <div class = "courseContainer">

        @forelse($courses as $c)
            <div class="profileCard" onclick = "showDetails(this)">
                <div class="cardContainer">
                    <img src="{{ asset($c->image) }}" alt="" style="width: 100%; height: 12vw; margin-bottom: 10px;">
                    <h6>{{ $c->judul }}</h6>

                    <a href="{{route('course.detail', ['courseId' => $c->id])}}">
                        <button type = "button" class = "btn btn-primary">Continue</button>
                    </a>

                    <h1>{{$c ->lecturer }}</h1>
                    <h2>{{$c ->description}}</h2>
                    
                    <div class = "courseOutline" id ="courseOutline">
                        <?php
                        $outline = $c->outline;
                        $outline = str_replace(['<ul>', '</ul>', '<li>', '</li>'], '', $outline);
                        $items = explode('</li>', $outline);
                        foreach ($items as &$item) {
                            $item = str_replace('<li>', '', $item);
                        }
                        // Periksa apakah ada item sebelum menampilkan elemen ol
                        if (!empty($items)) {
                            $olHTML = '<ol><li> ' . implode('</li><li> ', $items) . '</li></ol>';
                            echo "<h3>${olHTML}</h3>";
                        } else {
                            echo "<h3>No outline available.</h3>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        @empty
            <p>No Courses yet.</p>
        @endforelse

    </div>

    <div class = "infoContainer">

        <div class = "atas">
            <div class = "judul" id ="judul">
                <br>
            </div>

            <div class = "detail" id ="detail">
                <h4>Enrolled</h4>
                <br>
                <h4>What You'll Learn</h4>
                <br>

                    <div class = "descriptions" id = "descriptions" style = "width:95%;">
                        <h5>Details</h5>   
                        <div id = "desc">

                        </div>
                    </div>
                
                    <div class = "lecturer" id = "lecturer" style = "width:95%;">
                        <h5>Lecturer</h5>   
                        <div id = "lec">
                            
                        </div>
                    </div>

                    <div class = "outline" id = "outline" style = "margin-bottom: 20px; width:95%;">
                        <h5>Course Outline</h5>   
                        <div id = "outs">
                            
                        </div>
                    </div>
                

            </div>
            

        </div>

    </div>

</div>

<script>
    function showDetails(element){
        var judulElement = document.getElementById("judul");
        var detailElement = document.getElementById("detail");

        judulElement.style.display = "flex";
        detailElement.style.display = "flex";

        var judul = element.querySelector('h6').innerText;
        console.log(judul);
        judulElement.innerHTML = `<h3>${judul}</h3>`;

        var detail = element.querySelector('h2').innerText;
        console.log(detail);

        var descriptions = document.getElementById("desc");
        descriptions.innerHTML = `<p>${detail}</p>`;

        var name = element.querySelector('h1').innerText;
        console.log(detail);

        var lecturer = document.getElementById("lec");
        lec.innerHTML = `<p>${name}</p>`;

        var outlines = element.querySelector('.courseOutline h3').innerText;
        console.log(outlines);

        var outs = document.getElementById("outs");
        outs.innerHTML = `<p>${outlines}</p>`;
    }
</script>

@endsection