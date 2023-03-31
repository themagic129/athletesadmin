<!-- Modal -->


<div class="modal fade" id="modal-edit-{{ $athlete->user_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('athletes.update', $athlete->user_id) }}" method="post">

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
                            <input type="text" class="form-control" id="userid" value="{{ $athlete->user_id }}"
                                name="user_id" required>

                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault02">Organization</label>
                            <input type="text" class="form-control" id="validationDefault02"
                                value="{{ $athlete->organization }}" name="organization" required>
                        </div>
                    </div>


                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault05">First Name</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlete->first_name }}" name="first_name" required>
                        </div>


                        <div class="col mb-3">
                            <label for="validationDefault05">Last Name</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlete->last_name }}" name="last_name" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Coach/Trainer</label>
                            <select class="custom-select" id="validationDefault04"
                                value="{{ $athlete->coach_trainer_id }}" name="coach_trainer_id" required>

                                <option hidden selected value="{{ $athlete->coach_trainer_id }}">
                                    {{ $athlete->coach_trainer->first_name }}</option>

                                @foreach ($coaches as $coach)
                                    <option value="{{ $coach->user_id }}">{{ $coach->first_name }}</option>
                                @endforeach

                            </select>
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col mb-3">
                            <label for="validationDefault04">Program</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlete->program }}"
                                name="program" required>

                                <option hidden selected value="{{ $athlete->program }}">{{ $athlete->program }}
                                </option>

                                @foreach ($programs as $program)
                                    <option value="{{ $program->name }}">{{ $program->name }}</option>
                                @endforeach

                            </select>
                        </div>



                        <div class="col mb-3">
                            <label for="validationDefault03">Team</label>
                            <input type="text" class="form-control" id="validationDefault03"
                                value="{{ $athlete->team }}" name="team" required>
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
                                value="{{ $athlete->height }}" name="height" required>
                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Workout</label>
                            <select class="custom-select" id="validationDefault04" value="" name="workout_id"
                                required>

                                <option hidden selected value="{{ $athlete->workout->id }}">
                                    {{ $athlete->workout->name }}
                                </option>

                                @foreach ($workout as $workou)
                                    <option value="{{ $workou->id }}">{{ $workou->name }}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>

                    <div class="form-row">


                        <div class="col mb-3">
                            <label for="validationDefault05">Weight</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                value="{{ $athlete->weight }}" name="weight" required>
                        </div>

                        <div class="col mb-3">

                            <label for="validationDefault04">Bats</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlete->bats }}"
                                name="bats" required>
                                <option hidden selected value="{{ $athlete->bats }}">{{ $athlete->bats }}</option>
                                <option>L</option>
                                <option>R</option>
                                <option>B</option>

                            </select>


                        </div>

                        <div class="col mb-3">
                            <label for="validationDefault04">Throws</label>
                            <select class="custom-select" id="validationDefault04" value="{{ $athlete->throws }}"
                                name="throws" required>
                                <option hidden selected value="{{ $athlete->throws }}">{{ $athlete->throws }}
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
                                        value="{{ $athlete->phone }}" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="col">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" value="{{ $athlete->email }}" name="email">
                            </div>

                        </div>


                    </div>



                    <!--<div class="form-row">
                        <div class="col">
                            <label for="customFile">Profile Photo</label>
                            <div class="custom-file">

                                <input type="file" class="custom-file-input" id="customFile"
                                    value="{{ asset('storage/images/' . $athlete->profile_photo) }}"
                                    name="profile_photo">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                        </div>

                    </div>-->




                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('athletes.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>

                    </div>


                </div>


            </div>

    </div>
    </form>
</div>
</div>
