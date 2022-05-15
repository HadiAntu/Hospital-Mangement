
 
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
     
        <!-- @include('admin.nav') -->
        <div class="container-fluid page-body-wrapper">
      </div>


      <div class="container" align="center" style="padding-right:300px" style="padding-top:300px">
      <form action="{{url('doctor-upload')}}" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label>Doctor Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Doctor Name">
  </div>
  <div class="form-group">
    <label>Phone </label>
    <input type="text" class="form-control" name="phone"  placeholder="Doctor PHone">
  </div>
  <div class="form-group">
    <label>Room NO</label>
    <input type="text" class="form-control" name="room"  placeholder="Doctor Room">
  </div>
  
  <div class="form-group">
  <label name="speciality">Speciality:</label>
  <select >
    <option value="skin">skin</option>
    <option value="Heart">Heart</option>
    <option value="Eye">Eye</option>
    <option value="Nose">Nose</option>
  </select>
  </div>
  <div class="form-group">
    <label>Image</label>
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

      
     
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>



