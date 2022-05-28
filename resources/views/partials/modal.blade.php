
<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row form-lab">
          <div class="col-sm-12"><input type="text" class="form-control" placeholder="Employee ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-6"><input type="text" class="form-control" placeholder="First Name ID*" id="inputText"></div>
          <div class="col-sm-6"><input type="text" class="form-control" placeholder="Last Name ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-4"><input type="text" class="form-control" placeholder="Email ID*" id="inputText"></div>
          <div class="col-sm-4"><input type="text" class="form-control" placeholder="Mobile No*" id="inputText"></div>
          <div class="col-sm-4">
              <select class="form-select" aria-label="Default select example">
              <option selected>Select Role Type</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          </div>
      
          <div class="row form-lab">
      <div class="col-sm-4"><input type="text" class="form-control" placeholder="Username*" id="inputText"></div>
      <div class="col-sm-4"><input type="text" class="form-control" placeholder="Password*" id="inputText"></div>
      <div class="col-sm-4"><input type="text" class="form-control" placeholder="Confirm Password*" id="inputText"></div>
      </div>
      
      
      
      <table class="table">
          <thead style="background-color:#e6faff; border: none;" >
              <tr style="border: none;">
                <th scope="col">Module Permission</th>
                <th scope="col">Read</th>
                <th scope="col">Write</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Super Admin</th>
                <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
              </tr>
      
              <tr>
                  <th>Admin</th>
                  <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                  <td> <input class="form-check-input " id="checkbtn1" type="checkbox" value="" id="flexCheckChecked" ></td>
                  <td> <input class="form-check-input " id="checkbtn1" type="checkbox" value="" id="flexCheckChecked" ></td>
                </tr>
      
                <tr>
                  <th>Employee</th>
                  <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                  <td> <input class="form-check-input " id="checkbtn1" type="checkbox" value="" id="flexCheckChecked" ></td>
                  <td> <input class="form-check-input " id="checkbtn1" type="checkbox" value="" id="flexCheckChecked" ></td>
                </tr>
      
                <tr>
                  <th>Hr Admin</th>
                  <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                  <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                  <td> <input class="form-check-input " id="checkbtn" type="checkbox" value="" id="flexCheckChecked" checked></td>
                </tr>
              </tbody>
        </table>
      
        <!-- <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"><button type="button" class="btn btn-primary">Add User</button></div>
          <div class="col-sm-4"><button type="button" class="btn btn-light">Cancel</button></div>
        </div> -->
        <div class="modal-footer">
        <button type="button" class="btn btn-primary">Add User</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>        
      </div>
      
                  </form>
      </div>
      
    </div>
  </div>
</div>