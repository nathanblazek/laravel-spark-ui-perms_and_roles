<?php

//Developers Only
Route::middleware(['dev'])->group(function () {
    Route::prefix('admin')->group(function() {
        // PERMISSIONS
        Route::get('permission/view', 'ncb\PermsAndRoles\Controller\PermissionController@view')->name('admin-permission-view');
        Route::get('permission/{role_id}/delete', 'ncb\PermsAndRoles\Controller\PermissionController@delete')->name('admin-permission-delete');
        Route::post('permission/store', 'ncb\PermsAndRoles\Controller\PermissionController@store')->name('admin-permission-store');

        //ROLES
        Route::get('role/{role_id}/permission/{permission_id}/toggle', 'ncb\PermsAndRoles\Controller\RoleController@togglePermission')->name('admin-role-permission-toggle');
        Route::get('role/{role_id}/edit', 'ncb\PermsAndRoles\Controller\RoleController@edit')->name('admin-role-edit');
        Route::post('role/store','ncb\PermsAndRoles\Controller\RoleController@store')->name('admin-role-store');
        Route::put('role/{role_id}/update','ncb\PermsAndRoles\Controller\RoleController@update')->name('admin-role-update');
        Route::get('role/{role_id}/delete','ncb\PermsAndRoles\Controller\RoleController@delete')->name('admin-role-delete');
    });
});