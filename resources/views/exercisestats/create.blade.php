<form action="{{ route('exercisestats.store') }}" method="post">

    @csrf

    <div class="modal fade" id="exercise-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Exercise's Stats</h4>

                </div>
                <div class="modal-body">

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault04">Workout</label>
                            <select class="custom-select" id="validationDefault04" name="workout_id" required>
                                <option selected disabled value="">Select...</option>
                                @foreach ($workouts as $workout)
                                    <option value="{{ $workout->id }}">{{ $workout->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Exercise</label>
                            <select class="custom-select" id="validationDefault04" name="exercise_id" required>
                                <option selected disabled value="">Select...</option>
                                @foreach ($exercises as $exercise)
                                    <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault02">Num. Reps</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="num_reps" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault02">Num. Sets</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="num_sets" required>
                        </div>
                    </div>

                </div>


                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('exercisestats.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Create</button>

                    </div>


                </div>


            </div>
        </div>

</form>
<!-- Fin Formulario -->
