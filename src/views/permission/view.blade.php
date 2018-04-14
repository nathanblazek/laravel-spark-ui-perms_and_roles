
<div class="row">
    <div class="col-sm-12">
        <div class="card card-default">
            <div class="card-header">Manage Permissions</div>
            <div class="card-body row">
                <div class="col-sm-6">
                    <h3>Delete permissions</h3>
                    <ul class="list-group">
                        @foreach($permission as $perm)
                            <li class="list-group-item">{{ $perm->name }}<a href="{{route('admin-permission-delete',[$perm->id])}}" class="confirm" alt="Delete"><i data-feather="trash"></i></a></li>
                        @endforeach
                    </ul>
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
                        <form method="post" action="{{route('admin-permission-store') }}">
                            {!! BootForm::text('name','Create a Permission') !!}
                            @csrf
                            {!! Form::hidden('guard_name','web') !!}
                            {!! BootForm::submit('Create') !!}

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

