<form action="{{ route('workouts.store') }}" method="post">

    @csrf

    <div class="modal fade" id="workout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Workout's Information</h4>

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
                            <label for="validationDefault04">Program</label>
                            <select class="custom-select" id="validationDefault04" name="program_id" required>
                                <option selected disabled value="">Select...</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="col text-center mt-3">
                            <a href="{{ route('workouts.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                            <button type="submit" class="btn btn-primary col-4 mb-3">Create</button>

                        </div>


                    </div>


                </div>
            </div>

</form>
<!-- Fin Formulario -->
