@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Missions</h1>
            </div>
        </div>
    </div>
    <div class="container page__container page-section">
        <div class="mb-heading d-flex align-items-center">
            <div class ="row">
                <div class = "col-sm">
                    <h4 class="flex m-0">Choose difficulty:</h4>
                </div>
                <div class = "col-sm p-0">
                    <div class="form-group">
                        <select id="custom-select" class="form-control custom-select p-0">
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course.html" class="js-image" data-position="">
                        <img src="assets/images/impersonation2.png" alt="course" style="width:200px; height:200px">
                        <span class="overlay__content">
                            <span class="overlay__action d-flex flex-column text-center">
                                Mission Instruction
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course.html">Mission 1</a>
                                    <span class="badge badge-success">Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <p class="my-16pt text-black-70">Your mission is to find out which lecturer is a cat lover.</p>
                    <div class="row align-items-center">
                        <div class="col text-right">
                            <a href="instructor-edit-course.html" class="btn btn-primary">Submit Findings</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course.html" class="js-image" data-position="">
                        <img src="assets/images/impersonation2.png" alt="course" style="width:200px; height:200px">
                        <span class="overlay__content">
                            <span class="overlay__action d-flex flex-column text-center">
                                Mission Instruction
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course.html">Mission 2</a>
                                    <span class="badge badge-accent">Taken</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <p class="my-16pt text-black-70">Your mission is to find out which lecturer is a cat lover.</p>
                    <div class="row align-items-center">
                        <div class="col text-right">
                            <a href="instructor-edit-course.html" class="btn btn-primary">Submit Findings</a>
                        </div>
                    </div>

                </div>

            </div>

            

        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center pagination-sm">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                    <span>Prev</span>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#" aria-label="1">
                    <span>1</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="1">
                    <span>2</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span>Next</span>
                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection