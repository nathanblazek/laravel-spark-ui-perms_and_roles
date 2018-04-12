    <div class="col-md-6">
        <h3>Permission</h3>
        @include('admin.permission.edit')
    </div>
    <div class="col-md-6">
        {!! BootForm::open(['model'=>$role,'update'=>'admin-role-update']) !!}
        {!! BootForm::text('name') !!}
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Role Name" />
            <a href="{{route('admin-role-delete',[$role->id]) }}" class="btn btn-danger pull-right confirm">Delete Role</a>
        </div>
        {!! BootForm::close() !!}

    </div>