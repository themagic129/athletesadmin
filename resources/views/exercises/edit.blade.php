<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $exercise->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('exercises.update', $exercise->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Exercise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">

                        <div class="col">
                            <label for="validationDefault01">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $exercise->name }}"
                                name="name" required>

                        </div>


                        <div class="col">
                            <label for="validationDefault01">Description</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ $exercise->description }}" name="description" required>

                        </div>



                    </div>


                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('exercises.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
