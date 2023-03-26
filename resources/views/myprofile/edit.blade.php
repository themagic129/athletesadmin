<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $athlet->user_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('myprofile.update', $athlet->user_id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Athlete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <h5 class="card-header">Athlete's Information</h5>
                    <div class="form-row">
                        <div class="col">
                            <label for="validationDefault01">ID</label>
                            <input type="text" class="form-control" id="userid" value="{{ $athlet->user_id }}"
                                name="user_id" required>

                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault02">Organization</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $athlet->organization }}" name="organization" required>
                        </div>
                    </div>


                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault05">First Name</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlet->first_name }}" name="first_name" required>
                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault05">Last Name</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlet->last_name }}" name="last_name" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Coach/Trainer</label>
                            <select class="custom-select" id="validationDefault04"
                                value="{{ $athlet->coach_trainer_id }}" name="coach_trainer_id" required>

                                <option hidden selected value="{{ $athlet->coach_trainer_id }}">
                                    {{ $athlet->coach_trainer->first_name }}</option>

                                @foreach ($coaches as $coach)
                                    <option value="{{ $coach->user_id }}">{{ $coach->first_name }}</option>
                                @endforeach

                            </select>
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault04">Program</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlet->program }}"
                                name="program" required>

                                <option hidden selected value="{{ $athlet->program }}">{{ $athlet->program }}
                                </option>

                                @foreach ($programs as $program)
                                    <option value="{{ $program->name }}">{{ $program->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault03">Team</label>
                            <input type="text" class="form-control" id="validationDefault03"
                                value="{{ $athlet->team }}" name="team" required>
                        </div>



                    </div>

                    <div class="form-row">

                        <!--<div class="col mb-3">
                  <label for="validationDefault05">Birthday</label>
                  <input type="text" class="form-control" id="validationDefault05" name="birthday" required>
              </div> -->

                        <div class="col mb-3">
                            <label for="validationDefault05">Height</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlet->height }}" name="height" required>
                        </div>


                    </div>

                    <div class="form-row">


                        <div class="col mb-3">
                            <label for="validationDefault05">Weight</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlet->weight }}" name="weight" required>
                        </div>

                        <div class="col mb-3">

                            <label for="validationDefault04">Bats</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlet->bats }}"
                                name="bats" required>
                                <option hidden selected value="{{ $athlet->bats }}">{{ $athlet->bats }}</option>
                                <option>L</option>
                                <option>R</option>
                                <option>B</option>

                            </select>


                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Throws</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlet->throws }}"
                                name="throws" required>
                                <option hidden selected value="{{ $athlet->throws }}">{{ $athlet->throws }}
                                </option>
                                <option>L</option>
                                <option>R</option>

                            </select>
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col">
                            <div class="form-row">
                                <div class="col mb-3">
                                    <label for="validationDefault05">Phone</label>
                                    <input type="text" class="form-control" id="validationDefault05"
                                        value="{{ $athlet->phone }}" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="col">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" value="{{ $athlet->email }}" name="email">
                            </div>

                        </div>


                    </div>




                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('my-profile') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>
                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
