@extends('layouts.HeaderFooter')

@section('content')

<!-- Modal -->
<div class="modal fade" id="assignPointsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignPointsLabel">Assign Points</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action ="{{ route('lecturer.assignPoints', $studentNames) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="studentName">Student name:</label>
                        <select id="studentName" name="studentName" class="form-control custom-select p-0">
                            <option value="Select Student">Select Student</option>
                            @foreach ($studentNames as $studentName)
                                <option value="{{ $studentName }}">{{ $studentName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="points">Points to give:</label>
                        <input id="points" type="text" name="points" class="form-control" placeholder="Points" required="Please fill in points">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="add-points" class="btn btn-primary">Add Points</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="mdk-header-layout__content page-content pb-0">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Submissions</h1>
            </div>
            <a href="#" class="btn btn-outline-white" data-toggle="modal" data-target="#assignPointsModal">Assign Points</a>
        </div>
    </div>
    <div class= "container page__container">
        <div class="table responsive" data-toggle="lists" data-lists-values='["studentName"]'>
            <div class="search-form search-form--light mb-3">
                <input type="text" class="form-control search" placeholder="Search">
                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
            </div>
            <table class= "table table-flush">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Submission File</th>
                        <th>Submitted at</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($submissionData as $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class = "studentName">{{ $row->fullName }}</td>
                            <td>{{ $row->studentID }}</td>
                            <td>{{ $row->submissionFile }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td><a href="{{ route('lecturer.downloadSubmissions', $row->submissionFile) }}" class="btn btn-primary btn-sm">Download Submission</a></td>
                        </tr>
                    @empty
                        <h4 class="flex m-0">No submissions yet</h4>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script>
        $(document).ready(function() {

            $('#add-points').click(function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Points have been added',
                    showConfirmButton: false,
                    timer: 1600
                })

            });
        });
    </script>


@endsection