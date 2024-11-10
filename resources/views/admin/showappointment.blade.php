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
            <th style="padding: 10px; font: size 20px; color:white:">Customer-name</th>
            <th style="padding: 10px; font: size 20px; color:white:">phone</th>
            <th style="padding: 10px; font: size 20px; color:white:">email</th>
            <th style="padding: 10px; font: size 20px; color:white:">Date</th>
            <th style="padding: 10px; font: size 20px; color:white:">Message</th>
            <th style="padding: 10px; font: size 20px; color:white:">Doctor-name</th>
            <th style="padding: 10px; font: size 20px; color:white:">status</th>
            <th style="padding: 10px; font: size 20px; color:white:">Approved</th>
            <th style="padding: 10px; font: size 20px; color:white:">Cancled</th>


        </tr>
        @foreach($appoint as $appoints)
        <tr style="background-color:black; color:white">
            <td>{{$appoints->name}}</td>
            <td>{{$appoints->phone}}</td>
            <td>{{$appoints->email}}</td>
            <td>{{$appoints->date}}</td>
            <td>{{$appoints->message}}</td>
            <td>{{$appoints->doctor}}</td>
            <td>{{$appoints->status}}</td>" "
            <td><a class="bt btn-success" href="{{url('Approved',$appoints->id)}}">Approved</a></td>
            <td><a class="bt btn-danger" href="{{url('cancle',$appoints->id)}}">Cancle</a></td>
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
