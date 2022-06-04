@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content ">
            <div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0" data-effects="parallax-background blend-background">
                <div class="mdk-box__bg">
                    <div class="mdk-box__bg-front" style="{{ asset('assets/images/social engineer.jpg') }}"></div>
                </div>
                <div class="mdk-box__content">
                    <div class="container page__container py-64pt py-md-112pt">
                        <div class="row align-items-center text-center text-md-left">
                            <div class="col-md-6 col-lg-5 order-1 order-md-0">
                                <h1 class="text-white">Learn to Social Engineer</span></h1>
                                <p class="lead mb-32pt mb-lg-48pt text-white">A mission-based platform to promote social engineering in education level</p>
                                <a href="" class="btn btn-lg btn-white btn--raised mb-16pt">Start Playing</a>
                            </div>
                            <!-- <div class="col-md-6 col-lg-7 order-0 order-md-1 text-center mb-32pt mb-md-0">
                                <img src="assets/images/macbook.png" alt="macbook" class="home-macbook">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt ">
                <div class="container page__container">
                    <div class="row align-items-center">
                        <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">subscriptions</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Wide number of  missions to choose</strong></p>
                                <p class="text-black-70 mb-0">Test your skill</p>
                            </div>
                        </div>
                        <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">verified_user</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Missions added by Lecturers</strong></p>
                                <p class="text-black-70 mb-0">Mission situation are curated by lecturers which gives a much more challenging feel</p>
                            </div>
                        </div>
                        <div class="d-flex col-md align-items-center">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">update</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Leaderboard for bragging rigts</strong></p>
                                <p class="text-black-70 mb-0">Every mission submission award you points</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section">
                <div class="container page__container">
                    <div class="page-headline text-center">
                        <h2>Feedback</h2>
                        <p class="lead measure-lead mx-auto text-black-70">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
                    </div>

                    <div class="position-relative carousel-card">
                        <div class="row d-block js-mdk-carousel" id="carousel-feedback">
                            <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-feedback" role="button" data-slide="next">
                                <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                <span class="sr-only">Next</span>
                            </a>
                            <div class="mdk-carousel__content">

                                <div class="col-12 col-md-6">
                                    <div class="card card--elevated card-body">
                                        <blockquote class="mb-0">
                                            <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/people/110/guy-1.jpg" width="40" alt="avatar" class="rounded-circle">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <p class="mb-0"><a href="" class="text-body"><strong>Umberto Kass</strong></a></p>
                                                    <div class="rating">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card card--elevated card-body">
                                        <blockquote class="mb-0">
                                            <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/people/110/guy-2.jpg" width="40" alt="avatar" class="rounded-circle">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <p class="mb-0"><a href="" class="text-body"><strong>Umberto Kass</strong></a></p>
                                                    <div class="rating">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
@endsection
