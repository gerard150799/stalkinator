@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content pb-0">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Missions</h1>
            </div>
        </div>
    </div>
    <div class="bg-white py-32pt py-lg-64pt">
        <div class="container page__container">
            <div class="row align-items-center mb-8pt">
                <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40"  data-toggle="popover" data-trigger="click">	
                    <a href="" class="js-image" data-position="">
                        <img src="assets/images/Eo_circle_blue_number-1.svg.png" alt="mission 1" width="200" height ="200">
                        <span class="overlay__content">
                            <span class="overlay__action d-flex flex-column text-center">
                                <!--<i class="material-icons">play_circle_outline</i>
                                <small>Preview course</small>-->
                            </span>
                        </span>
                    </a>
                    <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title" href="course.html">Mission 1</a>
                                    <!--<small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>-->
                                </div>
                                <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Learn Angular fundamentals</div>
                                    <p class="lh-1 mb-0">
                                        <span class="text-black-50 small">with</span>
                                        <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                    </p>
                                </div>
                            </div>
                            <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
                            <div class="mb-16pt">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection