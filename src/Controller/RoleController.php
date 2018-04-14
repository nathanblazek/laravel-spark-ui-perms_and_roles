<?php

namespace ncb\PermsAndRoles\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Project\Role;
use Project\Permission;


class RoleController extends Controller
{
    public function view(){
        return 'roles are here...';
    }

    public function edit($role_id){
        $role = Role::find($role_id);
        if($role)
            return view('admin.role.edit',['permissions'=>Permission::all(),'role'=>$role]);
        else
            return "No role found with an ID of $role_id";
    }

    public function update(Request $request, $role_id){
        $role = Role::find($role_id);
        if($role){
            if($role->updateModel($request))
                return redirect('/spark/kiosk#/roles');
            else
                abort(404);
        }

    }
    public function delete($role_id){
        $role= Role::find($role_id);
        if($role){
            $role->delete();
            return redirect('/spark/kiosk#/roles');
        }
        return abort(404);
    }
    public function togglePermission($role_id,$permission_id){
        $success = false;
        $role = Role::find($role_id);

        if($role){
            $success = $role->togglePermission($permission_id);
        }
        return response()->json(['success'=> $success]);
    }

    public function store(Request $request){
        $role = new Role();

        if (!$role->storeModel($request))
            return abort(404);
        else {
            return redirect('/spark/kiosk#/roles');
        }
    }
}
