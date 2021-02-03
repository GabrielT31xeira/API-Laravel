<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('listMember',[MemberController::class,'listMembers']);


Route::get("list/",[DeviceController::class,'list']);
Route::get("list/{id}",[DeviceController::class,'listID']);
Route::post("addDevice",[DeviceController::class,'add']);
Route::put("update/{id}",[DeviceController::class,'update']);
Route::get("seach/{name}",[DeviceController::class,'seach']);

