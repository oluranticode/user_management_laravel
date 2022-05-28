
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="{{url('/adduser')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="row form-lab">
          <div class="col-sm-12"><input type="text" name="employee_id" class="form-control" placeholder="Employee ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-6"><input type="text" name="first_name" class="form-control" placeholder="First Name ID*" id="inputText"></div>
          <div class="col-sm-6"><input type="text" name="last_name" class="form-control" placeholder="Last Name ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-4"><input type="email" name="email" class="form-control" placeholder="Email ID*" id="inputText"></div>
          <div class="col-sm-4"><input type="number" name="mobile_no" class="form-control" placeholder="Mobile No*" id="inputText"></div>
          <div class="col-sm-4">
              <select class="form-select" name="select_role" aria-label="Default select example">
              <option value="super_admin" selected>CEO and Founder</option>
              <option value="admin">Team Lead</option>
              <option value="employee1">App Designer</option>
              <option value="employee2">Web Developer</option>
              <option value="hr">HR Admin</option>
            </select>
          </div>
          </div>
      
          <div class="row form-lab">
      <div class="col-sm-4"><input type="text" name="username" class="form-control" placeholder="Username*" id="inputText"></div>
      <div class="col-sm-4"><input type="password" name="password" class="form-control" placeholder="Password*" id="inputText"></div>
      <div class="col-sm-4"><input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password*" id="inputText"></div>
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
        <div class="modal-footer1" style="display:flex; align-items:right">
        <button type="submit" name="add_user" class="btn btn-primary" style="color:white" >Add User</button>
        <!-- <input type="submit" name="add_user" class="btn btn-primary" value="Add User"> -->
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>        
      </div>
                  </form>
      </div>
     
      
    </div>
  </div>
</div>