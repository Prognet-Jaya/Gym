<!DOCTYPE html>
<html lang="en">
 @include('admin.css')
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>