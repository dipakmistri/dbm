
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#reason_master").hide();
          $("#add_reason").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#reason_master").show();
          $("#add_reason").hide();
          $("#back").hide();
        });
      });
      </script>  


      <div class="container-fluid mt-3">
        <div id="reason_master">
          <div class="card">
            <h5 class="card-header"> Reason Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
                <form>
                    <div class="row">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-10">
                          <div class="form-row align-items-center">
                            Search By Reason Name: &nbsp
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="selectReason" placeholder="Jane Doe">
                            </div>
                            &nbsp &nbsp &nbsp
                            <div class="col-sm-3 ml-5">
                              <button type="submit" class="btn btn-secondary mb-2">Go</button>
                              <button type="submit" class="btn btn-secondary mb-2">Clear</button>
                            </div>
                          </div>
                      </div>
                    </div>
                  </form>
            </div>
            <div class="card-footer text-muted">
              Reason Record(s)
            </div>
          </div>  
          <div class="card">
            <div class="card-header">
              {} records found. 
              <button type="button" class="btn btn-secondary ml-2 float-right">Delete</button>
              <button type="button" class="btn btn-secondary ml-2 float-right">Show All</button>
            </div>
            
              <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <th scope="col">Reason Name</th>
                    <th scope="col">Reason Type</th>
                    <th scope="col">Is_Active</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td><a href="">Mark</a></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    
                    
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    
                    
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@twitter</td>
                         
                    
                  </tr>
                </tbody>
              </table>
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
          </div>
        </div>
      
        <div id="add_reason" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Reason</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="reason_name" class="col-sm-2 col-form-label">Reason Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="reason_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                    <label for="reason_type" class="col-sm-2 col-form-label">Reason Type:</label>
                    <div class="col-sm-10">
                      <select class="form-control" required id="reason_type">
                          <option>Reason 1</option>
                          <option>Reason 2</option>
                      </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Is Active:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="status" checked>
                    </div>
                  </div>

                <center>
                  <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Save</button>
                  <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Clear</button>
                </center>
              </form>
            </div>
          </div>

          <button type="button" id="back" style="display: none;" class="btn btn-secondary btn-sm m-3 float-right">Back</button>
        
        </div>
      
      </div>

      

  