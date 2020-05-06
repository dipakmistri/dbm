
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#attribute_skill").hide();
          $("#add_attribute_skill").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#attribute_skill").show();
          $("#add_attribute_skill").hide();
          $("#back").hide();
        });
      });
      </script>  
      <style>
        .table-responsive {
          max-height:300px;
        }
      </style>

      <div class="container-fluid mt-3">
        <div id="attribute_skill">
          <div class="card">
            <h5 class="card-header"> Attribute Skill Assignment <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
          </div>
          <div class="card">
            <h6 class="card-header">Search Panel</h6>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-3">
                  </div>
                  
                  <div class="col-sm-6">
                      <div class="form-row align-items-center">
                        Designation: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="designation" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto ml-5">
                          <button type="submit" class="btn btn-secondary mb-2">Go</button>
                          <button type="submit" class="btn btn-secondary mb-2">Clear</button>
                        </div>
                      </div>
                  </div>

                  <div class="col-sm-4">
                  </div>
                </div>
              </form>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="state-tab" data-toggle="tab" href="#training" role="tab" aria-controls="home" aria-selected="true">Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="city-tab" data-toggle="tab" href="#probation" role="tab" aria-controls="profile" aria-selected="false">Probation</a>
              </li>
              
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="training" role="tabpanel" aria-labelledby="state-tab"> 
                <div class="card-footer text-muted">
                  Training Record(s)
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
              <div class="tab-pane fade" id="probation" role="tabpanel" aria-labelledby="city-tab">
                <div class="card-footer text-muted">
                  Probation Record(s)
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
      
        <div id="add_attribute_skill" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Attribute and Skill</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Type:</label>
                  <div class="col-sm-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Probation</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Trainee</label>
                  </div>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="qualification_name" class="col-sm-2 col-form-label">Designation:</label>
                  <div class="col-sm-3">
                    <select class="form-control" required id="designation">
                      <option>Select</option>
                      <option>Developed</option>
                      <option>Developing</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <label for="expense_name" class="col-sm-2 col-form-label">Effective Date (Max Limit):</label>
                  <div class="col-sm-3">
                    <input type="date" required class="form-control" id="effective_date" >
                  </div>
                </div>
              

                <div class="form-group row">
                    <label for="qualification_type" class="col-sm-2 col-form-label">Skill Weightage:</label>
                    <div class="col-sm-3">
                      <input type="text" required class="form-control" id="skill_wtg" placeholder="%">
                    </div>
                    <label for="qualification_type" class="col-sm-2 col-form-label">Attribute Weightage:</label>
                    <div class="col-sm-3">
                      <input type="text" required class="form-control" id="attribute_wtg" disabled placeholder="%">
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                  <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        
                        <th scope="col"><input type="checkbox"> &nbsp Skill Type</th>
                        <th scope="col">Skill Weightage</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                        <td><input type="checkbox"> <a href > &nbsp Mark </a></td>
                        <td><input type="text"  class="form-control" id="skill_wtg" placeholder="%"></td>
                        
                      </tr>
                     
                    </tbody>
                  </table>
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

   