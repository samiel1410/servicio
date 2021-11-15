<?php
// use App\Http\Controllers\ecuacion;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EcuacionController;
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Projects
    Route::apiResource('projects', 'ProjectsApiController');

    // Folders
    Route::post('folders/media', 'FoldersApiController@storeMedia')->name('folders.storeMedia');
    Route::apiResource('folders', 'FoldersApiController');
   
   
});

Route::get('/ecuacion/{a}/{b}',[EcuacionController::class,'ecuacion'] );