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
                    <h4 class="card-title">Order Status</h4>
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
                            <th> Pekerjaan</th>
                            <th> Jenis Kelamin</th>
                            <th> Telepon</th>
                            <th> Alamat</th>
                            <th> Status </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data_member as $s)
                          <tr>
                            <!-- <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td> -->
                            <td>
                              <span class="ps-2">{{$s->nama_lengkap}}</span>
                            </td>
                            <td> {{$s->umur}}</td>
                            <td> {{$s->pekerjaan}}</td>
                            <td> {{$s->jenis_kelamin}}</td>
                            <td> {{$s->telepon}} </td>
                            <td> {{$s->alamat}}</td>
                            <td>
                              <div class="badge badge-outline-success">{{$s->status}}</div>
                            </td>
                            <td>
                               <button type="submit" value="{{$s->id}}"id="btn"class="editbtn btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> update</button> 
              
                            <form action="/data_member/{{$s->id}}" method="POST">
                                      @method('delete')
                                        @csrf
                                 <input type="submit" name ="submit" class="btn btn-danger" value="delete" >

                            </form>
                            </td>
                          </tr>
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="/data_member/{{$s->id}}" method="POST">
                                     
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" class="form-control" name ="id"id="id" value="{{$s->id}}">
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Namaa</label>
                                          <input type="text" class="form-control" name ="nama_lengkap"id="recipient-name" value="{{$s->nama_lengkap}}">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">umur</label>
                                          <input type="text" class="form-control"name ="umur" id="recipient-name" value="{{$s->umur}}">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label"></label>
                                          <input type="text" class="form-control" name ="pekerjaan" id="recipient-name" value="{{$s->pekerjaan}}">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">pria</label>
                                          <input type="radio" class="form-control" name ="jenis_kelamin" id="recipient-name" value="pria">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">wanita</label>
                                          <input type="radio" class="form-control" name ="jenis_kelamin" id="recipient-name" value="wanita">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Telepon</label>
                                          <input type="text" class="form-control" name ="telepon" id="recipient-name"value="{{$s->telepon}}">
                                        </div>

                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Alamat</label>
                                          <input type="text" class="form-control" name ="alamat" id="recipient-name" value="{{$s->alamat}}">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
                                      <input type="submit" name ="submit" class=" btn btn-primary" value="Simpan" >
                                      </form>
                                      <div class="modal-footer">
                      
                                    </div>
                                    </div>
                                
                                  </div>
                                </div>
                          </div>
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
   
      <script src="home/js/jquery.min.js">
        $(document).ready(function(){
          $(selector).on('click','editbtn', function(){
            var id_user=$(this).val();
            alert(id_user);
          });
        });
      </script>
    
    <script src="home/js/jquery.min.js"></script>
     <script src="home/js/bootstrap.min.js"></script>
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>