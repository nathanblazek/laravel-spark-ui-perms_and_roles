<?php

namespace ncb\PermsAndRoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    public function view(){
        return view('admin.permission.view');
    }
    public function delete($perm_id){
        $perm= Permission::find($perm_id);
        if($perm){
            $perm->delete();
            return redirect('/spark/kiosk#/permissions');
        }
        return abort(404);
    }


    public function store(Request $request){
        $perm = new Permission();
        if($perm->storeModel($request))
            return redirect('/spark/kiosk#/permissions');
        else {
            return abort(404);
        }
    }
}
