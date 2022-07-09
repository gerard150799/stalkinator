@extends('layouts.HeaderFooter')

@section('content')
@include('sweetalert::alert')

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit Your Findings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action ="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="custom-file">
                            <input type="file" id="file" name="file" class="custom-file-input">
                            <label for="file" class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
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
                <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40"  data-trigger="click">
                    <img src="assets/images/impersonation2.png" alt="course" style="width:250px; height:200px">
                        <span class="overlay__content">
                            <span class="overlay__action d-flex flex-column text-center">
                                {{ $mission->mission_instruction}}
                            </span>
                        </span>
                    </img>
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
                                    @if (Auth:: user()->hasRole('student'))
                                        <a href="{{ route('student.submitFindings', $mission) }}" class="btn btn-primary btn-sm">Submit Findings</a>
                                        {{-- @if ($submissionStatus->status == 'Submitted')
                                            <span class="badge badge-success">{{ $submissionStatus->status }}</span>
                                        @endif --}}
                                    @elseif (Auth:: user()->hasRole('lecturer'))
                                        <a href="{{ route('lecturer.editMission', $mission) }}" class="btn btn-primary">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="{{ route('lecturer.deleteMission', [$mission->id]) }}" class="btn btn-accent del">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="popoverContainer d-none">
                    <p class="my-16pt text-black-70">{{ $mission->mission_instruction}}</p>
                    <div class="row align-items-center">
                        <div class="col text-right">
                            @if (Auth:: user()->hasRole('student'))
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                </div>
                            </div>
                                <a href="#" class="btn btn-primary" input ="file">Submit Findings</a>
                            @endif
                        </div>
                        @if (Auth:: user()->hasRole('lecturer'))
                            <a href="{{ route('lecturer.editMission', $mission) }}" class="btn btn-primary">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="{{ route('lecturer.deleteMission', [$mission->id]) }}" class="btn btn-accent del">
                                <i class="material-icons">delete</i>
                            </a>
                        @endif
                    </div>

                </div> -->
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

@section('script')
    <script>
        $(document).ready(function () {
            $('.del').click(function (e) { 
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            });
        });    
    </script>
@endsection