
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#dept_master").hide();
          $("#add_dept").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#dept_master").show();
          $("#add_dept").hide();
          $("#back").hide();
        });
      });
      </script>  

    

      <div class="container-fluid mt-3">
        <div id="dept_master">
          <div class="card">
            <h5 class="card-header"> Department Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-4">
                  <div class="col-sm-12">
                    <div class="form-row align-items-center">
                      Search By: &nbsp 
                      <div class="col-sm">
                        <select class="form-control" id="selectDepartment">
                          <option>Department</option>
                          <option>Sorting No</option>
                          
                        </select>
                      </div>
                    </div>
                  </div> <br>
                  
                  </div>
                  
                  <div class="col-sm-8">
                      <div class="form-row align-items-center">
                        Search For: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="department" placeholder="Jane Doe">
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
              Department Records(5)
            </div>
          </div>  
          <div class="card">
            <div class="card-header">
              {} records found. 
              <button type="button" class="btn btn-secondary ml-2 float-right">Show All</button>
              <button type="button" class="btn btn-secondary ml-2 float-right">Delete</button>
            </div>
            
              <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Department Code</th>
                    <th scope="col">Sorting No.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Mark</td>
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
      
        <div id="add_dept" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Department</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="dept_name" class="col-sm-2 col-form-label">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="dept_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="dept_code" class="col-sm-2 col-form-label">Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="dept_code" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="sort_num" class="col-sm-2 col-form-label">Sorting No:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sort_num" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="min_wage" class="col-sm-2 col-form-label">Minimum Wages</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_wage" value="0">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="dept_category" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="dept_category">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ojt" class="col-sm-2 col-form-label">OJT Applicable</label>
                  <div class="col-sm-10">
                    <input type="checkbox" value="" id="ojt">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Active</label>
                  <div class="col-sm-10">
                    <input type="checkbox" value="" id="status">
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

        
