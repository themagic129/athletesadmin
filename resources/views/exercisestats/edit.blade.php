<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $exercisestat->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('exercisestats.update', $exercisestat->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Exercise Stats</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">

                        <div class="col">
                            <label for="validationDefault01">Workout</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ $exercisestat->workouts->name }}" name="name" required>

                        </div>

                        <div class="col">
                            <label for="validationDefault01">Exercise</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ $exercisestat->exercises->name }}" name="description" required>

                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col">
                            <label for="validationDefault01">Num. Reps</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ $exercisestat->num_reps }}" name="name" required>

                        </div>

                        <div class="col">
                            <label for="validationDefault01">Num. Sets</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ $exercisestat->num_sets }}" name="description" required>

                        </div>


                    </div>


                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('exercisestats.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
