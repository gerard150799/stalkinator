@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content pb-0">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt">Submit Findings</h1>
            </div>
        </div>
    </div>
    <div class= "container page__container">
        <h2 class="flex m-0">Mission Instruction: {{ $mission->mission_instruction }}</h2>
            <form action ="{{ route('student.storeFindings') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group m-0">
                    <div class="custom-file">
                        <input type="file" id="file" name="file" class="custom-file-input">
                        <label for="file" class="custom-file-label">Choose file</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Findings</button>
                </div>   
            </form>
    </div>
</div>

@endsection