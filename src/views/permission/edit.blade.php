<ul class="list-group list-group-flush">
    @foreach($permissions as $perm)
        <li class="list-group-item">
            <div class="form-check-group">
                <input role="{{ $role->id }}" value="1" type="checkbox" class="form-check-input perm-record" permission="{{ $perm->id }}"
                @if($role->hasPermissionTo($perm->name))
                    checked="checked"
                        @endif
                >
                <label class="form-check-label" for="{{ $perm->id }}">{{ $perm->name }}</label>
            </div>
        </li>
    @endforeach
</ul>