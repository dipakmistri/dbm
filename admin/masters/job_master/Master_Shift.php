
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#shift_master").hide();
          $("#add_shift").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#shift_master").show();
          $("#add_shift").hide();
          $("#back").hide();
        });
      });
      </script>  

      <div class="container-fluid mt-3">
        <div id="shift_master">
          <div class="card">
            <h5 class="card-header"> Shift Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  
                  <div class="col-sm-12">
                      <div class="form-row align-items-center">
                        Search Shift: &nbsp
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                          <input type="text" class="form-control mb-2 ml-5" id="shift" placeholder="Jane Doe">
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-auto ml-5 float-right">
                            <center>
                          <button type="submit" class="btn btn-secondary mb-2">Go</button>
                          <button type="submit" class="btn btn-secondary mb-2">Clear</button>
                          <center>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer text-muted">
              Shift Record(s)
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
                    <th scope="col">Shift ID</th>
                    <th scope="col">Shift Name</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Duration</th>
                    <th scope="col">First Shift Duration</th>
                    <th scope="col">Second Shift Duration</th>
                    <th scope="col">Third Shift Duration</th>
                    <th scope="col">Half Day</th>
                    <th scope="col">Shift Group</th>
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
      
        <div id="add_shift" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Shift</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <div class="col-sm-3" ></div> 
                  <label for="shift_name" class="col-sm-2 col-form-label">Shift Name:</label>
                  <div class="col-sm-4">
                    <input type="text" required class="form-control input-sm" id="shift_name" >
                  </div>
                  <div class="col-sm-3" ></div> 
                </div>
                
                <br>
                
                <div class="form-group row">
                    <div class="col-sm-2" ></div>

                    <label for="start_time" class="col-sm-1 col-form-label">Start Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="start_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="end_time" class="col-sm-1 col-form-label">End Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="end_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="duration" class="col-sm-1 col-form-label">Duration:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="duration" disabled>
                    </div>

                    <div class="col-sm-2" ></div> 
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-sm-2" > <b>First Break</b> </div>

                    <label for="fb_start_time" class="col-sm-1 col-form-label">Start Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="fb_start_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="fb_end_time" class="col-sm-1 col-form-label">End Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="fb_end_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="fb_duration" class="col-sm-1 col-form-label">Duration:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="fb_duration" disabled>
                    </div>
                    
                    <div class="col-sm-2" ></div> 
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-sm-2" > <b>Second Break</b> </div>

                    <label for="sb_start_time" class="col-sm-1 col-form-label">Start Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="sb_start_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="sb_end_time" class="col-sm-1 col-form-label">End Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="sb_end_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="sb_duration" class="col-sm-1 col-form-label">Duration:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="sb_duration" disabled>
                    </div>
                    
                    <div class="col-sm-2" > <input type="checkbox"> Deduct Break </div> 
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-sm-2" > <b>Third Break</b> </div>

                    <label for="tb_start_time" class="col-sm-1 col-form-label">Start Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="tb_start_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="tb_end_time" class="col-sm-1 col-form-label">End Time:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="tb_end_time" >
                    </div>

                    <div class="col-sm-1"></div>

                    <label for="tb_duration" class="col-sm-1 col-form-label">Duration:</label>
                    <div class="col-sm-1">
                      <input type="text" required class="form-control input-sm" id="tb_duration" disabled>
                    </div>
                    
                    <div class="col-sm-2" > <input type="checkbox"> Deduct Hour </div> 
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-sm-2" > <input type="checkbox"> <b>Half Day</b> </div> 
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-6" > <input type="checkbox"> Include this shift in to auto shift change </div> 
                    <div class="col-sm-6" > <input type="checkbox"> *Define Shift Hours From 00:00 to 23:59 Hours  </div> 
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2" > <input type="checkbox"> <b>Training Shift</b> </div> 
                    <div class="col-sm-2" > <input type="checkbox"> <b>Split Shift</b> </div> 
                </div>
                <br>

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

      

