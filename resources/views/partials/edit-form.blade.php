  <!-- ............... -->
                    
  <div class="" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="/update">
        @csrf

        <input type="hidden" name="id" value="{{$data->id}}">
          <div class="row form-lab">
          <div class="col-sm-12"><input type="text" name="employee_id" class="form-control" value="{{$data->employee_id}}" placeholder="Employee ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-6"><input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" placeholder="First Name ID*" id="inputText"></div>
          <div class="col-sm-6"><input type="text" name="last_name" class="form-control" value="{{$data->last_name}}" placeholder="Last Name ID*" id="inputText"></div>
          </div>
      
          <div class="row form-lab">
          <div class="col-sm-4"><input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Email ID*" id="inputText"></div>
          <div class="col-sm-4"><input type="text" name="mobile_no" class="form-control" value="{{$data->mobile_no}}" placeholder="Mobile No*" id="inputText"></div>
          <div class="col-sm-4">
          <select class="form-select" value="{{$data->select_role}}" name="select_role" aria-label="Default select example">
              <option value="super_admin"{{$data->select_role == "CEO and Founder" ? 'selected' : ''}}>CEO and Founder</option>
              <option value="admin"{{$data->select_role == "Team Lead" ? 'selected' : ''}}>Team Lead</option>
              <option value="employee1"{{$data->select_role == "App Designer" ? 'selected' : ''}}>App Designer</option>
              <option value="employee2"{{$data->select_role == "Web Developer" ? 'selected' : ''}}>Web Developer</option>
              <option value="hr"{{$data->select_role == "HR Admin" ? 'selected' : ''}}>HR Admin</option>
            </select>
          </div>
          </div>
      
          <div class="row form-lab">
      <div class="col-sm-4"><input type="text"name="username" value="{{$data->username}}" class="form-control" placeholder="Username*" id="inputText"></div>
      <div class="col-sm-4"><input type="text" name="password" class="form-control" value="{{$data->password}}" placeholder="Password*" id="inputText"></div>
      <div class="col-sm-4"><input type="text" name="confirm_password" class="form-control" value="{{$data->confirm_password}}" placeholder="Confirm Password*" id="inputText"></div>
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
      
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="color:white" >update User</button> 
      </div>
      
                  </form>
      </div>
      
    </div>
  </div>
</div>

<!-- ............. -->