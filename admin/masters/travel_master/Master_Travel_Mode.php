
    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          $("#travel_mode_master").hide();
          $("#add_travel_mode").show();
          $("#back").show();
        });
        $("#back").click(function(){
          $("#travel_mode_master").show();
          $("#add_travel_mode").hide();
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
        <div id="travel_mode_master">
          <div class="card">
            <h5 class="card-header"> Travel Mode Master <button type="button" id="add" class="btn btn-secondary btn-sm float-right m-1">Add</button> </h5>
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
                          <option>Travel Mode Name</option>                          
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
            <div class="card-footer text-muted">
              Travel Record(s)
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
                    <th scope="col">Travel Mode Name</th>
                    
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td><a href="">Mark</a></td>
                    
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
      
        <div id="add_travel_mode" style="display: none;">
          <div class="card">
            <h5 class="card-header">Add Travel Mode</h5>
            <div class="card-body">
              <form>

                <div class="form-group row">
                  <label for="qualification_name" class="col-sm-3 col-form-label">Travel Mode Name:</label>
                  <div class="col-sm-5">
                    <input type="text" required class="form-control" id="travel_mode_name" >
                  </div>
                  <div class="col-sm-4 justify-content-center overflow-auto">
                    <ul class="list-group">
                        <li class="list-group-item"> <input type="checkbox"> Cras justo odio</li>
                        <li class="list-group-item"> <input type="checkbox"> Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
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

  