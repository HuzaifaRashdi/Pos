<x-app-layout>
<x-slot name="header">

    </x-slot>

<div class="container">
    <div class="col-lg-12">
        <div class="row">
           <div class="col-md-9">
           <div class="card">
                <div class="card-header">
                    <h4 style="float: left;">Add Users</h4>
                    <a href="#" style="float: right;" class="btn btn-dark" data-toggle="modal" data-target="#adduser">
                    <i class="fa fa-plus"></i>Add New Users </a></div>
                <div class="card-body">

                <table class="table table-bordered table-left">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>@if ($user->is_admin==1)Admin
                                @else Cashier
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edituser{{$user->id}}"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteuser{{$user->id}}"><i class="fa fa-trash"></i>Del</a>
                                </div>
                            </td>
                        </tr>


                        <!-- Model of Editing User -->

<div class="modal right fade" id="edituser{{$user->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Edit Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        {{$user->id}}
      </div>
      <div class="modal-body">

      <form action="{{url('users',$user->id) }}" method="post">
          @csrf 
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" value="{{$user->name}}" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" value="{{$user->email}}" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Phone</label>
              <input type="text" name="phone" id="" value="{{$user->phone}}" class="form-control">
          </div>

          <div class="form-group"> 
              <label for="">Address</label>
              <input type="address" name="address" id="" value="{{$user->address}}" class="form-control">
          </div>

          <div class="form-group"> 
              <label for="">Password</label>
              <input type="password" name="password" id="" value="{{$user->password}}" class="form-control" >
          </div>

          <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="confirm_password" name="confirm_password" id="" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Role</label>
              <select name="is_admin" id="" class="form-control">
                  <option value="1" @if($user->is_admin==1)
                  selected    
                  @endif>Admin</option>
                  <option value="2"  @if($user->is_admin==2)
                      selected
                  @endif>Cashier</option>
              </select>
          </div>

        <div class="modal-footer">
            <button class="btn btn-warning btn-block">Update</button>
        </div>

      </form>

      </div>
    </div>
  </div>
</div>


<!-- Model of Deleting User -->

<div class="modal right fade" id="deleteuser{{$user->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Delete User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        {{$user->id}}
      </div>
      <div class="modal-body">

      <form action="{{url('users',$user->id) }}" method="get">
          @method('delete')
          @csrf 
         <p>Are you sure are you want to delete this {{$user->name}}?</p>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button class="btn btn-danger" >Delete</button>
        </div>

      </form>

      </div>
    </div>
  </div>
</div>

                        @endforeach
                    </tbody>
                </table>

                </div>

            </div>
           </div>

           <div class="col-md-3">
           <div class="card">
                <div class="card-header"><h4>Search Users</h4></div>
                <div class="card-body">
                  ................
                </div>

            </div>
           </div>
        </div>
    </div>
</div>

<!-- Model of Adding New Users -->

<div class="modal right fade" id="adduser" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Add Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{url('users') }}" method="post">
          @csrf 
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Phone</label>
              <input type="text" name="phone" id="" class="form-control">
          </div>

          <div class="form-group"> 
              <label for="">Address</label>
              <input type="address" name="address" id="" class="form-control">
          </div>

          <div class="form-group"> 
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" >
          </div>

          <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" name="confirm_password" id="" class="form-control">
          </div>

          <div class="form-group">
              <label for="">Role</label>
              <select name="is_admin" id="" class="form-control">
                  <option value="1">Admin</option>
                  <option value="2">Cashier</option>
              </select>
          </div>

        <div class="modal-footer">
            <button class="btn btn-primary btn-block">Save User</button>
        </div>

      </form>

      </div>
    </div>
  </div>
</div>



<style>
    .modal.right .modal-dialog{
        /* position: absolute; */
        top:0;
        right:0;
        margin-right: 14.5vh;
    }
    .modal.fade:not(.in).right .modal-dialog{

        -webkit-transform: translate3d(25%,0,0);
        transform:translate3d(25%, ,0,0);
    }
</style>

</x-app-layout>
