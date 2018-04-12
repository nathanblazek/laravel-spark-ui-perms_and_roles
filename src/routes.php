<?php

//Developers Only
Route::middleware(['dev'])->group(function () {
    Route::prefix('admin')->group(function() {
        // PERMISSIONS
        Route::get('permission/view', 'Admin\PermissionController@view')->name('admin-permission-view');
        Route::get('permission/{role_id}/delete', 'Admin\PermissionController@delete')->name('admin-permission-delete');
        Route::post('permission/store', 'Admin\PermissionController@store')->name('admin-permission-store');

        //ROLES
        Route::get('role/{role_id}/permission/{permission_id}/toggle', 'Admin\RoleController@togglePermission')->name('admin-role-permission-toggle');
        Route::get('role/{role_id}/edit', 'Admin\RoleController@edit')->name('admin-role-edit');
        Route::post('role/store','Admin\RoleController@store')->name('admin-role-store');
        Route::put('role/{role_id}/update','Admin\RoleController@update')->name('admin-role-update');
        Route::get('role/{role_id}/delete','Admin\RoleController@delete')->name('admin-role-delete');
    });
});