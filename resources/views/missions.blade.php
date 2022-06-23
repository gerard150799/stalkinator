@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Missions</h1>
            </div>
            @if (Auth:: user()->hasRole('lecturer'))
                <a href="{{ route('missions.addmissions') }}" class="btn btn-outline-white">Add Mission</a>
            @endif
        </div>
    </div>
    <div class="container page__container page-section">
        <div class="mb-heading d-flex align-items-center">
            <div class ="row w-100">
                <div class = "col-sm-4 p-0">
                    <h4 class="flex m-0">Choose difficulty:</h4>
                </div>
                <div class = "col-sm-4 p-0">
                    <form  action="{{ 'missions' }}" name="chooseDifficulty" method="GET">
                        @csrf
                        @method('GET')
                        <div class="form-group">
                            <select id="difficulty" name="difficulty" class="form-control custom-select p-0">
                                <option value="Select Difficulty">Select Difficulty</option>
                                @foreach ($difficulties as $difficulty)
                                    <option value="{{ $difficulty }}">{{ $difficulty }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class = "col-sm-4 p-0">
                            <button type ="submit" class ="btn btn-primary">Choose</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
        <div class="row">
            @forelse ($missions as $mission )
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
                                    <a class="card-title mb-4pt" href="#">Mission {{ $mission->id }}</a>
                                    <span class="badge badge-success">Available</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <p class="my-16pt text-black-70">{{ $mission->mission_instruction}}</p>
                    <div class="row align-items-center">
                        <div class="col text-right">
                            <a href="instructor-edit-course.html" class="btn btn-primary">Submit Findings</a>
                        </div>
                        @if (Auth:: user()->hasRole('lecturer'))
                            <a href="{{ route('missions.addmissions') }}" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                        @endif
                    </div>

                </div>
            </div>
            @empty
                <h4 class="flex m-0">No mission has been added. Stay tuned agent!</h4>
            @endforelse
            
        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center pagination-sm">
            {{$missions->links()}}
            <!-- <li class="page-item disabled">
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
            </li> -->
        </ul>
    </div>
</div>

@endsection