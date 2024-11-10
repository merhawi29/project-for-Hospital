<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
      }
      button
      {
        
        width: 100px;
      }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
       @include('admin.navigation')        <!-- partial -->
      
        <!-- main-panel ends -->
        <div class="container-fluid page-body-wrapper">
          @include('components.flash')
         
            <div class="container d-flex  justify-center  my-5 py-5">
            
                    <form action="{{url('edit_doctor',$data->id)}}" enctype="multipart/form-data" method="POST">
                      @csrf
                        <div>
                            <div  class="mb-3">
                                <label for="name">Add Doctor:</label>
                                <input type="text" style="color: black" name="name" id="name" value="{{$data->name}}">
                            </div>
                            <div  class="mb-3">
                                <label for="doctor">phone:</label>
                                <input type="number" style="color: black" name="phone" id="phone" value="{{$data->phone}}">
                            </div>
                    
                            <div  class="mb-3">
                                <label for="Speciality">Speciality:</label>
                                <input type="text" style="color: black" name="Speciality" id="Speciality" value="{{$data->Speciality}}" >
                            </div>
                            <div  clss="mb-3">
                              <label for="roomNumber" class="form-label">Room Number:</label>
                              <input type="text" name="roomNumber"style="color: rgb(1, 0, 0)" id="roomNumber" value="{{$data->Room}}">
                            </div>
                            <div  class="mb-3">
                              <label  class="form-label">old Image:</label>
                              <img src="doctorimage/{{$data->image}}" heigth="100px" width="80px" alt="">
                            </div>
                            <div  class="mb-3">
                              <label  class="form-label">Change Image:</label>
                              <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
            </div>
        </div> 
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>