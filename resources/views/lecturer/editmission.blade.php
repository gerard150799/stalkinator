@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt"> Edit Missions</h1>
            </div>
        </div>
    </div>
    <div class="container page__container">
        <form action="{{ route('lecturer.updateMission', [$mission[0]->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-lg-9 align-items-center">
                    <div class="page-section">
                        <form action ="">
                            <div class="list-group-item">
                                <label class="form-label">Mission Instruction:</label>
                                <textarea class="form-control" name="missionInstruction" rows="5"  placeholder="Mission instruction goes here..">{{ $mission[0]-> mission_instruction }}</textarea>
                            </div>
                            <div class="list-group-item">
                                <label class="form-label">Difficulty:</label>
                                <select id="difficulty" name="difficulty" class="form-control custom-select" required>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                            </div>
                            <!-- <div class="list-group-item">
                                <label class="form-label">Status:</label>
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                    <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="subscribe">Yes</label>
                                </div>
                            </div> -->
                            <button type="submit" id="update-mission" class="btn btn-primary">Update Mission</button>
                        </form>
                    </div>
                </div>
            </div>  
        </form>

    </div>

</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            $('#update-mission').click(function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Mission Updated',
                    showConfirmButton: false,
                    timer: 1600
                })

            });
        });
    </script>
@endsection