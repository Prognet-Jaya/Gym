<!DOCTYPE html>
<html lang="en">
  @include('user.user_css')
  <body>
    <div class="container-scroller text-white">
      
      <!-- partial:partials/_sidebar.html -->
      @include('user.user_sidebar')
      <!-- partial -->
      @include('user.user_header')
        <!-- partial -->
        @include('user.user_body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('user.user_script')
    <!-- End custom js for this page -->
  </body>
</html>