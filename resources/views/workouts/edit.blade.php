<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $workout->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('workouts.update', $workout->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Workout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <h5 class="card-header">Workout's Information</h5>
                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault02">Name</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $workout->name }}" name="name" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault02">Description</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $workout->description }}" name="description" required>
                        </div>


                        <select class="custom-select" id="validationDefault04" value="{{ $workout->program_id }}"
                            name="program_id" required>

                            <option hidden selected value="{{ $workout->program_id }}">{{ $workout->programs->name }}
                            </option>

                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach

                        </select>


                    </div>

                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('workouts.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
