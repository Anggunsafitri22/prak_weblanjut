use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Rute dari `form-controller`
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Rute dari `dev`
Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'showProfile']);
