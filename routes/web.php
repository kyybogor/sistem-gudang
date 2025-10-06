    <?php

    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');

    Route::get('/dashboard', function () {
        if (!session()->has('user')) {
            return redirect('/login');
        }
        return "Selamat datang, " . session('user')->nm_user;
    });
