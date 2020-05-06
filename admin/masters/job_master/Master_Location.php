
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#country_master").hide();
          $("#add_country").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#country_master").show();
          $("#add_country").hide();
          $("#back").hide();
        });
      });
      </script>  

    

      <div class="container-fluid mt-3">
        <div id="country_master">
          <div class="card">
            <h5 class="card-header"> Country Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9 align-items-center">
                      <center>
                      <div class="form-row align-items-center">
                        Search : &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="select_location" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto ml-5">
                          <button type="submit" class="btn btn-secondary mb-2">Go</button>
                          <button type="submit" class="btn btn-secondary mb-2">Clear</button>
                        </div>
                      </div>
                    </center>
                  </div>
                  
                </div>
              </form>
            </div>

              
            <div class="card-footer text-muted">
              Country Records(5)
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
                    <th scope="col">State Name</th>
                    <th scope="col">Country Name</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Mark</td>
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
      
        <div id="add_country" style="display: none;">
          <div class="card">
                
            <h5 class="card-header">Add Country</h5>
              
            <div class="card-body">
                <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#addCountryCategory">
                    Add City Category              
                  </button>

                  <div class="modal fade" id="addCountryCategory" tabindex="-1" role="dialog" aria-labelledby="addCountryCategory" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Country Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body ">
                            <form>
              
                                <div class="form-group row">
                                  <label for="city_category" class="col-sm-4 col-form-label">Country Category Name:</label>
                                  <div class="col-sm-8">
                                    <input type="text" required class="form-control" id="city_category" >
                                  </div>
                                </div>
                                
                                <div class="form-group row">
                                  <label for="city_desc" class="col-sm-4 col-form-label">Description:</label>
                                  <div class="col-sm-8">
                                    <textarea class="form-control" id="city_desc" > </textarea>
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
                                            <td>Developed</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><input type="checkbox"></th>
                                            <td>Developing</td>
                                            <td></td>
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

                  <br><br>
                <form>
  
                  <div class="form-group row">
                    <label for="country_name" class="col-sm-4 col-form-label">Country Name:</label>
                    <div class="col-sm-8">
                      <input type="text" required class="form-control" id="country_name" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="country_category" class="col-sm-4 col-form-label">Category Name:</label>
                    <div class="col-sm-8">
                      <select class="form-control" required id="country_category">
                          <option>Select</option>
                          <option>Developed</option>
                          <option>Developing</option>
                          <option>Other</option>
                          
                      </select>
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

          <button type="button" id="back" style="display: none;" class="btn btn-secondary btn-sm m-3 float-right">Back</button>
        
        </div>
      
      </div>

        

  