
  <div class="table-responsive  mt-1">
    <table class="table select-table">
      <thead>
        <tr>
          <th>Name</th>
          <th></th>
          <th>Create Date</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>
    
      <tbody>
      @foreach($data as $data)
        <tr>
          <td>
          <div class="d-flex ">
              <img src="admin/images/faces/face1.jpg" alt="">
              <div>
                <h6>{{$data['first_name']}} {{$data['last_name']}}  </h6>
                <!-- <p>Head admin</p> -->
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex ">

            @if( $data->select_role == 'CEO and Founder')
            <button type="submit"  style="color:white" class="btn btn-danger">Super Admin</button>
            @elseif( $data->select_role == 'Team Lead')
            <button type="submit"  style="color:white" class="btn btn-primary">Admin</button>
            @elseif( $data->select_role == 'HR Admin')
            <button type="submit"  style="color:white" class="btn btn-success">HR Admin</button>
            @elseif( $data->select_role == 'App Designer')
            <button type="submit"  style="color:black" class="btn btn-light">Employee</button>
            @elseif( $data->select_role == 'Web Developer')
            <button type="submit"  style="color:black" class="btn btn-light">Employee</button>
            @endif

            </div>
          </td>
          <td>
            <h6>23, Dec 2016</h6>
            <!-- <p>company type</p> -->
          </td>
          <td>
            <div>
              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                <p class="text-success">{{$data['select_role']}}</p>               
</div>
            </div>
          </td>
          <td><a href="{{url('edit-users', $data->id)}}"><i class="mdi mdi-pencil" style="font-size:1.3rem; color:black; text-decoration:none"></i></a></td>
          <td><a href="{{url('delete-users', $data->id)}}"><i class="mdi mdi-delete" style="font-size:1.3rem; color:black; text-decoration:none"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>