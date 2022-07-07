@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content pb-0">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Submissions</h1>
            </div>
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