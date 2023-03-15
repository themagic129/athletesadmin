<!-- Modal -->
<div class="modal fade" id="modal-edit-{{ $athletemetric->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('athletemetrics.update', $athletemetric->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Athlete Metrics Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <label for="validationDefault01">ID</label>
                            <input type="text" class="form-control" id="userid" value="{{ $athletemetric->id }}"
                                name="athlete_id" required>

                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault02">Max. Velocity</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $athletemetric->max_velocity }}" name="max_velocity" required>
                        </div>
                    </div>


                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault05">Max. Throwing Velocity</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                name="max_throwing_velocity" required
                                value="{{ $athletemetric->max_throwing_velocity }}">
                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault05">Blast Plane Score</label>
                            <input type="text" class="form-control" id="validationDefault05" name="blast_plane_score"
                                required value="{{ $athletemetric->blast_plane_score }}">
                        </div>

                    </div>


                    <div class="form-row">


                        <div class="col mb-3">
                            <label for="validationDefault05">Blast Connection Score</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                name="blast_connection_score" required
                                value="{{ $athletemetric->blast_connection_score }}">
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault05">Blast Rotation Score</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                name="blast_rotation_score" required value="{{ $athletemetric->blast_rotation_score }}">
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col">
                            <div class="form-row">
                                <div class="col mb-3">
                                    <label for="validationDefault05">Max Fb. Spin Rate</label>
                                    <input type="text" class="form-control" id="validationDefault05"
                                        name="max_fb_spin_rate" required value="{{ $athletemetric->max_fb_spin_rate }}">
                                </div>
                            </div>
                        </div>

                        <div class="col">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Avg. Fb Spin
                                    Rate</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="ave_fb_spin_rate" value="{{ $athletemetric->ave_fb_spin_rate }}">
                            </div>

                        </div>


                    </div>



                    <div class="form-row">
                        <div class="col text-center mt-3">
                            <a href="{{ route('athletemetrics.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                            <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                        </div>


                    </div>


                </div>

            </div>
        </form>
    </div>
</div>
