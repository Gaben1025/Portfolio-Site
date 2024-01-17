@extends('layouts.app')
@section('seo-meta')
<title>Arthur Kozhevnik - Software Engineer</title>
@endsection

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<!-- Intro -->
<div class="row mt-5 py-5">
    <div class="col-3"></div>
    <div class="col-6 border border-white">
        <h1 class="text-center"><b>About Me</b></h1>
        <h5 class="py-3 text-body text-center">I'm a Software Engineer with a focus on full-stack development, actively contributing to user-friendly website creation. My expertise spans front-end and back-end aspects, showcasing versatility in various web development technologies. Proficient in designing responsive interfaces, optimizing database management, and implementing automated data processes, my passion lies in programming and creating efficient solutions.</h5>
    </div>
    <div class="col-3"></div>
</div>
<!-- Experience -->
<div id="experience" class="row py-5">
    <div class="col-2"></div>
    <div class="col-8">
        <!-- Experience -->
        <h1 class="text-center"><b>Professional Experience</b></h1>
        <div id="accordionWork" class="accordion pt-3">
            <!-- Reed Tech Solution -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary">Full Stack Engineer @ Reed Tech Solution</h5>
                            </div>
                            <div class="col-12">
                                <small class="text-success"><i>November 2023 - Present</i></small>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">East Stroudsburg, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://www.reedtechsol.com/" target="_blank">reedtechsol.com</a></small>
                                <p class="pt-3">Developed and launched a user-friendly website with a visually appealing design, implementing both front-end and back-end features. Utilized Laravel migrations for efficient database management and automated data population with PHP scripts. Managed freelancers for research and advertising tasks, ensuring timely project completion.</p>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Laravel</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">PHP</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Javascript</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">HTML5</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">CSS3</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">mySQL</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">ChatGPT</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Cloudflare</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">DigitalOcean</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <a href="https://www.reedtechsol.com/" target="_blank"><img src="img/rts.png" alt="RTS Logo" class="img-fluid p-0"></a>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
            <!-- DreamLine Shower -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary">IT Specialist Intern @ DreamLine</h5>
                            </div>
                            <div class="col-12">
                                <small class="text-success"><i>Summer 2017 & Summer 2018</i></small>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">Warminster, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://dreamline.com/" target="_blank">dreamline.com</a></small>
                                <p class="pt-3">Built a web scraping bot to automate the transfer of information between internal inventory spreadsheets and online supplier portals. Reviewed the IT departments work through Basecamp and Jira ensuring work done was correct.</p>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Python</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Selenium Webdriver</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">MS Excel</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <a href="https://dreamline.com/" target="_blank"><img src="img/dreamline-logo.png" alt="Dreamline Logo" class="img-fluid p-0"></a>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
            <!-- Ann Kids -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary">Assistant Teacher @ Ann Kids</h5>
                            </div>
                            <div class="col-12">
                                <small class="text-success"><i>May 2018 - November 2023</i></small>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">Philadelphia, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://www.annkids.com/" target="_blank">annkids.com</a></small>
                                <p class="pt-3">Worked with students after school to assist with classwork and homework. Helped teach subjects like math, english and science.</p>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <a href="https://www.annkids.com/" target="_blank"><img src="img/ann-kids-logo.jpg" alt="Ann Kids Logo" class="img-fluid p-0"></a>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<!-- Projects -->
