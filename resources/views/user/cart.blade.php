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
                <?php $total_harga=0;?>
            @foreach($prananda_cart as $we)
              <div class="produk mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-dark text-white border rounded">
                            <div class="col-md-3 mt-1">
                              <img src="/latihan/{{$we->gambar}}">
                            </div>
                            <div class="col-md-6 mt-1">
                              <div class="text-primary">
                                <h5>{{$we->latihan}}<br></h5>
                              </div>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span>Deskripsi :<br></span><span class="dot"></span><span class="dot"></span>
                              </div>
                                <div class="mt-1 mb-1 spec-1"><span class="dot"></span></div>
                                <p class="text-justify text-truncate para mb-0"><br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">Rp. {{$we->harga}}</h4> <!-- <span class="strike-text">$20.99</span> -->
                                </div>
                                <h6 class="text-success"></h6>
                                <div class="d-flex flex-column mt-4">
                                  <a><button class="btn btn-primary btn-sm" type="button">Details</button></a>

                                  <a class="btn btn-danger" href="{{url('/hapus_cart',$we->id)}}" onclick="return confirm('apakah anda yakin akan menghapus data ini')">
                                        hapus
                                  </a>
                            
                                 
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
                <?php $total_harga=$total_harga+$we->harga;?>
                @endforeach

                <div class="d-flex flex-column mt-4">
                    <h1>Pembayaran</h1>
                    <div class="mt-1 mb-1 spec-1"><span>Data diri anda<br></span><span class="dot"></span><span >
                        -----------
                        <div class="mt-1 mb-1 spec-1"><span>detail produk<br></span><span class="dot"></span><span >
                    <h6 class="text-success">total harga= {{$total_harga}}</h6>
                    <h6 class="text-success">metode pembayaran</h6>
                     <a><button class="btn btn-primary btn-sm" type="button">cash</button></a>

                    <a class="btn btn-danger" href="" onclick="return confirm('apakah anda yakin akan membeli ini')">
                        card payment
                    </a>
                            
                                 
             </div>
               
            </div>
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