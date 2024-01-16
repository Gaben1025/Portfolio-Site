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
        <div class="accordion" id="accordionWork">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary">Full Stack Engineer @ Reed Tech Solution</h5>
                            </div>
                            <div class="col-12">
                                <small class="text-success"><i>Nov 2023 - Present</i></small>
                            </div>
                        </div>
                    </button>
                </h2>
                <!-- Reed Tech Solution -->
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-10">
                                <i class="fa-solid fa-location-dot"></i><small class="ps-2">East Stroudsburg, PA</small>
                                <i class="fa-solid fa-share ps-4"></i><small class="ps-2"><a href="https://www.reedtechsol.com/">reedtechsol.com</a></small>
                                <p class="pt-3">Developed and launched a user-friendly website with a visually appealing design, implementing both front-end and back-end features. Utilized Laravel migrations for efficient database management and automated data population with PHP scripts. Managed freelancers for research and advertising tasks, ensuring timely project completion.</p>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">Laravel</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">PHP</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">Javascript</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">HTML5</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">CSS3</span>
                                <span class="badge rounded-pill bg-info text-dark fs-6 me-2">mySQL</span>

                            </div>

                            <div class="col-2 d-flex align-items-center">
                                <img src="rts.png" alt="RTS Logo" class="img-fluid p-0">
                            </div>
                        </div> 
                        <div class="row pt-2">
                        </div>             
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

@endsection

@section('footer')
@include('includes.footer')
@endsection