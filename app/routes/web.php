Route::post('/voter/login', [VoterLoginController::class, 'login'])
    ->middleware('throttle:3,1');

// Public results route
Route::get('/results/{proposition}', [ResultsController::class, 'show'])
     ->name('results.show');

// Admin results route
Route::get('/admin/results/{proposition}', [ResultsController::class, 'show'])
     ->middleware(['auth', 'admin'])
     ->name('admin.results.show');
// Admin PDF export
Route::get('/admin/results/{proposition}/export', [AdminResultsController::class, 'exportPdf'])
     ->name('admin.results.export')
     ->middleware(['auth', 'admin']);
