@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content pb-0">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Leaderboard</h1>
            </div>
        </div>
    </div>
    <div class= "container page__container">
        <div class="table responsive" data-toggle="lists" data-lists-values='["studentName"]'>
            <table class= "table table-flush">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Student Name</th>
                        <th>Points Obtained</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($leaderboardData as $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->fullName }}</td>
                            <td>{{ $row->points }}</td>
                        </tr>
                    @empty
                        <h4 class="flex m-0">No one's being a stalker at the moment</h4>
                    @endforelse
                </tbody>
            </table>
        </div>
          
    </div>
</div>

@endsection