<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $program->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('programs.update', $program->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <h5 class="card-header">Program's Information</h5>
                    <div class="form-row">

                        <div class="col">
                            <label for="validationDefault01">Name</label>
                            <input type="text" class="form-control" id="userid" value="{{ $program->name }}"
                                name="name" required>

                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault02">Description</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $program->description }}" name="organization" required>
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('programs.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
