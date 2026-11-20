<?php

use Illuminate\Support\Facades\Route;

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

// Group for the Home and Event related routes
Route::prefix('/')->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/tentang-kami', 'App\Http\Controllers\HomeController@about')->name('about');
    Route::get('/event', 'App\Http\Controllers\HomeController@index')->name('event');
    Route::get('/careers', 'App\Http\Controllers\HomeController@career')->name('career');

    Route::get('/layanan-laporan-tahunan-dan-laporan-keberlanjutan', 'App\Http\Controllers\HomeController@sustainabilityReport')->name('sustainabilityReport');
    Route::get('/jasa-pemeriksaan-dan-manajemen-risiko', 'App\Http\Controllers\HomeController@auditInvestigasi')->name('auditInvestigasi');
    Route::get('/keuangan-akuntansi-dan-pajak', 'App\Http\Controllers\HomeController@financeAccountingTax')->name('financeAccountingTax');
    Route::get('/sustainability-report', 'App\Http\Controllers\HomeController@sustainabilityReport')->name('sustainabilityReport');
    Route::get('/layanan-digital-dan-teknologi', 'App\Http\Controllers\HomeController@digital')->name('digital');

    Route::get('/solusi-bisnis-dan-keuangan', 'App\Http\Controllers\HomeController@solusiBisnisDanKeuangan')->name('solusiBisnisDanKeuangan');
    Route::get('/layanan-hukum-dan-kepatuhan', 'App\Http\Controllers\HomeController@layananHukumDanKepatuhan')->name('layananHukumDanKepatuhan');
    Route::get('/solusi-informasi-dan-teknologi', 'App\Http\Controllers\HomeController@solusiDigitalDanTeknologi')->name('solusiDigitalDanTeknologi');
    Route::get('/pengelolaan-jasa-konstruksi-dan-interior', 'App\Http\Controllers\HomeController@pengelolaanProyekDanRisiko')->name('pengelolaanProyekDanRisiko');
    Route::get('/environment-social-and-governance', 'App\Http\Controllers\HomeController@layananKeberlanjutanDanCsr')->name('layananKeberlanjutanDanCsr');
    Route::get('/riset-dan-analisis', 'App\Http\Controllers\HomeController@risetDanAnalisis')->name('risetDanAnalisis');
});


// Group for Articles related routes
Route::prefix('/articles')->group(function () {
    Route::get('/', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
    Route::get('/{slug}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});


// Admin
Route::prefix('/webadmin')->group(function () {
    Route::get('/', 'App\Http\Controllers\WebAdminController@login');
    Route::get('/login', 'App\Http\Controllers\WebAdminController@login');
    Route::get('/logout', 'App\Http\Controllers\WebAdminController@logout');
    Route::post('/loginStore', 'App\Http\Controllers\WebAdminController@loginStore');

    Route::get('/dashboard', 'App\Http\Controllers\WebAdminController@index');


    Route::prefix('/artikel')->group(function () {
        Route::get('/', 'App\Http\Controllers\WebAdminController@artikel');
        Route::get('/tambah', 'App\Http\Controllers\WebAdminController@artikelCreate');
        Route::get('/hapus/{id}', 'App\Http\Controllers\WebAdminController@artikelDestroy');
        Route::get('/edit/{id}', 'App\Http\Controllers\WebAdminController@artikelShow');
        Route::post('/store', 'App\Http\Controllers\WebAdminController@artikelStore');
    });
    Route::prefix('/kategori')->group(function () {
        Route::get('/', 'App\Http\Controllers\WebAdminController@kategori');
        Route::get('/tambah', 'App\Http\Controllers\WebAdminController@kategoriCreate');
        Route::get('/hapus/{id}', 'App\Http\Controllers\WebAdminController@kategoriDestroy');
        Route::get('/edit/{id}', 'App\Http\Controllers\WebAdminController@kategoriShow');
        Route::post('/store', 'App\Http\Controllers\WebAdminController@kategoriStore');
    });
});


// Group for Artisan commands (can be restricted by middleware or environment)
Route::prefix('/artisan')->group(function () {
    Route::get('/migrate', function () {
        \Artisan::call('migrate');
        return 'Database migration completed!';
    });

    Route::get('/storage-link', function () {
        \Artisan::call('storage:link');
        return 'Storage link created!';
    });
});
