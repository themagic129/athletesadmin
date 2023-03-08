@extends('adminlte::page')

@section('title', 'Athletes')

@section('content_header')
    <h1>Dashboard</h1>
@stop

<!--Content main-->
@section('content')

    <div class="container col-8">

        <div class="row">
            <div class="col">

                <!-- Tarjeta Contenedora de la tabla -->               
              
                <div class="card">
                  <div class="card-header">                
                     <h5 class="ml-2">Manage Athletes</h5>
                    <div class="container-fluid mt-2">
                      <div class="row">
                          <div class="col">
                              <div class="card mt-1">
                                  <div class="card-body">
                                   
                        <div class="modal fade" id="modal-users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title fs-5" id="exampleModalLabel">Users List</h4>
                               
                              </div>
                              <div class="modal-body">
                                    
                                <table class="table" id="mi-tabla">
                                  <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Username</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Action</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($users as $use)                                                                         
                                    <tr>
                                      <td>{{$use->id}}</td>
                                      <td>{{$use->name}}</td>
                                      <td>{{$use->email}}</td>
                                      <td><button class="btn-enviar btn btn-info" data-dismiss="modal">Add</button></td>
                                    </tr>                                    
                                    @endforeach
                                  </tbody>
                                </table>

                              </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancelar</button>
                                  <button class="btn btn-primary"  type="submit" data-dismiss="modal">Agregar</button>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                       

                        </form>
                      <!-- Fin Formulario -->





                <form action="" method="post">

                  @csrf                         
                
                               
                    <div class="form-row">
                      <div class="col">
                        <label for="validationDefault01">ID</label>
                        <input type="text" class="form-control" id="userid" value="" name="user_id" required>

                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-md mt-1" data-toggle="modal" data-target="#modal-users">Add User</button>
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
                <div class="form-row">
                  <div class="col text-center">
                    <a href="{{route('athletes.index')}}" class="btn btn-danger col-4 mb-3">Cancel</a>
                    <button type="submit" class="btn btn-success col-4 mb-3">Create</button>
                   

                  </div>
                 

                </div>
               
                
                </div>
                </div>
                          
               
                
                
                  </form>
                <!-- Fin Formulario -->

                </div>
                <div class="card-footer text-muted">                  
                
                </div>
              </div>

              <!-- Fin Tarjeta -->


            </div>
        </div>


    </div>



@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  
<script>
  $('.btn-enviar').click(function() {
  var fila = $(this).closest('tr');
  var valor1 = fila.find('td:eq(0)').text(); 
  $('#userid').val(valor1);
});
</script>
@stop