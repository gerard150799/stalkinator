@extends('layouts.HeaderFooter')

@section('content')
<div class="mdk-header-layout__content page-content">
    <div class="py-54pt bg-gradient-primary">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <div class="flex mb-32pt mb-md-0">
                <h1 class="text-white mb-8pt"> Add Missions</h1>
            </div>
        </div>
    </div>
    <div class="container page__container">
        <form action="">
            <div class="row">
                <div class="col-lg-9 align-items-center">
                    <div class="page-section">
                        <form action ="">
                            <div class="list-group-item">
                                <label class="form-label">Mission Instruction:</label>
                                <textarea class="form-control" name="missionInstruction" rows="5" placeholder="Mission instruction goes here.."></textarea>
                            </div>
                            <div class="list-group-item">
                                <label class="form-label">Difficulty:</label>
                                <select id="difficulty" name="difficulty" class="form-control custom-select" required>
                                    <option value="easy">Easy</option>
                                    <option value="medium">Medium</option>
                                    <option value="hard">Hard</option>
                                </select>
                            </div>
                            <!-- <div class="list-group-item">
                                <label class="form-label">Status:</label>
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                    <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="subscribe">Yes</label>
                                </div>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Save Mission</button>
                        </form>
                    </div>
                </div>
            </div>  
        </form>

    </div>

</div>
@endsection