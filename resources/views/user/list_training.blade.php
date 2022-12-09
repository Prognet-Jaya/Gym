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
          @foreach($daftar_training as $x)
              <div class="produk mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-dark text-white border rounded">
                            <div class="col-md-3 mt-1">
                              <img src="/latihan/{{$x->gambar}}">
                            </div>
                            <div class="col-md-6 mt-1">
                              <div class="text-primary">
                                <h5>{{$x->nama_training}}<br></h5>
                              </div>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span>Deskripsi :<br></span><span class="dot"></span><span class="dot"></span>
                              </div>
                                <div class="mt-1 mb-1 spec-1"><span class="dot"></span></div>
                                <p class="text-justify text-truncate para mb-0">{{$x->deskripsi}}<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">Rp. {{$x->harga_training}}</h4> <!-- <span class="strike-text">$20.99</span> -->
                                </div>
                                <h6 class="text-success"></h6>
                                <div class="d-flex flex-column mt-4">
                                  <a><button class="btn btn-primary btn-sm" type="button">Details</button></a>
                                  <a href="{{url('anjay')}}"><button class="btn btn-primary btn-sm" type="button">join</button></a>

                                  <form action="/add_cart/{{$x->id}}" method="post">
                                    @csrf
                                      <a ><button class="btn btn-outline-primary btn-sm mt-2" type="submit">Add to cart</button></a>
                                  </form>
                                 
                                  
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
          
        <!-- content wrapper stop div -->
          </div>
          <!-- main panel stop div -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('user.user_script')
    <!-- End custom js for this page -->
  </body>
</html>