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
                                    @if ($mission->difficulty == 'Easy' )
                                        <span class="badge badge-success">{{ $mission->difficulty }}</span>
                                    @elseif ($mission->difficulty == 'Medium')
                                        <span class="badge badge-primary">{{ $mission->difficulty }}</span>
                                    @elseif ($mission->difficulty == 'Hard')
                                        <span class="badge badge-accent">{{ $mission->difficulty }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <p class="my-16pt text-black-70">{{ $mission->mission_instruction}}</p>
                    <div class="row align-items-center">
                        <div class="col text-right">
                            @if (Auth:: user()->hasRole('student'))
                                <a href="instructor-edit-course.html" class="btn btn-primary">Submit Findings</a>
                            @endif
                        </div>
                        @if (Auth:: user()->hasRole('lecturer'))
                            <a href="{{ route('missions.addmissions') }}" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            <a href="#" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">delete</a>
                        @endif
                    </div>

                </div>
            </div>
            @empty
                @if (Auth:: user()->hasRole('student'))
                    <h4 class="flex m-0">No mission has been added. Stay tuned agent!</h4>
                @else
                    <h4 class="flex m-0">No mission has been added.</h4>
                @endif
            @endforelse
            
        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center pagination-sm">
            {{$missions->links()}}
        </ul>
    </div>
</div>

@endsection