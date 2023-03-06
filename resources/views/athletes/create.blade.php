     
     
  
                        <!-- Create Athlete Form -->

                        <form action="" method="post">

                            @csrf                         
       
                            <div class="modal fade" id="create_athlete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel">Athlete's Info</h4>
                                   
                                  </div>
                            <div class="modal-body">
                              <div class="form-row">
                                <div class="col mb-3">
                                  <label for="validationDefault01">ID</label>
                                  <input type="text" class="form-control" id="validationDefault01" value="" name="user_id" required>
                                </div>
                                <div class="col mb-3">
                                  <label for="validationDefault02">Organization</label>
                                  <input type="text" class="form-control" id="validationDefault02" value="" name="organization" required>
                                </div>
                              </div>
                              
                              <div class="form-row">
                               
                                <div class="col mb-3">
                                  <label for="validationDefault05">First Name</label>
                                  <input type="text" class="form-control" id="validationDefault05" name="first_name" required>
                                </div>    


                                <div class="col mb-3">
                                  <label for="validationDefault05">Last Name</label>
                                  <input type="text" class="form-control" id="validationDefault05" name="last_name" required>
                                </div>

                                <div class="col mb-3">
                                  <label for="validationDefault04">Coach/Trainer</label>
                                  <select class="custom-select" id="validationDefault04" name="coach_trainer_id" required>
                                    <option selected disabled value="">Seleccionar...</option>
                                    <option selected disabled value="">Many</option>
                                                                        
                                  </select>
                                </div>
                               
                                
                              </div>

                              <div class="form-row">
                               
                                <div class="col mb-3">
                                    <label for="validationDefault05">Program</label>
                                    <input type="text" class="form-control" id="validationDefault05" name="program" required>
                                  </div> 
                            
                                  <div class="col mb-3">
                                    <label for="validationDefault03">Team</label>
                                    <input type="text" class="form-control" id="validationDefault03" name="team" required>
                                  </div>
  
                                                              
                                
                              </div>

                              <div class="form-row">
                                
                                <!--<div class="col mb-3">
                                    <label for="validationDefault05">Birthday</label>
                                    <input type="text" class="form-control" id="validationDefault05" name="birthday" required>
                                </div> -->
                               
                                <div class="col mb-3">
                                  <label for="validationDefault05">Height</label>
                                  <input type="text" class="form-control" id="validationDefault05" name="height" required>
                              </div> 


                              </div>

                              <div class="form-row">
                                
                                
                                <div class="col mb-3">
                                    <label for="validationDefault05">Weight</label>
                                    <input type="text" class="form-control" id="validationDefault05" name="weight" required>
                                </div> 

                                <div class="col mb-3">
                                
                                  <label for="validationDefault04">Bats</label>
                                  <select class="custom-select" id="validationDefault04" name="bats" required>
                                  <option selected disabled value="">Seleccionar...</option>
                                  <option>L</option>
                                  <option>R</option>
                                  <option>B</option>
                                                                        
                                  </select>


                              </div>
                              
                              <div class="col mb-3">
                                <label for="validationDefault04">Throws</label>
                                <select class="custom-select" id="validationDefault04" name="throws" required>
                                <option selected disabled value="">Seleccionar...</option>
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
                                        <input type="text" class="form-control" id="validationDefault05" name="phone" required>
                                      </div>                                
                                  </div>                                  
                                </div>

                                <div class="col">

                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                                  </div>

                                </div>
                               
                             
                              </div>
                            
                              <div class="form-row">
                                   <div class="col">  
                                  <label for="customFile">Profile Photo</label>                                
                                  <div class="custom-file">
                                    
                                    <input type="file" class="custom-file-input" id="customFile" name="profile_photo">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                                                                 
                                </div>
                              </div>
                         
                    </div>
  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button class="btn btn-primary"  type="submit">Agregar</button>
                    </div>
                    
                  </div>
                </div>
              </div>
                               
  
                            </form>
                          <!-- Fin Formulario -->
  
                   
                   
  
  
                        
  
        