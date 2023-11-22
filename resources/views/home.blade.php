@extends('template')
@section('Title', 'SmartHR')
@section('Style')
  <link rel="stylesheet" href="home.css">
@endsection

@section('Content')

<section id="Home">
    
    <div class="main-interface">


        <div class ="imgMain">
            
        </div>

        <div class="main-container">

            <div class ="main-content">
                
                <div class="text-nowrap" style="width: fit-content; background-color: #395E78" id = "contentMain1">
                     <p class="text-start fw-bold fs-1" style ="color:white">IMPROVING</p>
                </div>

                <p class="text-start fw-bold fs-1"  id = "contentMain2"> HR QUALITIES.</p>

                <br>
                <p class="text-start fs-5 fw-light" style="color:grey" id = "contentMain3" >INTEGRATION | COLLABORATION | POWERFUL</p>
                
                @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
                @endif
                
                <br>
                <form method="POST" action="{{ route('login.post') }}">

                    <div class="mb-3">

                    @csrf
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name ="email" class="form-control rounded-1 " id="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name = "password" class="form-control rounded-1" id="password" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary rounded-1 btn-lg">LOGIN</button>
                </form>
            </div>

        </div>

    </div>

</section>


<section id="AboutUs">

    <div class = "about-interface">
        <p class="text-start fw-bold fs-1" style = "color: #565656"> WHAT IS SmartHR ?</p>
    </div>

    <div class = "about-card" style = "width: 100%">
        <div class="card rounded-0">
            <img src="./img/iconKMC.png" class="card-img-top" alt="KMC" style = "padding: 7.5%">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold fs-6" style = "color : white">KNOWLEDGE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card">
            <img src="./img/iconTnD.png" class="card-img-top" alt="TND" style = "padding: 7.5%">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold fs-6" style = "color : white">TRAINING AND DEVELOPMENT</p>
            </div>
        </div>

        <div class="rounded-0 card">
            <img src="./img/iconForum.png" class="card-img-top" alt="FORUM" style = "padding: 5%">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold fs-6" style = "color : white">FORUM AND DISCUSSIONS</p>
            </div>
        </div>

        <div class="rounded-0 card">
            <img src="./img/iconSchedule.png" class="card-img-top" alt="SCHEDULE" style = "padding: 15%">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold fs-6" style = "color : white">SCHEDULE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card">
            <img src="./img/iconDatabase.png" class="card-img-top" alt="DATABASE" style = "padding: 17.5%">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold fs-6" style = "color : white">COMPANY EMPLOYEE DATABASE</p>
            </div>
        </div>

    </div>

    <div class = "personalValue">

    <div class = "vision" >
        <div class = "visionTitle">
                <p class="pe-4 text-start fw-bold" style ="font-size:8vh; color: #565656">OUR &nbsp; </p>
                <div class="text-nowrap" style="width: fit-content; height: auto; background-color: #7D4E51">
                    <p class="text-start fw-bold" style ="font-size:8vh; color:white">VISION</p>
                </div>
        </div>

        <img src="./img/vision.png" class="img-fluid" alt="vision">
    </div>
        


    <div class = "mission" >
        <div class = "missionTitle">
            <p class="pe-4 text-start fw-bold" style ="font-size:8vh; color: #565656">OUR &nbsp; </p>
            <div class="text-nowrap" style="width: fit-content; height: auto; background-color: #6B9B67">
                <p class="text-start fw-bold" style ="font-size:8vh; color:white">MISSION</p>
             </div>
        </div>

        <img src="./img/mission.png" class="img-fluid" alt="mission">
    </div>
        

    </div>

    <div class ="partner-container">
        <div class = "partner-interface">
            <p class="text-start fw-bold fs-1" style = "color: #565656"> WHO USES SmartHR ?</p>
        </div>

        <div class ="partner-box">
            <img src="./img/partners.png" class="img-fluid" alt="mission">
        </div>
    </div>
    
    

</section>

<section id = "FAQ">
    <div class = "FAQContainer">

        <div class = "FAQ-interface">
            <p class="text-start fw-bold fs-1" style = "color: #565656"> FREQUENTLY ASKED QUESTIONS</p>
        </div>

        <div class="card" style="width: fit-content;">

            <ul class="list-group list-group-flush">
                <div class="dropdown" >
                    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50rem;">
                        How to buy this product for my company?
                    </button>
                    <ul class="dropdown-menu" style="width: 50rem;">
                        <li><a class="dropdown-item"  style="width: 50rem;">Please contact our customer services to ask for more information regarding our product or to make a purchase plan. 
                        Our pricing and supports are available to see in the support page.</a></li>
                    </ul>
                </div>
            </ul>

            <ul class="list-group list-group-flush">
                <div class="dropdown" >
                    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50rem;">
                        How to register a new account?
                    </button>
                    <ul class="dropdown-menu" style="width: 50rem;">
                        <li><a class="dropdown-item"  style="width: 50rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
                        Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</a></li>
                    </ul>
                </div>
            </ul>

            <ul class="list-group list-group-flush">
                <div class="dropdown" >
                    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50rem;">
                        Can i make some personalized change for my company?
                    </button>
                    <ul class="dropdown-menu" style="width: 50rem;">
                        <li><a class="dropdown-item"  style="width: 50rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
                        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</a></li>
                    </ul>
                </div>
            </ul>

            <ul class="list-group list-group-flush">
                <div class="dropdown" >
                    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50rem;">
                        Does this product came with free maintenance?
                    </button>
                    <ul class="dropdown-menu" style="width: 50rem;">
                        <li><a class="dropdown-item"  style="width: 50rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
                        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</a></li>
                    </ul>
                </div>
            </ul>

            <ul class="list-group list-group-flush">
                <div class="dropdown" >
                    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50rem;">
                        How much storage does this product has?
                    </button>
                    <ul class="dropdown-menu" style="width: 50rem;">
                        <li><a class="dropdown-item"  style="width: 50rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
                        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</a></li>
                    </ul>
                </div>
            </ul>

        </div>

    </div>
</section>

<section id = "Footer">
    <div class="container mt-3">
        <footer class="d-flex justify-content-center">
       
                <div class="col-5 col-md-2 mb-3">
                    <h5>Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-4 mb-3">
                    <h5>Customer Services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Email: SmartHR@gmail.com</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">WhatsApp: (+62) 858 8512 8972</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Address: Jl. Pegangsaan Timur No. 56</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Working Hours: 9 AM - 5 PM</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-3 mb-3">
                    <h5>Support</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Maintenance Support</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-3 mb-3">
                    <h5>Powered By</h5>
                    <h1>SmartHR</h1>
                    <p>© 2023 Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</section>