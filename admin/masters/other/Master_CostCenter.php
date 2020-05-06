
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#costcenter_master").hide();
          $("#add_costcenter").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#costcenter_master").show();
          $("#add_costcenter").hide();
          $("#back").hide();
        });
      });
      </script>  
 
      <div class="container-fluid mt-3">
        <div id="costcenter_master">
          <div class="card">
            <h5 class="card-header"> Cost Center Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-3">
                  
                  </div>
                  
                  <div class="col-sm-6">
                      <div class="form-row align-items-center">
                        Search For: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="qualification" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto ml-5">
                          <button type="submit" class="btn btn-secondary mb-2">Go</button>
                          <button type="submit" class="btn btn-secondary mb-2">Clear</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer text-muted">
              Cost Center Record(s)
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
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Cost Element</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td><a href="">Mark</a></td>
                    <td>Otto</td>
                    
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
      
        <div id="add_costcenter" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Cost Center</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="cc_name" class="col-sm-2 col-form-label">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="cc_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="cc_code" class="col-sm-2 col-form-label">Code:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="cc_code" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="cc_cost_element" class="col-sm-2 col-form-label">Cost Element:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="cc_cost_element" >
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
