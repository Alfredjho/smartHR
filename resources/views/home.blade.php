<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smartHR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>

<section id="Home">
    <nav class="navbar fixed-top navbar-expand-lg bg-light-subtle" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SmartHR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#AboutUs">About Us</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#FAQ">FAQ</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="main-interface">


        <div class ="imgMain">
            
        </div>

        <div class="main-container">

            <div class ="main-content">
                
                <div class="text-nowrap" style="width: 46.5vh; background-color: #395E78">
                     <p class="text-start fw-bold" style ="font-size:8vh; color:white">IMPROVING</p>
                </div>

                <p class="text-start fw-bold" style ="font-size:8vh"> HR QUALITIES.</p>

                <br>
                <p class="text-start fs-5 fw-light" style="color:grey">INTEGRATION | COLLABORATION | POWERFUL</p>
                <br>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control rounded-0 " id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-0" id="exampleInputPassword1">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary rounded-0 btn-lg">LOGIN</button>
                </form>
            </div>

        </div>

    </div>

</section>


<section id="AboutUs">

    <div class = "about-interface">
        <p class="text-start fw-bold fs-1" style = "color: #565656"> WHAT IS SmartHR ?</p>
    </div>

    <div class = "about-card">
        <div class="rounded-0 card" style="width: 15rem; border: 0;">
            <img src="./img/iconKMC.png" class="card-img-top" alt="KMC" style = "padding: 5vh">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">KNOWLEDGE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem; border: 0;">
            <img src="./img/iconTnD.png" class="card-img-top" alt="TND" style = "padding: 5vh">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">TRAINING AND DEVELOPMENT</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem; border: 0;">
            <img src="./img/iconForum.png" class="card-img-top" alt="FORUM" style = "padding: 5vh">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">FORUM AND DISCUSSIONS</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem; border: 0;">
            <img src="./img/iconSchedule.png" class="card-img-top" alt="SCHEDULE" style = "padding: 5vh">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">SCHEDULE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem; border: 0;">
            <img src="./img/iconDatabase.png" class="card-img-top" alt="DATABASE" style = "padding: 5vh">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">COMPANY EMPLOYEE DATABASE</p>
            </div>
        </div>

    </div>

    <div class = "personalValue">

    <div class = "vision" >
        <div class = "visionTitle">
                <p class="pe-4 text-start fw-bold" style ="font-size:8vh; color: #565656">OUR &nbsp; </p>
                <div class="text-nowrap" style="width: 27vh; height: 12.5vh; background-color: #7D4E51">
                    <p class="text-start fw-bold" style ="font-size:8vh; color:white">VISION</p>
                </div>
        </div>

        <img src="./img/vision.png" class="img-fluid" alt="vision">
    </div>
        


    <div class = "mission" >
        <div class = "missionTitle">
            <p class="pe-4 text-start fw-bold" style ="font-size:8vh; color: #565656">OUR &nbsp; </p>
            <div class="text-nowrap" style="width: 34vh; background-color: #6B9B67">
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

        <div class="card" style="width: 50rem;">

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

<section>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-2 mb-3">
                    <h5>Customer Services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Email: SmartHR@gmail.com</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">WhatsApp: (+62) 858 8512 8972</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Address: Jl. Pegangsaan Timur No. 56</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Working Hours: 9 AM - 5 PM</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Support</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Maintenance Support</a></li>
                    </ul>
                </div>

                <div class="col-md-5 mb-3">
                    <h5>Powered By</h5>
                    <h1>SmartHR</h1>
                    <p>© 2023 Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>