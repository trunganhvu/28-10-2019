@include('layouts.admin.master')

<body id="page-top">
@include('layouts.admin.menu')

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header"><i class="fas fa-table"></i>Table film</div>
          <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>

            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New film</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <form action="{!! url('createfilm') !!}" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">        
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <!-- <input type="text" name="film_name" placeholder="Name." require><br>
                    <input type="number" name="film_time" placeholder="Time." require><br>
                    <input type="text" name="film_desc" placeholder="Descriptrion." require><br>
                    <input type="text" name="film_from" placeholder="Made in." require><br>
                    <input type="text" name="film_photo" placeholder="photo." require><br> -->
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm">Name film</label>
                      <input type="text" id="defaultForm" name="film_name" class="form-control validate" require>
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm">Film time</label>
                      <input type="text" id="defaultForm" name="film_time" class="form-control validate" require>
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm">Description film</label>
                      <input type="text" id="defaultForm" name="film_desc" class="form-control validate" require>
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm">Film from</label>
                      <input type="text" id="defaultForm" name="film_from" class="form-control validate" require>
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm">Price photo</label>
                      <input type="text" id="defaultForm" name="film_photo" class="form-control validate" require>
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
                    <th>film_id</th>
                    <th>film_name</th>
                    <th>film_time</th>
                    <th>film_desc</th>
                    <th>film_from</th>
                    <th>film_photo</th>
                    <th>edit</th>
                    <th>delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($films as $film)
                  <tr>
                    <th>{{$film->film_id}}</th>
                    <th>{{$film->film_name}}</th>
                    <th>{{$film->film_time}}</th>
                    <th>{{$film->film_desc}}</th>
                    <th>{{$film->film_from}}</th>
                    <th>{{$film->film_photo}}</th>
                    <!-- <th><button href="" id="edit">Edit</button></th>
                      <div id="formEdit" class="modal">
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <form action="{!! url('editfilm') !!}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            <input type="text" name="film_id" placeholder="Id room." value = "{{$film->film_id}}" hidden>
                            <input type="text" name="film_name" placeholder="Name film." value = "{{$film->film_name}}"><br>
                            <input type="number" name="film_time" placeholder="Time film." value= "{{$film->film_time}}"><br>
                            <input type="text" name="film_desc" placeholder="Description film." value= "{{$film->film_desc}}"><br>
                            <input type="text" name="film_from" placeholder="From." value= "{{$film->film_from}}"><br>
                            <input type="text" name="film_photo" placeholder="Photo film." value= "{{$film->film_photo}}"><br>                          
                            <input type="submit" value="Save">
                          </form>
                        </div>
                      </div> -->
                      <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Edit</button></th>

                      <div class="modal" id="myModal1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit item</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="{!! url('editfilm') !!}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">        
                              <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                              <input type="text" name="film_id" placeholder="Id room." value = "{{$film->film_id}}" hidden>
                              <!-- <input type="text" name="film_name" placeholder="Name film." value = "{{$film->film_name}}"><br>
                              <input type="number" name="film_time" placeholder="Time film." value= "{{$film->film_time}}"><br>
                              <input type="text" name="film_desc" placeholder="Description film." value= "{{$film->film_desc}}"><br>
                              <input type="text" name="film_from" placeholder="From." value= "{{$film->film_from}}"><br>
                              <input type="text" name="film_photo" placeholder="Photo film." value= "{{$film->film_photo}}"><br> -->
                              <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="defaultForm">Name film</label>
                                <input type="text" id="defaultForm" name="film_name" class="form-control validate" value = "{{$film->film_name}}">
                              </div> 
                              <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="defaultForm">Film time</label>
                                <input type="text" id="defaultForm" name="film_time" class="form-control validate" value= "{{$film->film_time}}">
                              </div>
                              <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="defaultForm">Description film</label>
                                <input type="text" id="defaultForm" name="film_desc" class="form-control validate" value= "{{$film->film_desc}}">
                              </div>
                              <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="defaultForm">Film from</label>
                                <input type="text" id="defaultForm" name="film_from" class="form-control validate" value= "{{$film->film_from}}">
                              </div>
                              <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="defaultForm">Price photo</label>
                                <input type="text" id="defaultForm" name="film_photo" class="form-control validate" value= "{{$film->film_photo}}">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="submit" value="Save">
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    <th><a href="{{route('deletefilm', $film->film_id)}}">Delete</a></th>
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
  <script>
    var modal = document.getElementById("formAdd");
    var btn = document.getElementById("add");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <script>
    var modal = document.getElementById("formEdit");
    var btn = document.getElementById("edit");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>
