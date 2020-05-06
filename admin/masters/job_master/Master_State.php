
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
      });
      </script>  


      <div class="container-fluid mt-3">
        <div id="state_master">
          <div class="card">
            <h5 class="card-header"> State Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                        <select class="form-control" id="selectState">
                          <option>City Name</option>
                          <option>State Name</option>
                          <option>Country Name</option>
                        </select>
                      </div>
                    </div>
                  </div> <br>
                  
                  </div>
                  
                  <div class="col-sm-8">
                      <div class="form-row align-items-center">
                        Search For: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="stateSearch" placeholder="Jane Doe">
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

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="state-tab" data-toggle="tab" href="#state" role="tab" aria-controls="home" aria-selected="true">State</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="city-tab" data-toggle="tab" href="#city" role="tab" aria-controls="profile" aria-selected="false">City</a>
                </li>
                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="state" role="tabpanel" aria-labelledby="state-tab"> 
                  <div class="card-footer text-muted">
                    State Record(s)
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
                            <th scope="col">State Name</th>
                            <th scope="col">Country Name</th>
                            
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
                <div class="tab-pane fade" id="city" role="tabpanel" aria-labelledby="city-tab">
                  <div class="card-footer text-muted">
                    City Record(s)
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
                            <th scope="col">City Name</th>
                            <th scope="col">State Name</th>
                            <th scope="col">Country Name</th>
                            <th scope="col">City Category</th>
                            
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
                
              </div>

            
          </div>  
          
        </div>
      
        <div id="add_state_city" style="display: none;">
          <div class="card">
                
              <h5 class="card-header">Add State And City</h5>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="state-tab-1" data-toggle="tab" href="#state1" role="tab" aria-controls="home" aria-selected="true">State</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="city-tab-1" data-toggle="tab" href="#city1" role="tab" aria-controls="profile" aria-selected="false">City</a>
                </li>
                    
              </ul>
              <br>
              
              
              
              
              <!-- Modal -->
              <div class="modal fade" id="addCityCategory" tabindex="-1" role="dialog" aria-labelledby="addCityCategory" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Add City Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body ">
                        <form>
          
                            <div class="form-group row">
                              <label for="city_category" class="col-sm-4 col-form-label">City Category Name:</label>
                              <div class="col-sm-8">
                                <input type="text" required class="form-control" id="city_category" >
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="desc" class="col-sm-4 col-form-label">Description:</label>
                              <div class="col-sm-8">
                                <textarea class="form-control" id="desc" > </textarea>
                              </div>
                            </div>
                           
  
                            <center>
                              <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Save</button>
                              <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Clear</button>
                            </center>
                          </form>
                          <br>
                          <div class="card">
                            <div class="card-header">
                              {} records found.
                              <button type="submit" id="" class="btn btn-secondary btn-sm m-1 float-right">Delete</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <thead>
                                      <tr>
                                        <th scope="col"><input type="checkbox"></th>
                                        <th scope="col">City Category Name</th>
                                        <th scope="col">Description</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>Mark</td>
                                        <td>Otto dnjfkndjf</td>
                                      </tr>
                                      <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>Jacob</td>
                                        <td>Thornton dnskjfnkjdsbv</td>
                                      </tr>
                                      <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td colspan="2">Larry the Bird</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>


              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="state1" role="tabpanel" aria-labelledby="state-tab"> 
                    <div class="card-body">
                        <form>
          
                          <div class="form-group row">
                            <label for="state_name" class="col-sm-4 col-form-label">State:</label>
                            <div class="col-sm-8">
                              <input type="text" required class="form-control" id="state_name" >
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="country_select" class="col-sm-4 col-form-label">Country:</label>
                            <div class="col-sm-8">
                              <select class="form-control" required id="country_select">
                                  <option>INDIA</option>
                                  <option>CANADA</option>
                                  <option>LONDON</option>
                                  <option>AUSTRALIA</option>
                                  <option>AMERICA</option>
                                  <option>AFRICA</option>
                                  <option>GERMANY</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="pt_deduct" class="col-sm-4 col-form-label">PT Deduction Type:</label>
                            <div class="col-sm-8">
                              <select class="form-control" required id="pt_deduct">
                                  <option>Monthly</option>
                                  <option>Quarterly</option>
                                  <option>Half Yearly</option>
                                  <option>Yearly</option>
                                  
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="en_cert_no" class="col-sm-4 col-form-label">Enrollment Certificate No (PT Form 5 Report): </label>
                            <div class="col-sm-8">
                              <input type="text"  class="form-control" id="en_cert_no" >
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="esic_state_code" class="col-sm-4 col-form-label">ESIC State Code:</label>
                            <div class="col-sm-8">
                              <input type="text"  class="form-control" id="esic_state_code" >
                            </div>
                          </div>

                          <div class="form-group row">
                              <label for="esic_reg_address" class="col-sm-4 col-form-label">ESIC Registered Office Address:</label>
                              <div class="col-sm-8">
                                <textarea class="form-control" id="esic_reg_address" > </textarea>
                              </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="pt_setting" class="col-sm-4 col-form-label">Applicable PT Setting for Male/Female:</label>
                            <div class="col-sm-8">
                              <input type="checkbox">
                            </div>
                          </div>
                        

                          <center>
                            <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Save</button>
                            <button type="submit" id="" class="btn btn-secondary btn-sm m-1">Clear</button>
                          </center>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="city1" role="tabpanel" aria-labelledby="city-tab">
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#addCityCategory">
                            Add City Category              
                          </button>
                        <form>
                            <br><br>
                          <div class="form-group row">
                            <label for="city_name" class="col-sm-4 col-form-label">City Name:</label>
                            <div class="col-sm-8">
                              <input type="text" required class="form-control" id="city_name" >
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="state_select" class="col-sm-4 col-form-label">State:</label>
                            <div class="col-sm-8">
                              <select class="form-control" required id="state_select">
                                  <option>INDIA</option>
                                  <option>CANADA</option>
                                  <option>LONDON</option>
                                  <option>AUSTRALIA</option>
                                  <option>AMERICA</option>
                                  <option>AFRICA</option>
                                  <option>GERMANY</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="country_select" class="col-sm-4 col-form-label">Country:</label>
                            <div class="col-sm-8">
                              <select class="form-control" required id="country_select">
                                  <option>INDIA</option>
                                  <option>CANADA</option>
                                  <option>LONDON</option>
                                  <option>AUSTRALIA</option>
                                  <option>AMERICA</option>
                                  <option>AFRICA</option>
                                  <option>GERMANY</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="city_category" class="col-sm-4 col-form-label">City Category:</label>
                            <div class="col-sm-8">
                              <select class="form-control" required id="city_category">
                                  <option>Monthly</option>
                                  <option>Quarterly</option>
                                  <option>Half Yearly</option>
                                  <option>Yearly</option>
                                  
                              </select>
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
                
              </div>
          
          </div>

          <button type="button" id="back" style="display: none;" class="btn btn-secondary btn-sm m-3 float-right">Back</button>
        
        </div>
      
      </div>

        

  