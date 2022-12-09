<!DOCTYPE html>
<html lang="en">
  @include('trainer.trainer_css')
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('trainer.trainer_sidebar')
      <!-- partial -->
      @include('trainer.trainer_header')
        <!-- partial -->
        @include('trainer.trainer_body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('trainer.trainer_script')
    <!-- End custom js for this page -->
  </body>
</html>