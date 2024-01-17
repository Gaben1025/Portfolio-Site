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
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">ChatGPT</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">Cloudflare</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2 my-1">DigitalOcean</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <img src="img/rts.png" alt="RTS Logo" class="img-fluid p-0">
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
                                <img src="img/dreamline-logo.png" alt="Dreamline Logo" class="img-fluid p-0">
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
                                <img src="img/ann-kids-logo.jpg" alt="Ann Kids Logo" class="img-fluid p-0">
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
        <!-- Certificates -->
        <h1 class="text-center pt-5"><b>Certificates</b></h1>
        <div id="carouselCertificateFade" class="carousel slide carousel-fade pt-2">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="https://www.credly.com/earner/earned/badge/e034223f-8f97-47e5-8c85-83f09a9ffed8">
                    <img src="img/pcep-img.png" class="d-block mx-auto img-fluid" alt="First slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://www.parchment.com/u/award/10c554c5a8c4b3498950c08f2f805aba">
                    <img src="img/diploma.png" class="d-block mx-auto img-fluid" alt="Second slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://www.credly.com/earner/earned/badge/06a3718c-72a3-4924-9dfe-d90d4ecb07f3">
                    <img src="img/ms-office.png" class="d-block mx-auto img-fluid" alt="Third slide">
                </a>
                </div>
                <div class="carousel-item">
                <a href="https://forage-uploads-prod.s3.amazonaws.com/completion-certificates/J.P.%20Morgan/R5iK7HMxJGBgaSbvk_J.P.%20Morgan_ntSfTA6dag2pRsyrm_1694534560705_completion_certificate.pdf">
                    <img src="img/forage-img.png" class="d-block mx-auto img-fluid" alt="Fourth slide">
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
    <!-- Contact -->
    <div class="text-center">
        <h5 class="pt-3"><a href="mailto:kozhevnik1025@gmail.com"><i class="fa-solid fa-envelope fa-lg"></i> Kozhevnik1025@gmail.com</a></h5>
        <h5 class="pt-3"><a href="https://www.linkedin.com/in/arthur-kozhevnik-09863b175/"><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn</a></h5>
        <h5 class="pt-3"><a href="https://github.com/Gaben1025"><i class="fa-brands fa-github fa-lg"></i> Github</a></h5>
        <h5 class="pt-3"><a href="resume.pdf" target="_blank"><i class="fa-solid fa-download fa-lg"></i> Resume</a></h5>

    </div>
    <div class="col-2"></div>
</div>

@endsection

@section('footer')
@include('includes.footer')
@endsection