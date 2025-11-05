<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MailController::class, 'index'])->name('index');
Route::post('/send-email', [MailController::class, 'SendMail'])->name('SendEmail');
// Route::get('/send-email', [MailController::class, 'sent']);
// Route::post('/', [MailController::class, 'create']);

