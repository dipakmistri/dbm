
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#grade_master").hide();
          $("#add_grade").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#grade_master").show();
          $("#add_grade").hide();
          $("#back").hide();
        });
      });
      </script>  

      <div class="container-fluid mt-3">
        <div id="grade_master">
          <div class="card">
            <h5 class="card-header"> Grade Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                        <select class="form-control" id="selectGrade">
                          <option>Grade Name</option>
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
                          <input type="text" class="form-control mb-2 ml-5" id="grade" placeholder="Jane Doe">
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
              Grade Record(s)
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
                    <th scope="col">Grade</th>
                    <th scope="col">Description</th>
                    <th scope="col">Eligibility Amount(Optional Allowance)</th>
                    <th scope="col">Sorting No</th>
                    <th scope="col">OT Applicable</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td><a href="">Mark</a></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
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
      
        <div id="add_grade" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Grade</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="grade_name" class="col-sm-2 col-form-label">Grade Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="grade_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                    <label for="grade_desc" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="grade_desc" > </textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="basic_sal" class="col-sm-2 col-form-label">Basic Salary:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control input-sm" id="basic_sal" >
                    </div>
                    <div class="col-sm-2 align-items-center">
                        <center>% of monthly</center>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control input-sm" id="basic_sal_options">
                          <option>CTC</option>
                          <option>Gross</option>
                          
                        </select>
                      </div>

                </div>

                <div class="form-group row">
                  <label for="gov_min_basics" class="col-sm-2 col-form-label">Govt. Minimum Basics:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="gov_min_basics" value="0">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="sort_num" class="col-sm-2 col-form-label">Sorting No:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sort_num" >
                  </div>
                </div>
                
                <div class="form-group row">
                    <label for="notice_days" class="col-sm-2 col-form-label">Notice Period Days:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="notice_days" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="notice_working_days" class="col-sm-2 col-form-label">Notice Period Working Days:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="notice_working_days" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sal_range" class="col-sm-2 col-form-label">Salary Range:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control input-sm" id="sal_range_start" value="0">
                    </div>
                    <div class="col-sm-2 align-items-center">
                        <center>To</center>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control input-sm" id="sal_range_end" value="0">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="eligibility_amount" class="col-sm-2 col-form-label">Eligibility Amount (Optional Allowance):</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="eligibility_amount" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-2 col-form-label">Over Time Applicable:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Active:</label>
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

      

 