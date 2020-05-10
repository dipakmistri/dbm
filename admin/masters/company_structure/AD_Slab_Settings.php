
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#state_master").hide();
          $("#add_state_city").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#state_master").show();
          $("#add_state_city").hide();
          $("#back").hide();
        });
        $("#add_shiftwise").click(function(){
          $("#add_shiftwise_div").show();
          $("#shiftwise").hide();
          $("#back_shiftwise").show();
        });
        $("#back_shiftwise").click(function(){
          $("#add_shiftwise_div").hide();
          $("#shiftwise").show();
          $("#add_shiftwise").show();
        });
        $("#add_car_retention").click(function(){
          $("#add_car_retention_div").show();
          $("#car_retention").hide();
          $("#back_car_retention").show();
        });
        $("#back_car_retention").click(function(){
          $("#add_car_retention_div").hide();
          $("#car_retention").show();
          $("#add_car_retention").show();
        });
        $("#add_assign_grade").click(function(){
          $("#add_assign_grade_div").show();
          $("#assign_grade").hide();
          $("#back_assign_grade").show();
        });
        $("#back_assign_grade").click(function(){
          $("#add_assign_grade_div").hide();
          $("#assign_grade").show();
          $("#add_assign_grade").show();
        });
      });
      </script>  
 

      <div class="container-fluid mt-3">
        <div id="state_master">
          <div class="card">
            <h5 class="card-header"> Allowance/Deduction Slab Settings</h5>
          </div>
          <div class="card">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="slab-tab" data-toggle="tab" href="#slab" role="tab" aria-controls="slab" aria-selected="true">Slab Wise</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="shift-tab" data-toggle="tab" href="#shift" role="tab" aria-controls="shift" aria-selected="false">Shift Wise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="false">Car Retention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="assign_grade-tab" data-toggle="tab" href="#assign" role="tab" aria-controls="assign" aria-selected="false">Assign Grade Branch Wise</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="slab" role="tabpanel" aria-labelledby="slab-tab"> 
                  
                    <div class="card">
                        <div class="card-body">
                          <form>
            
                            <div class="form-group row">
                              <label for="cc_name" class="col-sm-2 col-form-label">Name:</label>
                              <div class="col-sm-4">
                                <input type="text" required class="form-control" id="cc_name" >
                              </div>
                              <label for="cc_code" class="col-sm-2 col-form-label">Code:</label>
                              <div class="col-sm-4">
                                <input type="text" required class="form-control" id="cc_code" >
                              </div>
                              <label for="cc_cost_element" class="col-sm-2 col-form-label mt-2">Cost Element:</label>
                              <div class="col-sm-4">
                                <input type="text" required class="form-control mt-2" id="cc_cost_element" >
                              </div>
                            </div>
                            
                            
            
                            <center>
                              <button type="submit" id="" class="btn btn-secondary">&nbsp Go &nbsp</button>
                              
                            </center>
                          </form>
                        </div>      
                        
                  </div>
                </div>

                <div class="tab-pane fade" id="shift" role="tabpanel" aria-labelledby="shift-tab">
                    
                    <div class="card" id="shiftwise">
                        <h5 class="card-header"> <button type="button" id="add_shiftwise" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                    <div class="card" id="add_shiftwise_div" style="display:none">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-5">
                                    
                                    <div class="form-group row">
                                        <br><br>
                                        <label for="expense_name" class="mt-2 col-sm-4 col-form-label">Effective Date (Max Limit):</label>
                                        <div class="col-sm-4 mt-3">
                                          <input type="date" required class="form-control" id="effective_date" >
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>

                            <div class="card" class="col-sm-9">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Shift</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Eligible Count (In Days)</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Otto</td>
                                        <td>
                                            <input type="text" class="form-control" id="stateSearch" placeholder="Jane Doe">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="stateSearch" placeholder="Jane Doe">
                                        </td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <center>
                                <button type="button" id=""  class="btn btn-secondary btn-sm m-3">Save</button>
                                <button type="button" id="back_shiftwise" style="display: none;" class="btn btn-secondary btn-sm m-3">Back</button>
                            </center>
                        </div>
                    </div>
                    
                </div>

                <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                    <div id="car_retention">
                        <div class="card">
                            <h5 class="card-header"> <button type="button" id="add_car_retention" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
                            <h6 class="card-header">Search Panel</h6>
                            <div class="card-body">
                            <form>
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="col-sm-12">
                                    <div class="form-row align-items-center">
                                        <label for="expense_name" class="col-sm-4 col-form-label">Month:</label>
                                    <div class="col-sm">
                                        <select class="form-control" id="select">
                                        <option>January</option> 
                                        <option>Feb</option>                          
                                        </select>
                                    </div>
                                    </div>
                                </div> <br>
                                <div class="col-sm-12">
                                    <div class="form-row align-items-center">
                                        <label for="expense_name" class="col-sm-4 col-form-label">Employee Code/Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control" id="expense_code" >
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-sm-8">
                                    
                                    <div class="col-sm-12">
                                        <div class="form-row align-items-center">
                                            <label for="expense_name" class="col-sm-2 col-form-label">Year:</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="select">
                                            <option>Expense Name</option> 
                                            <option>Expense Code</option>                          
                                            </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-secondary mb-2">Go</button> &nbsp
                                    <button type="submit" class="btn btn-secondary mb-2">Clear</button>  
                                    </center>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="card-footer text-muted">
                            Expense Record(s)
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
                                    <th scope="col">Expense Type</th>
                                    <th scope="col">Type</th>
                                    
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td><a href="">Mark</a></td>
                                    <td>Otto</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>   
                    <div class="card" id="add_car_retention_div" style="display:none">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 mt-2">
                                  <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label for="country_select" class="col-sm-2 col-form-label">Branch:</label>
                                    <div class="col-sm-6">
                                      <select class="form-control" required id="country_select">
                                          <option>select branch</option>
                                          
                                      </select>
                                    </div>
                                    <div class="col-sm-2"></div>
                                  </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="country_select" class="col-sm-2 col-form-label">Grade:</label>
                                        <div class="col-sm-6">
                                          <select class="form-control" required id="country_select">
                                              <option>select grade</option>
                                              
                                          </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="country_select" class="col-sm-2 col-form-label">Department:</label>
                                        <div class="col-sm-6">
                                          <select class="form-control" required id="country_select">
                                              <option>select department</option>
                                             
                                          </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 mt-2">
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <label for="country_select" class="col-sm-2 col-form-label">Designation:</label>
                                            <div class="col-sm-6">
                                              <select class="form-control" required id="country_select">
                                                  <option>select designation</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-2">
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <label for="country_select" class="col-sm-2 col-form-label">Employee:</label>
                                            <div class="col-sm-6">
                                              <select class="form-control" required id="country_select">
                                                  <option>select employee</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-sm-2"></div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6 mt-2">
                                            <div class="form-group row">
                                                <div class="col-sm-2"></div>
                                                <label for="country_select" class="col-sm-2 col-form-label">Allowance:</label>
                                                <div class="col-sm-6">
                                                  <select class="form-control" required id="country_select">
                                                      <option>select allowance</option>
                                                      
                                                  </select>
                                                </div>
                                                <div class="col-sm-2"></div>
                                            </div>
                                        </div>
                                
                            </div>
                            <center>
                                <button type="button" id=""  class="btn btn-secondary btn-sm m-3">Save</button>
                                <button type="button" id="back_car_retention" style="display: none;" class="btn btn-secondary btn-sm m-3">Back</button>
                            </center>
                        </div>
                    </div> 
                </div>

                <div class="tab-pane fade" id="assign" role="tabpanel" aria-labelledby="assign_grade-tab">
                    <div id="assign_grade">
                        <div class="card">
                            <h5 class="card-header"> <button type="button" id="add_assign_grade" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
                            <h6 class="card-header">Search Panel</h6>
                            <div class="card-body">
                            <form>
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="col-sm-12">
                                    <div class="form-row align-items-center">
                                        <label for="expense_name" class="col-sm-4 col-form-label">From Date:</label>
                                        <div class="col-sm">
                                            <input type="date" required class="form-control" id="effective_date" >
                                        </div>
                                    </div>
                                </div> <br>
                                
                                <div class="col-sm-12">
                                    <div class="form-row align-items-center">
                                        <label for="expense_name" class="col-sm-4 col-form-label">Allowance Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control" id="expense_code" >
                                        </div>
                                    </div>
                                </div>

                                </div>
                                
                                <div class="col-sm-8">
                                    
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8">
                                        <div class="form-row align-items-center">
                                            <label for="expense_name" class="col-sm-4 col-form-label">To Date:</label>
                                            <div class="col-sm-6">
                                                <input type="date" required class="form-control" id="effective_date" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-secondary mb-2">Go</button> &nbsp
                                    <button type="submit" class="btn btn-secondary mb-2">Clear</button>  
                                    </center>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="card-footer text-muted">
                            Expense Record(s)
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
                                    <th scope="col">Expense Type</th>
                                    <th scope="col">Type</th>
                                    
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td><a href="">Mark</a></td>
                                    <td>Otto</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>   
                    <div class="card" id="add_assign_grade_div" style="display:none">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 mt-2">
                                  <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label for="country_select" class="col-sm-2 col-form-label">Effective Date:</label>
                                    <div class="col-sm-6">
                                        <input type="date" required class="form-control" id="effective_date" >
                                    </div>
                                    <div class="col-sm-2"></div>
                                  </div>
                                </div>

                                <div class="col-sm-6 mt-2">
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="country_select" class="col-sm-2 col-form-label">Allowance:</label>
                                        <div class="col-sm-6">
                                          <select class="form-control" required id="country_select">
                                              <option>select allowance</option>
                                             
                                          </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                      </div>
                                </div>
                                
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="country_select" class="col-sm-2 col-form-label">Grade:</label>
                                        <div class="col-sm-6">
                                          <select class="form-control" required id="country_select">
                                              <option>select grade</option>
                                              
                                          </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                                
                                    <div class="col-sm-6 mt-2">
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <label for="country_select" class="col-sm-2 col-form-label">Branch:</label>
                                            <div class="col-sm-6">
                                              <select class="form-control" required id="country_select">
                                                  <option>select branch</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mt-2">
                                        <div class="form-group row">
                                          <div class="col-sm-2"></div>
                                          <label for="country_select" class="col-sm-2 col-form-label">Amount:</label>
                                          <div class="col-sm-6">
                                              <input type="text" required class="form-control" id="effective_date" >
                                          </div>
                                          <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                            </div>
                            <center>
                                <button type="button" id=""  class="btn btn-secondary btn-sm m-3">Save</button>
                                <button type="button" id="back_assign_grade" style="display: none;" class="btn btn-secondary btn-sm m-3">Back</button>
                            </center>
                        </div>
                    </div>     
                </div>

            
          </div>  
          
        </div>
      
        

          <button type="button" id="back" style="display: none;" class="btn btn-secondary btn-sm m-3 float-right">Back</button>
        
        </div>
      
      </div>

