@include('layouts.admin.master')

<body id="page-top">
@include('layouts.admin.menu')

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Oreder booking film</div>
          <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>

              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">New order</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{!! url('createorder') !!}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">        
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">User id</label>
                          <input type="number" id="defaultForm" name="user_id" class="form-control validate" require>
                        </div>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">Time table id</label>
                          <input type="number" id="defaultForm" name="timetable_id" class="form-control validate" require>
                        </div>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">Price id</label>
                          <input type="number" id="defaultForm" name="price_id" class="form-control validate" require>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" value="Add">
                    </div>
                    </form>
                    
                  </div>
                </div>
              </div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>orders_id</th>
                        <th>user_id</th>
                        <th>timetable_id</th>
                        <th>price_id</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $o)
                    <tr>
                        <th>{{$o->orders_id}}</th>
                        <th>{{$o->user_id}}</th>
                        <th>{{$o->timetable_id}}</th>
                        <th>{{$o->price_id}}</th>
                          <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Edit</button></th>
                              <div class="modal" id="myModal1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit order</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="{!! url('editorder') !!}" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">        
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                        <input type="number" name="orders_id" placeholder="Id." value = "{{$o->orders_id}}" hidden>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="defaultForm">User id</label>
                                            <input type="text" id="defaultForm" name="user_id" class="form-control validate" value = "{{$o->user_id}}">
                                        </div>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="defaultForm">Time table </label>
                                            <input type="text" id="defaultForm" name="timetable_id" class="form-control validate" value= "{{$o->timetable_id}}">
                                        </div>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="defaultForm">price id</label>
                                            <input type="text" id="defaultForm" name="price_id" class="form-control validate" value= "{{$o->price_id}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="submit" value="Save">
                                    </div>
                                  </form>
                                    
                                  </div>
                                </div>
                              </div>
                        <th><a href="{{route('deleteorder', $o->orders_id)}}">Delete</a></th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
    </div>
   
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
