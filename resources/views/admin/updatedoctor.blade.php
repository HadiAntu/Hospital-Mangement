
 
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
     
        <!-- @include('admin.nav') -->
        <div class="container-fluid page-body-wrapper">
      </div>


      <div class="container" align="center" style="padding-right:300px" style="padding-top:300px">
      <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label>Doctor Name</label>
    <input type="text" class="form-control" name="name"  value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label>Phone </label>
    <input type="text" class="form-control" name="phone"  value="{{$data->phone}}">
  </div>
  <div class="form-group">
    <label>Room NO</label>
    <input type="text" class="form-control" name="room"  value="{{$data->room}}">
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <input type="text" class="form-control" name="speciality"  value="{{$data->speciality}}">
  </div>

  <div class="form-group">
    <label>Image</label>
    <img height="150" width="150"  src="doctorimage/{{$data->file}}" alt="">
    
  </div>
  
  
  
  <div class="form-group">
    <label>Change Image</label>
    <input type="file" class="form-control" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @if(session()->has('message'))
      <div class="alert alert-success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{session()->get('message')}}
      </div>
      @endif


      </div>


      <!-- <div>
          <label>Doctor Name : 
          <input type="text" name="name" style="color:black;" placeholder="Write Name"></label>
      </div> -->

      
     
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>



