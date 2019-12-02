@include('layouts.admin.master')

<body id="page-top">
@include('layouts.admin.menu')

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Time table film</div>
          <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>

              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">New item</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{!! url('createtimetablefilm') !!}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">        
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">Film Name</label>
                          <select class="form-control" name="film_id" required>
                            @foreach($films as $f)
                              <option value="{{$f->film_id}}">{{$f->film_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">Time start</label>
                          <input type="text" id="defaultForm" name="timestart" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm">Room number</label>
                          <select class="form-control" name="room_id" required>
                            @foreach($room as $r)
                              <option value="{{$r->room_id}}">{{$r->room_name}}</option>
                            @endforeach
                          </select>
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
                        <th>timetable_id</th>
                        <th>film_name</th>
                        <th>timestart</th>
                        <th>timeend</th>
                        <th>room_id</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($timetablefilm as $item)
                    <tr>
                        <th>{{$item->timetablefilm_id}}</th>
                        <th>{{$item->film_name}}</th>
                        <th>{{$item->timestart}}</th>
                        <th>{{$item->timeend}}</th>
                        <th>{{$item->room_name}}</th>
                        
                          <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$item->timetablefilm_id}}">Edit</button></th>

                              <div class="modal" id="myModal{{$item->timetablefilm_id}}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit item</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="{!! url('edittimetablefilm') !!}" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">        
                                      <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                      <input type="number" name="timetablefilm_id" placeholder="Id." value = "{{$item->timetablefilm_id}}" hidden>
                                      <!-- <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="defaultForm">Film id</label>
                                        <input type="text" id="defaultForm" name="film_id" class="form-control validate" value = "{{$item->film_id}}">
                                      </div> -->
                                      <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="defaultForm">Film Name</label>
                                        <select class="form-control" name="film_id" required>
                                          @foreach($films as $f)
                                            @if($f->film_id==$item->film_id)
                                            <option value="{{$f->film_id}}" selected>{{$f->film_name}}</option>
                                            @else
                                            <option value="{{$f->film_id}}" >{{$f->film_name}}</option>
                                            @endif
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="defaultForm">Time start</label>
                                        <input type="text" id="defaultForm" name="timestart" class="form-control validate" value= "{{$item->timestart}}">
                                      </div>
                                      <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="defaultForm">Room name</label>
                                        <select class="form-control" name="room_id" required>
                                          @foreach($room as $r)
                                            @if($r->room_id==$item->room_id)
                                            <option value="{{$r->room_id}}" selected>{{$r->room_name}}</option>
                                            @else
                                            <option value="{{$r->room_id}}" >{{$r->room_name}}</option>
                                            @endif
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="submit" value="Save">
                                    </div>
                                  </form>
                                    
                                  </div>
                                </div>
                              </div>
                        <th><a href="{{route('deletetimetablefilm', $item->timetablefilm_id)}}">Delete</a></th>
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
