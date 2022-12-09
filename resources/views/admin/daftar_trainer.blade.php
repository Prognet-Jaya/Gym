<!DOCTYPE html>
<html lang="en">
 @include('admin.css')
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Trainer</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <!-- <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th> -->
                            <th> Nama Lengkap</th>
                            <th> Umur</th>
                            <th> Jenis kelamin</th>
                            <th> Ahli</th>
                            <th> Telepon</th>
                            <th> Alamat</th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($daftar_trainer as $t)
                          <tr>
                            <!-- <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td> -->
                            <td>
                
                              <span class="ps-2">{{$t->Nama_trainer}}</span>
                            </td>
                            <td> {{$t->Umur_trainer}}</td>
                            <td> {{$t->jk}}</td>
                            <td> {{$t->jenis_trainer}}</td>
                            <td> {{$t->telepon_trainer}} </td>
                            <td> {{$t->alamat_trainer}}</td>
                            <td>
                              <div class="badge badge-outline-success">None</div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>