@extends('layouts.app')
@section('seo-meta')
<title>Arthur Kozhevnik - Software Engineer</title>
@endsection

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <h1 class="text-center"><b>Professional Experience</b></h1>
        <!-- Experience -->
        <div class="accordion" id="accordionWork">
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
                <!-- Reed Tech Solution -->
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">East Stroudsburg, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://www.reedtechsol.com/">reedtechsol.com</a></small>
                                <p class="pt-3">Developed and launched a user-friendly website with a visually appealing design, implementing both front-end and back-end features. Utilized Laravel migrations for efficient database management and automated data population with PHP scripts. Managed freelancers for research and advertising tasks, ensuring timely project completion.</p>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Laravel</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">PHP</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Javascript</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">HTML5</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">CSS3</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">mySQL</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Cloudflare</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Digitalocean</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <img src="rts.png" alt="RTS Logo" class="img-fluid p-0">
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
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
                <!-- DreamLine Shower -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">Warminster, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://dreamline.com/">dreamline.com</a></small>
                                <p class="pt-3">Built a web scraping bot to automate the transfer of information between internal inventory spreadsheets and online supplier portals. Reviewed the IT departments work through Basecamp and Jira ensuring work done was correct.</p>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Python</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Selenium Webdriver</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">MS Excel</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <img src="dreamline-logo.png" alt="Dreamline Logo" class="img-fluid p-0">
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
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
                <!-- Ann Kids -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">Philadelphia, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://www.annkids.com/">annkids.com</a></small>
                                <p class="pt-3">Worked with students after school to assist with classwork and homework. Helped teach subjects like math, english and science.</p>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <img src="ann-kids-logo.jpg" alt="Ann Kids Logo" class="img-fluid p-0">
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="row pt-5">
        <div class="col-md-6">
            <h5 class="pt-3"><a href="mailto:kozhevnik1025@gmail.com" target="_top"><i class="fa-solid fa-envelope fa-lg"></i> kozhevnik1025@gmail.com</a></h5>
            <h5 class="pt-3"><a href="https://www.linkedin.com/in/arthur-kozhevnik-09863b175/"><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn</a></h5>
            <h5 class="pt-3"><a href="https://github.com/Gaben1025"><i class="fa-brands fa-github fa-lg"></i> Github</a></h5>
        </div>
        <div class="col-md-6">  
        </div>
    </div>
    <div class="col-2"></div>
</div>

@endsection

@section('footer')
@include('includes.footer')
@endsection