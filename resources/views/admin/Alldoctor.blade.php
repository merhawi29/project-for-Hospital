<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
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
       <div class="container-fluid page-body-wrapper">
        <!-- main-panel ends -->
        <div>
    <table>
        <tr style="background-color:black;  color:white">
            <th style="padding: 10px; font: size 20px; color:white:">Doctor-name</th>
            <th style="padding: 10px; font: size 20px; color:white:">phone</th>
            <th style="padding: 10px; font: size 20px; color:white:">Speciality</th>
            <th style="padding: 10px; font: size 20px; color:white:">room no</th>
            <th style="padding: 10px; font: size 20px; color:white:">image</th>
            <th style="padding: 10px; font: size 20px; color:white:">Delete</th>
            <th style="padding: 10px; font: size 20px; color:white:">Update</th>


        </tr>
        @foreach($data as $datas)
        <tr style="background-color:black; color:white">
            <td>{{$datas->name}}</td>
            <td>{{$datas->phone}}</td>
            <td>{{$datas->Speciality}}</td>
            <td>{{$datas->Room}}</td>
            <td><img heigth="100px" width="100px" src="doctorimage/{{$datas->image}}" alt=""></td>" "
            <td><a class="bt btn-danger" href="{{url('Deletedoctor',$datas->id)}}">Delete</a></td>
            <td><a class="bt btn-primary" href="{{url('Updatedoctor',$datas->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table>
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
