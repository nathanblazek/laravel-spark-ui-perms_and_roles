
<div class="row">
    <div class="col-sm-12">
        <div class="card card-default">
            <div class="card-header">Manage Roles and Permissions</div>
            <div class="card-body row">
                <div class="col-sm-6">
                    <form class="form" id="roleSelect">
                        <div class="form-group">
                            <label for="roleName">Edit a Role</label>
                                <select name="role_id" class="form-control" id="selectedRole">
                                    <option value="">Choose</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <button type="submit" class="btn btn-success col-md-3">&nbsp;Go&nbsp;</button>

                    </form>
                </div>
                <div class="col-sm-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{route('admin-role-store') }}">
                        {!! BootForm::text('name','Create a Role') !!}
                        @csrf
                        {!! Form::hidden('guard_name','web') !!}
                        {!! BootForm::submit('Create') !!}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-default">
            <div class="card-header">Permissions</div>
            <div class="card-body">
                <div class="row" id="permBox"></div>

            </div>
        </div>
    </div>
</div>
