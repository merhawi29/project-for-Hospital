<!DOCTYPE html>
<html lang="en">
  <head>
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
            
                    <form action="{{url('upload_doctor')}}" enctype="multipart/form-data" method="POST">
                      @csrf
                        <div>
                            <div  class="mb-3">
                                <label for="name">Add Doctor:</label>
                                <input type="text" style="color: black" name="name" id="name" placeholder="your-name">
                            </div>
                            <div  class="mb-3">
                                <label for="doctor">phone:</label>
                                <input type="text" style="color: black" name="phone" id="phone" placeholder="your-Phone">
                            </div>
                            <div  class="mb-3">
                                <label for="doctor">Speciality:</label> 
                               <select name="Speciality" style="color: rgb(1, 0, 0)" id="Speciality">
                                <option value="" disabled selected>---Select---</option>
                                <option value="skin">skin</option>
                                <option value="heart">heart</option>
                                <option value="eye">eye</option>
                                <option value="nose">nose</option>
                               </select>
                            </div>
                            <div  clss="mb-3">
                              <label for="roomNumber" class="form-label">Room Number:</label>
                              <input type="text" name="roomNumber"style="color: rgb(1, 0, 0)" id="roomNumber" placeholder="your room number" required>
                            </div>
                            <div  class="mb-3">
                              <label  class="form-label">Doctor Image:</label>
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