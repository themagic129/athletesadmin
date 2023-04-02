<form action="{{ route('exercises.store') }}" method="post">

    @csrf

    <div class="modal fade" id="exercise-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Exercise's Information</h4>

                </div>
                <div class="modal-body">

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault02">Name</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="name" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault02">Description</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="description" required>
                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault02">Num. Reps</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="num_reps" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault02">Num. Sets</label>
                            <input type="text" class="form-control" id="validationDefault02" value=""
                                name="num_reps" required>
                        </div>
                    </div>


                    <div class="col">
                        <label for="validationDefault04">Workout</label>
                        <select class="custom-select" id="validationDefault04" name="workout_id" required>
                            <option selected disabled value="">Select...</option>
                            @foreach ($workouts as $workout)
                                <option value="{{ $workout->id }}">{{ $workout->name }} <p>
                                    </p>
                                </option>
                            @endforeach

                        </select>
                    </div>

                </div>


                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('exercises.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Create</button>

                    </div>


                </div>


            </div>
        </div>

</form>
<!-- Fin Formulario -->
