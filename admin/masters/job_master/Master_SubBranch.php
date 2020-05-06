
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#sub_branch_master").hide();
          $("#add_sub_branch").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#sub_branch_master").show();
          $("#add_sub_branch").hide();
          $("#back").hide();
        });
      });
      </script>  


      <div class="container-fluid mt-3">
        <div id="sub_branch_master">
          <div class="card">
            <h5 class="card-header"> Sub Branch Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                      <select class="form-control" id="selectSubBranch">
                        <option>Sub Branch Name</option>
                        <option>Sub Branch Code</option>
                        
                      </select>
                    </div>
                  </div>
                </div> <br>
                <div class="col-sm-12">
                    <div class="form-row align-items-center">
                      Branch Name: &nbsp 
                      <div class="col-sm">
                        <select class="form-control" id="selectBranch">
                          <option>AGM & Above</option>
                          <option>RHC - Director</option>
                          <option>RHC - Domestic</option>
                          <option>RHC - Retainer</option>
                          <option>RHC Ahmedabad - Staff</option>
                          <option>RHC Indrad - Company Associates</option>
                          <option>RHC Indrad Staff</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-8">
                    <div class="form-row align-items-center">
                      Search For: &nbsp
                      <div class="col-auto">
                        <input type="text" class="form-control mb-2 ml-5" id="branch" placeholder="Jane Doe">
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
              Sub Branch Records(5)
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
      
        <div id="add_sub_branch" style="display:none">
          <div class="card">
            <h5 class="card-header">Add Sub Branch</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="sub_branch_name" class="col-sm-2 col-form-label">Branch Name</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="sub_branch_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="sub_branch_code" class="col-sm-2 col-form-label">Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sub_branch_code" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="branchSelect" class="col-sm-2 col-form-label">Branch</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="branchSelect">
                        <option>AGM & Above</option>
                        <option>RHC - Director</option>
                        <option>RHC - Domestic</option>
                        <option>RHC - Retainer</option>
                        <option>RHC Ahmedabad - Staff</option>
                        <option>RHC Indrad - Company Associates</option>
                        <option>RHC Indrad Staff</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="desc" > </textarea>
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

        

 