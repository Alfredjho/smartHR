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
            <a class="nav-link active" aria-current="page" href="#Home">FAQ</a>
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
        <div class="rounded-0 card" style="width: 15rem;">
            <img src="./img/iconKMC.png" class="card-img-top" alt="KMC">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">KNOWLEDGE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem;">
            <img src="./img/iconTnD.png" class="card-img-top" alt="TND">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">TRAINING AND DEVELOPMENT</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem;">
            <img src="./img/iconForum.png" class="card-img-top" alt="FORUM">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">FORUM AND DISCUSSIONS</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem;">
            <img src="./img/iconSchedule.png" class="card-img-top" alt="SCHEDULE">
            <div class="card-body" style = "background-color: #395E78">
                <p class="text-center card-text fw-bold" style = "color : white">SCHEDULE MANAGEMENT CENTER</p>
            </div>
        </div>

        <div class="rounded-0 card" style="width: 15rem;">
            <img src="./img/iconDatabase.png" class="card-img-top" alt="DATABASE">
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>