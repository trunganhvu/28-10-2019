@include('layouts.admin.master')
@push('styles')
    <link href="{{ asset('css/admin_css/rooms.css') }}" rel="stylesheet">
<body id="page-top">
  @include('layouts.admin.menu')

  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-table"></i>Room table</div>
        <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">New Room</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{!! url('createroom') !!}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">        
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <!-- <input type="text" name="room_name" placeholder="Name room." require><br>
                    <input type="number" name="room_size" placeholder="Size room." require> -->
                    
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                      <input type="text" id="defaultForm-email" name="room_name" class="form-control validate" require>
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Size</label>
                      <input type="number" id="defaultForm-email" name="room_size" class="form-control validate" require>
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" value="Add">
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>room_id</th>
                  <th>room_size</th>
                  <th>room_name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $ro)
                <tr>
                  <th>{{$ro->room_id}}</th>
                  <th>{{$ro->room_size}}</th>
                  <th>{{$ro->room_name}}</th>
                  <!-- <th><button href="" id="edit">Edit</button></th>
                  <div id="formEdit" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <form action="{!! url('editroom') !!}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        <input type="number" name="room_id" placeholder="Id room." value = "{{$ro->room_id}}" hidden>
                        <input type="text" name="room_name" placeholder="Name room." value = "{{$ro->room_name}}">
                        <input type="number" name="room_size" placeholder="Size room." value= "{{$ro->room_size}}">
                        <input type="submit" value="Save">
                      </form>
                    </div>
                  </div> -->
                  <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Edit</button></th>

                    <div class="modal" id="myModal1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Room</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form action="{!! url('editroom') !!}" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">        
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            <input type="number" name="room_id" placeholder="Id room." value = "{{$ro->room_id}}" hidden>
                            <!-- <input type="text" name="room_name" placeholder="Name room." value = "{{$ro->room_name}}">
                            <input type="number" name="room_size" placeholder="Size room." value= "{{$ro->room_size}}"> -->
                            <div class="md-form mb-5">
                              <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                              <input type="text" id="defaultForm-email" name="room_name" class="form-control validate" value = "{{$ro->room_name}}">
                            </div>
                            <div class="md-form mb-5">
                              <label data-error="wrong" data-success="right" for="defaultForm-email">Size</label>
                              <input type="number" id="defaultForm-email" name="room_size" class="form-control validate" value= "{{$ro->room_size}}">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" value="Save">
                          </div>
                        </form>
                          
                        </div>
                      </div>
                    </div>
                  <th><a href="{{route('deleteroom', $ro->room_id)}}">Delete</a></th>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>  
      </div>
    </div>
  </div>
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/sb-admin.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
