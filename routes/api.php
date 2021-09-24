<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LinkmanController;
use App\Http\Controllers\AuthController;

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
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/file',[UploadController::class,'updateStore']);


Route::middleware(['auth:sanctum'])->prefix('server')->group(function(){
    Route::apiResource('/categories',CategoryController::class);
    Route::apiResource('/projects',ProjectController::class);
    Route::apiResource('/banners',BannerController::class);
    Route::apiResource('/linkman',LinkmanController::class);
});

Route::prefix('client')->group(function(){
    Route::apiResource('/categories',CategoryController::class)->only(['index']);
    Route::apiResource('/projects',ProjectController::class)->only(['show']);
    Route::get('/categories/projects/{category_id}',[CategoryController::class,'project']);
    Route::get('/categories/banners/{category_id}',[CategoryController::class,'banner']);
    Route::apiResource('/linkmen',LinkmanController::class)->only(['index']);
});





