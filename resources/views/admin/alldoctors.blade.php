
 
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')



      <div align="center" style="padding:70px;">
       <table style="border: 1px solid white;">
           <tr style="background-color:black; border: 1px solid green; ">
               <th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
               <th style="padding:10px; font-size:20px; color:white;"> Phone </th>
               <th style="padding:10px; font-size:20px; color:white;"> Room </th>
               <th style="padding:10px; font-size:20px; color:white;"> Speciality </th>
               <th style="padding:10px; font-size:20px; color:white;"> Image </th>
               <th style="padding:10px; font-size:20px; color:white;"> Update</th>
               <th style="padding:10px; font-size:20px; color:white;"> Cancel</th>
           </tr>

           @foreach ($data as $doctors)
           <tr style="background-color:black; border: 5px " align="center">
               <td style="border: 1px solid green;">{{$doctors->name}}</td>
               <td style="border: 1px solid green;">{{$doctors->phone}}</td>
               <td style="border: 1px solid green;">{{$doctors->room}}</td>
               <td style="border: 1px solid green;">{{$doctors->speciality}}</td>
               
               <td><img height="100" width="100" src="doctorimage/{{$doctors->file}}" alt=""></td>
              
               <td class="btn btn-info" onclick= "return confirm('Are you sure you want to Approved this')"><a href="{{url('updatedoctor',$doctors->id)}}">Update</a></td>
               <td><a onclick="return confirm('Are you sure you want to Delete this')" href="{{url('deletedoctor',$doctors->id)}}">cancel</a></td>
               
               
               
           </tr>
           @endforeach
       </table>
   </div>

     
      


     


      
      
     
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>



