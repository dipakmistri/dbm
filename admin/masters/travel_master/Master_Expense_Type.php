<div class="container-fluid mt-3">
        <div id="expense_master">
          <div class="card">
            <h5 class="card-header"> Expense Type Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                        <select class="form-control" id="select">
                          <option>Expense Name</option> 
                          <option>Expense Code</option>                          
                        </select>
                      </div>
                    </div>
                  </div> <br>
                  
                  </div>
                  
                  <div class="col-sm-8">
                      <div class="form-row align-items-center">
                        Search For: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="expense" placeholder="Jane Doe">
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
      
        <div id="add_expense" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Expense Type</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="expense_name" class="col-sm-4 col-form-label">Expense Name:</label>
                  <div class="col-sm-8">
                    <input type="text" required class="form-control" id="expense_name" >
                  </div>
                </div>

                <div class="form-group row">
                    <label for="expense_name" class="col-sm-4 col-form-label">Expense Code:</label>
                    <div class="col-sm-8">
                      <input type="text" required class="form-control" id="expense_code" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Show For time in Travel Settlement:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">City Category Wise:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Expense Amount:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Add to Overlimit:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Pre - Post Date  disable in Setltement:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Fuel Rate:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Paid Percentage (When Receipt Missing):</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ota" class="col-sm-4 col-form-label">Display Travel Mode:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" value="" id="ota">
                    </div>
                </div>
              
                <div class="form-group row">
                  <label for="expense_name" class="col-sm-4 col-form-label">Effective Date (Max Limit):</label>
                  <div class="col-sm-4">
                    <input type="date" required class="form-control" id="effective_date" >
                  </div>
                </div>



                <div class="form-group row justify-content-center">
                    <center> <a href data-toggle="modal" data-target="#addCountryCategory">Set/View Max Limit</a> </center>
                </div>

                      <div class="modal fade" id="addCountryCategory" tabindex="-1" role="dialog" aria-labelledby="addCountryCategory" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Add Max Limit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body ">
                                
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="state-tab" data-toggle="tab" href="#city_cat" role="tab" aria-controls="home" aria-selected="true">City Category</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="city-tab" data-toggle="tab" href="#country_cat" role="tab" aria-controls="profile" aria-selected="false">Country Category</a>
                                        </li>
                                        
                                    </ul>
                                  
                                  <br>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="city_cat" role="tabpanel" aria-labelledby="state-tab"> 
                                      
                                      <div class="card">
                                        
                                          <table class="table table-bordered mt-3">
                                            <thead>
                                              <tr>
                                                
                                                <th scope="col"><input type="checkbox"> &nbsp Grade Name</th>
                                                <th scope="col">Amount</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                
                                                <td><a href=""><input type="checkbox"> &nbsp Mark</a></td>
                                                <td> <input type="text" required class="form-control" id="mark" > </td>
                                                
                                              </tr>
                                              
                                            </tbody>
                                          </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="country_cat" role="tabpanel" aria-labelledby="city-tab">
                                      
                                      <div class="card">
                                        
                                          <table class="table table-bordered mt-3">
                                            <thead>
                                              <tr>
                                                
                                                <th scope="col"><input type="checkbox"> &nbsp City Name</th>
                                                <th scope="col">Developed ($)</th>
                                                <th scope="col">Developing ($)</th>
                                                <th scope="col">Other ($)</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                
                                                <td><a href=""><input type="checkbox"> &nbsp Mark</a></td>
                                                <td> <input type="text" required class="form-control" id="mark" > </td>
                                                <td> <input type="text" required class="form-control" id="mark" > </td>
                                                <td> <input type="text" required class="form-control" id="mark" > </td>
                                                
                                              </tr>
                                            </tbody>
                                          </table>
                                      </div>
                                    </div>
                                    
                                  </div>
        
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
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
      <script>
        $(document).ready(function(){
          $("#add").click(function(){
            $("#expense_master").hide();
            $("#add_expense").show();
            $("#back").show();
          });
          $("#back").click(function(){
            $("#expense_master").show();
            $("#add_expense").hide();
            $("#back").hide();
          });
          $('.datepicker').datepicker();
        });
        </script>  

      