<div id="projects">
    <h1 class="text-center pt-5"><b>Projects</b></h1>
    <div class="row pt-4">
        <div class="col-md-4">
            <div class="card mb-3">
                <h4 class="card-header">Towing Laws Site</h4>
                <a href="https://www.towinglaws.com/" target="_blank"><img src="img/towing-laws.png" class="d-block mx-auto img-fluid"></a>
                <div class="card-body">
                    <div id="accordionTowingLaws" class="accordion"> <!-- Unique ID for the accordion -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTowingLaws">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTowingLaws" aria-expanded="false" aria-controls="collapseTowingLaws">
                                    <h6 class="card-subtitle text-muted">Full stack development on Towinglaws.com</h6>
                                </button>
                            </h2>
                            <div id="collapseTowingLaws" class="accordion-collapse collapse" aria-labelledby="headingTowingLaws" data-bs-parent="#accordionTowingLaws">
                                <div class="accordion-body">
                                    <p class="card-text">TowingLaws.com empowers users by offering accessible information on predatory towing laws. With user-friendly interfaces, it provides up-to-date details to make towing laws transparent and save consumers time on local and state legislation.</p>
                                    <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">PHP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <a href="https://www.towinglaws.com/" target="_blank" class="card-link">Towinglaws.com</a>
                </div>
                <div class="card-footer text-muted">
                    @ Reed Tech Solutions
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <h4 class="card-header">Temple Course Helper</h4>
                <a href="https://github.com/cis3296s22/prj-05-tucoursehelper" target="_blank"><img src="img/temple-logo.jpg" class="d-block mx-auto img-fluid"></a>
                <div class="card-body">
                    <div id="accordionCourseHelper" class="accordion"> <!-- Unique ID for the accordion -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCourseHelper">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourseHelper" aria-expanded="false" aria-controls="collapseCourseHelper">
                                    <h6 class="card-subtitle text-muted">Webscraping bot, database and GUI development</h6>
                                </button>
                            </h2>
                            <div id="collapseCourseHelper" class="accordion-collapse collapse" aria-labelledby="headingCourseHelper" data-bs-parent="#accordionCourseHelper">
                                <div class="accordion-body">
                                    <p class="card-text">Temple Course Helper retrieves course details and teacher ratings from Temple University's website and Rate My Professor. It stores the information, including student ID, in a database. Users can view and opt to receive course-related details on screen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <a href="https://github.com/cis3296s22/prj-05-tucoursehelper" target="_blank" class="card-link">Github</a>
                </div>
                <div class="card-footer text-muted">
                    @ Temple University
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <h4 class="card-header">Sokroban Game</h4>
                <a href="https://capstone-projects-2022-fall.github.io/project-sokroban/" target="_blank"><img src="img/sokroban.png" class="d-block mx-auto img-fluid"></a>
                <div class="card-body">
                    <div id="accordionSokroban" class="accordion"> <!-- Unique ID for the accordion -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSokroban">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSokroban" aria-expanded="false" aria-controls="collapseSokroban">
                                    <h6 class="card-subtitle text-muted">Game development with Unity Engine</h6>
                                </button>
                            </h2>
                            <div id="collapseSokroban" class="accordion-collapse collapse" aria-labelledby="headingSokroban" data-bs-parent="#accordionSokroban">
                                <div class="accordion-body">
                                    <p class="card-text">Sokroban is a fun puzzle game where you push boxes onto targets in single-player mode. In multiplayer, you can play with friends or challenge others online, making it a social experience. The game is easy to learn and easy to play.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <a href="https://capstone-projects-2022-fall.github.io/project-sokroban/" target="_blank" class="card-link">Github</a>
                    <a href="https://play.unity.com/mg/other/webgl-builds-281781" target="_blank" class="card-link">Unity Play</a>
                </div>
                <div class="card-footer text-muted">
                    @ Temple University
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Certificates -->
<div id="certificates" class="row py-5">
    <div class="col-2"></div>
    <div class="col-8">
        <h1 class="text-center pt-5"><b>Certificates</b></h1>
        <div id="carouselCertificateFade" class="carousel slide carousel-fade pt-2">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="https://www.credly.com/earner/earned/badge/e034223f-8f97-47e5-8c85-83f09a9ffed8">
                    <img src="img/pcep-img.png" target="_blank" class="d-block mx-auto img-fluid" alt="First slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://www.parchment.com/u/award/10c554c5a8c4b3498950c08f2f805aba">
                    <img src="img/diploma.png" target="_blank" class="d-block mx-auto img-fluid" alt="Second slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://www.credly.com/earner/earned/badge/06a3718c-72a3-4924-9dfe-d90d4ecb07f3">
                    <img src="img/ms-office.png" target="_blank" class="d-block mx-auto img-fluid" alt="Third slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://forage-uploads-prod.s3.amazonaws.com/completion-certificates/J.P.%20Morgan/R5iK7HMxJGBgaSbvk_J.P.%20Morgan_ntSfTA6dag2pRsyrm_1694534560705_completion_certificate.pdf">
                    <img src="img/forage-img.png" target="_blank" class="d-block mx-auto img-fluid" alt="Fourth slide">
                </a>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCertificateFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCertificateFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-2"></div>
</div>


@endsection

@section('footer')
@include('includes.footer')
@endsection