<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AccountingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('accounting/jurnal-umum', [AccountingController::class, 'index'])->name('accounting.jur_umum.index');

Route::get('accounting/adj-entry', [AccountingController::class, 'adj_entry'])->name('accounting.adj_entry.index'); //Jurnal Penyesuaian
Route::get('accounting/balance-sheet', [AccountingController::class, 'balance_sheet'])->name('accounting.balance_sheet.index'); //Neraca
Route::get('accounting/dash-report-account', [AccountingController::class, 'dash_report_account'])->name('accounting.dash_report_account.index'); //Dashboard Report
Route::get('accounting/gen-journal', [AccountingController::class, 'gen_journal'])->name('accounting.gen_journal.index'); // jurnal umum
Route::get('accounting/gen-ledger', [AccountingController::class, 'gen_legder'])->name('accounting.gen_legder.index'); // buku besar
Route::get('accounting/opening-balance', [AccountingController::class, 'opening_balance'])->name('accounting.opening_balance.index'); // saldo awal