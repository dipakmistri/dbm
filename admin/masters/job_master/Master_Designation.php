
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#designation_master").hide();
          $("#add_designation").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#designation_master").show();
          $("#add_designation").hide();
          $("#back").hide();
        });
      });
      </script>  


      <div class="container-fluid mt-3">
        <div id="designation_master">
          <div class="card">
            <h5 class="card-header"> Designation Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                        <select class="form-control" id="selectDesignation">
                          <option>Designation</option>
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
                          <input type="text" class="form-control mb-2 ml-5" id="designation" placeholder="Jane Doe">
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
              Designation Record(s)
            </div>
          </div>  
          <div class="card">
            <div class="card-header">
              {} records found. 
              <button type="button" class="btn btn-secondary ml-2 float-right">Delete</button>
              <button type="button" class="btn btn-secondary ml-2 float-right" data-toggle="modal" data-target="#travelMode">
                Travel Mode
              </button>
              <button type="button" class="btn btn-secondary ml-2 float-right">Show All</button>
            </div>
            
              <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <th scope="col">Designation</th>
                    <th scope="col">Code</th>
                    <th scope="col">Parent Name</th>
                    <th scope="col">Main</th>
                    <th scope="col">Sorting No</th>
                    <th scope="col">Manager</th>
                    <th scope="col">Travel Mode</th>
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
      
        <div id="add_designation" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Designation</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="desg_name" class="col-sm-2 col-form-label">Designation Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="desg_name" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="desg_code" class="col-sm-2 col-form-label">Designation Code:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="desg_code" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="desg_sort_num" class="col-sm-2 col-form-label">Sorting No:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="desg_sort_num" >
                  </div>
                </div>
                

                <div class="form-group row">
                  <label for="desg_parent" class="col-sm-2 col-form-label">Parent:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="desg_parent">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="managerial_post" class="col-sm-2 col-form-label">Managerial Post:</label>
                  <div class="col-sm-10">
                    <input type="checkbox" value="" id="managerial_post"> Managerial Post
                  </div>
                </div>

                <div class="form-group row">
                    <label for="main_desg" class="col-sm-2 col-form-label">Is main:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="main_desg"> Main Designation
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ar_eligibility_amount" class="col-sm-2 col-form-label">Allow/Reim Eligibility Amount:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="ar_eligibility_amount" >
                    </div>
                    <div class="col-sm-1 align-items-center">
                        % of
                    </div>
                    <div class="col-sm-7">
                        <select class="form-control" id="basic">
                          <option>Basic</option>
                          
                        </select>
                      </div>

                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Travel Mode:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="travel_mode"> Travel Mode
                    </div>
                </div>

                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Active:</label>
                  <div class="col-sm-10">
                    <input type="checkbox" value="" id="status" checked>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="rem_email" class="col-sm-2 col-form-label">Absconding Reminder Email:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="rem_email">
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

      <div class="modal fade" id="travelMode" tabindex="-1" role="dialog" aria-labelledby="travelMode" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Update Travel Mode</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
                  
                  <div class="card">
                    <div class="card-header">
                      <input type="checkbox"> Unassigned Travel Mode
                      
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col"><input type="checkbox"> Travel Mode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td scope="col"><input type="checkbox"> Car</td>
                                
                              </tr>
                              <tr>
                                <td scope="col"><input type="checkbox"> Bus</td>
                              </tr>
                              <tr>
                                <td scope="col"><input type="checkbox"> Train</td>
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

