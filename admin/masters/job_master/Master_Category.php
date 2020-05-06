
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#category_master").hide();
          $("#add_category").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#category_master").show();
          $("#add_category").hide();
          $("#back").hide();
        });
      });
      </script>  

    

      <div class="container-fluid mt-3">
        <div id="category_master">
          <div class="card">
            <h5 class="card-header"> Category Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="form-row align-items-center">
                          <div class="col-sm-1"></div>
                          Search Category: &nbsp
                          <div class="col-sm-1"></div>
                          <div class="col-sm-4">
                            <center><input type="text" class="form-control mb-2 ml-5" id="category" placeholder="Enter Category Name"></center>
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
              Category Record(s)
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
                    <th scope="col">Category</th>
                    <th scope="col">Category Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Show in Birthday Reminder</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td><a href="">Mark</a></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@twitter</td>
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
      
        <div id="add_category" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Grade</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="category_name" class="col-sm-2 col-form-label">Category Name:</label>
                  <div class="col-sm-10">
                    <input type="text" required class="form-control" id="category_name" >
                  </div>
                </div>

                <div class="form-group row">
                    <label for="category_code" class="col-sm-2 col-form-label">Category Code:</label>
                    <div class="col-sm-10">
                      <input type="text" required class="form-control" id="category_code" >
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="category_desc" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="category_desc" > </textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday_reminder" class="col-sm-2 col-form-label">Show in Birthday Reminder:</label>
                    <div class="col-sm-10">
                      <input type="checkbox" value="" id="birthday_reminder" checked>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="employee_new" class="col-sm-2 col-form-label">Show New Join Employee(Dashboard):</label>
                  <div class="col-sm-10">
                    <input type="checkbox" value="" id="employee_new" checked>
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

