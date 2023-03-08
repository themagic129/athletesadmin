@extends('adminlte::page')

@section('title', 'Coaches')

@section('content_header')
   
@stop

<!--Content main-->
@section('content')

    <div class="container col-12">

        <div class="row">
            <div class="col">

                <!-- Tarjeta Contenedora de la tabla -->               
              <div class="card mt-2">
                <div class="card-header">                
                   <h5 class="ml-2">Manage Coaches</h5>
                  <div class="container-fluid mt-2">
                    <div class="row">
                        <div class="col">
                            <div class="card mt-1">
                                <div class="card-body">
                                  
                                <!-- Button trigger modal                               

                                        <div class="row">
                                        <div class="col-2">
                                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#testmodal">
                                            Agregar Producto
                                          </button>                                          
                                       
                                        </div>
                                         --> 

                                         <div class="row">

                                          
                                        <div class="col d-flex">
                                          <!-- Form Busqueda -->
                                            <form action="{{route('coaches.index')}}" method="GET" class="form-inline my-2 my-lg-0">
                                              
                                            @csrf

                                                <input class="form-control mr-sm-2" placeholder="Athlete Name" name="q">
                                                <button type="submit" class="btn btn-primary my-2 my-sm-0" >Search</button>
                                                
                                              </form>  
                                             
                                              <a href="{{route('coaches.create')}}" class="btn btn-info ml-2">Create Coach</a>
                                                                                          
                                        </div> 
                                        

                                         </div>
 
                                    
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                </div>
                         

                <div class="card-body" style="margin-top: -0.5rem !important;">                
                       
                  
                    @if(count($coaches) == 0)
                        <p class="text-center">No data to display</p>
                    @else
                <table class="table text-center">
                  
                    <thead class="thead-dark">
                      
                      <tr>
                        <th>ID</th>
                        <th>Certifications</th>
                        <th>Organization</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>    
                        <th>Speciality</th>                       
                        <th>Action</th>                    
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($coaches as $coach)
                      <tr>                      
                        <td>{{$coach->user_id}}</td>
                        <td>{{$coach->certifications}}</td>
                        <td>{{$coach->organization}}</td>
                        <td>{{$coach->first_name}}</td>
                        <td>{{$coach->last_name}}</td>
                        <td>{{$coach->phone}}</td>
                        <td>{{$coach->email}}</td>
                        <td>{{$coach->specialty}}</td>
                                                         
                        <td>                        
                                               
                           <!-- Button trigger modal -->
                           <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-edit-{{$coach->user_id}}">
                            Edit
                          </button>

                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#modal-delete-{{$coach->user_id}}">
                            Delete
                          </button>

                        </td>                         
                      </tr>
                      @include('coaches.destroy')
                      @include('coaches.edit')
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                
                     <!-- Fin Tabla Productos -->   
                     

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
@stop