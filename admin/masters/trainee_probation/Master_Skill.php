
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#skill_master").hide();
          $("#add_skill").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#skill_master").show();
          $("#add_skill").hide();
          $("#back").hide();
        });
      });
    </script>
    <style>
        .list-group{
        max-height: 261px;
        margin-bottom: 10px;
        overflow:scroll;
        -webkit-overflow-scrolling: touch;
        }
    </style>  

      <div class="container-fluid mt-3">
        <div id="skill_master">
          <div class="card">
            <h5 class="card-header"> Skill Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                          <option>Skill Name</option>                          
                        </select>
                      </div>
                    </div>
                  </div> <br>
                  
                  </div>
                  
                  <div class="col-sm-8">
                      <div class="form-row align-items-center">
                        Search For: &nbsp
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2 ml-5" id="qualification" placeholder="Jane Doe">
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
                  <a class="nav-link active" id="state-tab" data-toggle="tab" href="#skill" role="tab" aria-controls="home" aria-selected="true">
                      Skill
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="city-tab" data-toggle="tab" href="#attribute" role="tab" aria-controls="profile" aria-selected="false">
                      Attribute
                  </a>
                </li>
                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="skill" role="tabpanel" aria-labelledby="state-tab"> 
                  <div class="card-footer text-muted">
                    Skill Record(s)
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
                            <th scope="col">Skill Name</th>
                            <th scope="col">Description</th>
                            
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
                <div class="tab-pane fade" id="attribute" role="tabpanel" aria-labelledby="city-tab">
                  <div class="card-footer text-muted">
                    Attribute Record(s)
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
                            <th scope="col">Skill Name</th>
                            <th scope="col">Description</th>
                            
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
                
              </div>
        </div>
        </div>
      
        <div id="add_skill" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Skill</h5>
            <div class="card-body">
              <form>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="state-tab" data-toggle="tab" href="#skill_tab" role="tab" aria-controls="home" aria-selected="true">Skill</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="city-tab" data-toggle="tab" href="#attribute_tab" role="tab" aria-controls="profile" aria-selected="false">Attribute</a>
                    </li>
                    
                </ul>
              
              <br>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="skill_tab" role="tabpanel" aria-labelledby="state-tab"> 
                  
                    <div class="form-group row">
                        <label for="qualification_name" class="col-sm-2 col-form-label">Skill name:</label>
                        <div class="col-sm-10">
                          <input type="text" required class="form-control" id="skill_name" >
                        </div>
                      </div>
                    
      
                      <div class="form-group row">
                          <label for="qualification_type" class="col-sm-2 col-form-label">Description:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="sdesc" > </textarea>
                          </div>
      
                      </div>

                </div>
                <div class="tab-pane fade" id="attribute_tab" role="tabpanel" aria-labelledby="city-tab">
                  
                    <div class="form-group row">
                        <label for="qualification_name" class="col-sm-2 col-form-label">Attribute Name:</label>
                        <div class="col-sm-10">
                          <input type="text" required class="form-control" id="attribute_name" >
                        </div>
                      </div>
                    
      
                      <div class="form-group row">
                          <label for="qualification_type" class="col-sm-2 col-form-label">Description:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="adesc" > </textarea>
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

    