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
              @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{session()->get('message')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
              </div>
              @endif

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <a href=""class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">+</a>
                    <h4 class="card-title">Daftar Training</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>                          
                            <th> Training</th>
                            <th> Harga</th>
                            <th> Slot member</th>
                            <th> Nama Trainer</th>
                            <th > deskripsi</th>
                            <th> Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($daftar_training as $a)
                          <tr>
                            <td>
                              {{$a->nama_training}}
                            </td>
                            <td> {{$a->harga_training}}</td>
                            <td> {{$a->slot}}</td>
                            <td> hhow?</td>
                            <td> {{$a->deskripsi}}</td>
                            <td>
                            <form action="/daftar_latihan/{{$a->id}}" method="POST">
                                      @method('delete')
                                        @csrf
                                 <input type="submit" name ="submit" class="btn btn-danger" value="delete" onclick="return confirm('Apakah anda ingin menghapus')">
                            </form>
                              <br>
                               <a href=""action="/daftar_latihan/{{$a->id}}"class="btn btn-primary" data-toggle="modal" data-target="#up" data-whatever="@mdo">Update </a>
                            </td>
                          </tr>

                          <div class="modal fade" id="up" tabindex="-1" role="dialog" aria-labelledby="up" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    
                                      <h5 class="modal-title" id="up">Update Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{url('daftar_latihan',$a->id)}}" method="POST">
                                      @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Training = {{$a->nama_training}}</label>
                                          <input type="text" class="form-control" name ="nama_training"id="recipient-name" value="">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Harga={{$a->harga_training}}</label>
                                          <input type="number" class="form-control"name ="harga_training" id="recipient-name">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Slot member={{$a->slot}}</label>
                                          <input type="number" class="form-control" name ="slot" id="recipient-name">
                                        </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
                                      <input type="submit" name ="submit" class="btn btn-primary" value="Simpan" >
                                      </form>
                                      <div class="modal-footer">
                      
                                    </div>
                                    </div>
                                
                                  </div>
                                </div>
                          </div>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Tambah Training</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="/daftar_latihan" method="post" enctype="multipart/form-data">
                                        @method('post')
                                        @csrf
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Training</label>
                                          <input type="text" class="form-control" name ="nama_training"id="recipient-name" value="">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">harga</label>
                                          <input type="number" class="form-control"name ="harga_training" id="recipient-name">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Sisa Slot</label>
                                          <input type="number" class="form-control" name ="slot" id="recipient-name">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                          <textarea class="form-control" name ="deskripsi" id="recipient-name"></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Masukan Gambar</label>
                                          <input type="file" class="form-control" name ="gambar" id="recipient-name">
                                        </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
                                      <input type="submit" name ="submit" class="btn btn-primary" value="Simpan" >
                                      </form>
                                      <div class="modal-footer">
                      
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