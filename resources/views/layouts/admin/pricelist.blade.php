@include('layouts.admin.master')

<body id="page-top">
@include('layouts.admin.menu')

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header"><i class="fas fa-table"></i>Table list price</div>
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>

                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">New price</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <form action="{!! url('createpricelist') !!}" method="POST" enctype="multipart/form-data">
                      <div class="modal-body">        
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                          <!-- <input type="number" name="price" placeholder="Price." require> -->
                          <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm">Price name</label>
                            <input type="text" id="defaultForm" name="price_name" class="form-control validate" require>
                          </div>
                          <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm">Price</label>
                            <input type="text" id="defaultForm" name="price" class="form-control validate" require>
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
                        <th>price_id</th>
                        <th>price_name</th>
                        <th>price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($pricelist as $p)
                    <tr>
                      <th>{{$p->price_id}}</th>
                      <th>{{$p->price_name}}</th>
                      <th>{{$p->price}}</th>
                        <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$p->price_id}}">Edit</button></th>
                          <div class="modal" id="myModal{{$p->price_id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit price</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="{!! url('editpricelist') !!}" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">        
                                  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                  <input type="text" name="price_id" placeholder="Price id." value = "{{$p->price_id}}" hidden>
                                  <!-- <input type="number" name="price" placeholder="Price." value= "{{$p->price}}"> -->
                                  <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="defaultForm">Price name</label>
                                    <input type="text" id="defaultForm" name="price_name" class="form-control validate" value= "{{$p->price_name}}">
                                  </div>
                                  <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="defaultForm">Price</label>
                                    <input type="text" id="defaultForm" name="price" class="form-control validate" value= "{{$p->price}}">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" value="Save">
                                </div>
                              </form>
                                
                              </div>
                            </div>
                          </div>
                      <th><a href="{{route('deletepricelist', $p->price_id)}}">Delete</a></th>
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
