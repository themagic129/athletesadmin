<!-- Modal -->


<div class="modal fade" id="modal-edit-{{$coach->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <form action="{{route('coaches.update', $coach->user_id)}}" method="post">
      
      @csrf 
      @method('PUT')
     
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Coach</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       
        <h5 class="card-header mb-3">Coach Information's</h5>
        <div class="form-row">
          <div class="col">
            <label for="validationDefault01">ID</label>
            <input type="text" class="form-control" id="userid" value="{{$coach->user_id}}" name="user_id" required>

          </div>
          
         
          <div class="col mb-3">
            <label for="validationDefault02">Certifications</label>
            <input type="text" class="form-control" id="validationDefault02" value="{{$coach->certifications}}" name="certifications" required>
          </div>
        </div>
        
        
        <div class="form-row">
         
          <div class="col mb-3">
            <label for="validationDefault05">Organization</label>
            <input type="text" class="form-control" id="validationDefault05" value="{{$coach->organization}}" name="organization" required>
          </div>    
    
    
          <div class="col mb-3">
            <label for="validationDefault05">First Name</label>
            <input type="text" class="form-control" id="validationDefault05" value="{{$coach->first_name}}" name="first_name" required>
          </div>

          <div class="col mb-3">
            <label for="validationDefault05">Last Name</label>
            <input type="text" class="form-control" id="validationDefault05" value="{{$coach->last_name}}" name="last_name" required>
          </div>
    
        </div>
    
        <div class="form-row">
         
          <div class="col mb-3">
              <label for="validationDefault05">Phone</label>
              <input type="text" class="form-control" id="validationDefault05" value="{{$coach->phone}}" name="phone" required>
            </div> 
      
            <div class="col mb-3">
              <label for="validationDefault03">Email</label>
              <input type="text" class="form-control" id="validationDefault03" value="{{$coach->email}}" name="email" required>
            </div>
                      
          
        </div>
    
        <div class="form-row">
        
          <div class="col mb-3">
            <label for="validationDefault05">Specialty</label>
            <input type="text" class="form-control" id="validationDefault05" value="{{$coach->specialty}}" name="specialty" required>
        </div> 

        </div>
      
          
      </div>
      <div class="form-row">
        <div class="col text-center mt-3">
          <a href="{{route('coaches.index')}}" class="btn btn-danger col-4 mb-3">Cancel</a>
          <button type="submit" class="btn btn-primary col-4 mb-3">Update</button>                   

        </div>
       

      </div>


      </div>
      
    </div>
  </form>
  </div>
</div>