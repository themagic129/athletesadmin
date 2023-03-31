<!-- Modal -->


<div class="modal fade" id="modal-assign-{{ $athlete->user_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('athletes.show', $athlete->user_id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Workout
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault04">Select Workout</label>
                            <select class="custom-select" id="validationDefault04" name="workout_id" required>
                                <option selected disabled value="">Select...</option>
                                @foreach ($workouts as $workout)
                                    <option value="{{ $workout->id }}">{{ $workout->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>



                    </div>
                    <div class="form-row">
                        <div class="col text-center mt-3">
                            <a href="{{ route('athletes.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                            <button type="submit" class="btn btn-primary col-4 mb-3">Assign</button>

                        </div>


                    </div>


                </div>

            </div>
        </form>
    </div>
</div>
