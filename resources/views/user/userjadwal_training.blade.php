<!DOCTYPE html>
<html lang="en">
  @include('user.user_css')
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('user.user_sidebar')
      <!-- partial -->
      @include('user.user_header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
               masih kosong
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('user.user_script')
    <!-- End custom js for this page -->
  </body>
</html>