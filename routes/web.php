<?php

use App\Http\Controllers\Admin\Aduan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\EventController;
use App\Http\Controllers\Landing\ProfileDesa;
use App\Http\Controllers\Landing\PersuratanController;
use App\Http\Controllers\Landing\UmkmController;

use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Admin\AgendaDesa;
use App\Http\Controllers\Admin\Persuratan;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;


// ==========================================
// LANDING ROUTES (Frontend)
// ==========================================

// ----------- HOME -----------
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/Aduanwarga', [HomeController::class, 'aduan'])->name('aduan');
Route::get('/Bansos', [HomeController::class, 'Bansos'])->name('Bansos');
Route::get('/Darurat', [HomeController::class, 'Darurat'])->name('Darurat');

// ----------- BLOG -----------
Route::get('/blog', [BlogController::class, 'Blog'])->name('Blog');
Route::get('/blog/blogdetail', [BlogController::class, 'blogdetail'])->name('blogdetail');

// ----------- CONTACT -----------
Route::get('/contact', [ContactController::class, 'ViewContact'])->name('contact');

// ----------- PROFILE DESA -----------
Route::get('/profile/sejarahdesa', [ProfileDesa::class, 'ViewSejarahDesa'])->name('SejarahDesa');
Route::get('/profile/visimisi', [ProfileDesa::class, 'ViewVisiMisi'])->name('ViewVisiMisi');
Route::get('/profile/kelembagaan', [ProfileDesa::class, 'ViewKelembagaan'])->name('ViewKelembagaan');
Route::get('/profile/kelembagaan/PemerintahDesa', [ProfileDesa::class, 'ViewKelembagaanDetail'])->name('ViewKelembagaanDetail');
Route::get('/profile/letakgeografis', [ProfileDesa::class, 'ViewLetakGeografis'])->name('Viewletakgeografis');
Route::get('/profile/demografi', [ProfileDesa::class, 'ViewDemografi'])->name('Viewdemografi');
Route::get('/profile/potensidesa', [ProfileDesa::class, 'ViewPotensiDesa'])->name('ViewPotensiDesa');

// ----------- UMKM -----------
Route::get('/umkm', [UmkmController::class, 'ViewUmkm'])->name('Viewumkm');
Route::get('/umkm/detail', [UmkmController::class, 'ViewDetailUmkm'])->name('ViewUmkm');

// ----------- PERSURATAN -----------
Route::get('/persuratan', [PersuratanController::class, 'viewpersuratan'])->name('persuratan');
Route::post('/submit-skck', [PersuratanController::class, 'submitSkck'])->name('submit.skck');
Route::post('/submit-keterangan-kematian', [PersuratanController::class, 'submitKematian'])->name('submit.kematian');
Route::post('/submit-kelahiran', [PersuratanController::class, 'submitKelahiran'])->name('submit.kelahiran');
Route::post('/submit-keramaian', [PersuratanController::class, 'submitKeramaian'])->name('submit.keramaian');


// ----------- EVENT -----------
Route::get('/event', [EventController::class, 'viewevent'])->name('event');
Route::get('/event/eventdetail', [EventController::class, 'vieweventdetail'])->name('eventdetail');


// ==========================================
// ADMIN ROUTES (Backend)
// ==========================================

// ----------- DASHBOARD -----------
Route::get('/admin', [Home::class, 'homeAdmin'])->name('homeAdmin');
// ----------- ADUAN -----------
Route::get('/viewAduan', [Aduan::class, 'viewaduan'])->name('viewaduan');
Route::post('/storeaduan', [HomeController::class, 'storeaduan'])->name('aduan.store');
Route::post('/acceptaduan/{id}', [Aduan::class, 'acceptAduan'])->name('acceptaduan');

// ----------- PERSURATAN -----------
Route::get('/viewSurat', [Persuratan::class, 'viewSurat'])->name('persuratan.view');
Route::get('/deletepersuratan/{id}', [Persuratan::class, 'destroy'])->name('persuratan.destroy');


// ----------- BLOG -----------
Route::get('/blogviewadmin', [AdminBlogController::class, 'BlogView'])->name('admin.blogs.view');
Route::get('/blogform', [AdminBlogController::class, 'BlogForm'])->name('admin.blogs.form');
Route::post('/blogpost', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');

// ----------- SAMBUTAN KADES -----------
Route::get('/sambutanKades', [Home::class, 'sambutanKades'])->name('viewsambutanKades');
Route::get('/editsambutan/{id}', [Home::class, 'editsambutan'])->name('editsambutan');
Route::post('/updatesambutan/{id}', [Home::class, 'updatesambutan']);

// ----------- TOTAL PENDUDUK -----------
Route::get('/Penduduk', [Home::class, 'Penduduk'])->name('viewPenduduk');
Route::get('/editpenduduk/{id}', [Home::class, 'editpenduduk'])->name('editpenduduk');
Route::get('/tambahpenduduk', [Home::class, 'tambahpenduduk'])->name('tambahpenduduk');
Route::post('/updatependuduk/{id}', [Home::class, 'updatependuduk']);
Route::post('/storependuduk', [Home::class, 'storependuduk']);

// ----------- RT & RW -----------
Route::get('/Rt', [Home::class, 'Rt'])->name('viewRt');
Route::get('/tambahrt', [Home::class, 'tambahrt'])->name('viewtambahrt');
Route::post('/storert', [Home::class, 'storert']);
Route::get('/editrt/{id}', [Home::class, 'editrt'])->name('editrt');
Route::post('/updatert/{id}', [Home::class, 'updatert']);
Route::get('/deletert/{id}', [Home::class, 'deletert']);

Route::get('/Rw', [Home::class, 'Rw'])->name('viewRw');
Route::get('/tambahrw', [Home::class, 'tambahrw'])->name('viewtambahrw');
Route::post('/storerw', [Home::class, 'storerw']);
Route::get('/editrw/{id}', [Home::class, 'editrw'])->name('editrw');
Route::post('/updaterw/{id}', [Home::class, 'updaterw']);
Route::get('/deleterw/{id}', [Home::class, 'deleterw']);





// ----------- AGENDA DESA -----------
Route::get('/Agenda', [AgendaDesa::class, 'AgendaDesa'])->name('viewAgendaDesa');
Route::get('/tambahagendadesa', [AgendaDesa::class, 'tambahagendadesa'])->name('viewtambahagendadesa');
Route::post('/insertkegiatan', [AgendaDesa::class, 'insertkegiatan']);
Route::get('/editagenda/{id}', [AgendaDesa::class, 'editagenda'])->name('editagenda');
Route::post('/updateagenda/{id}', [AgendaDesa::class, 'updateagenda']);
Route::get('/deleteagenda/{id}', [AgendaDesa::class, 'delete'])->name('agendadelete');

// ----------- TESTIMONIAL -----------
Route::get('/testimonial', [Home::class, 'testimonialDesa'])->name('viewtestimonialDesa');
Route::get('/tambahtestimoni', [Home::class, 'tambahtestimoni'])->name('viewtambahtestimoni');
Route::post('/inserttestimoni', [Home::class, 'inserttestimoni']);
Route::get('/edittestimoni/{id}', [Home::class, 'edittestimoni'])->name('edittestimoni');
Route::post('/updatetestimoni/{id}', [Home::class, 'updatetestimoni']);
Route::get('/deletetestimoni/{id}', [Home::class, 'deletetestimoni']);
Route::post('/accepttestimonial/{id}', [Home::class, 'accepttestimonial']);
Route::post('/rejecttestimonial/{id}', [Home::class, 'rejecttestimonial']);

// ----------- SEJARAH DESA -----------
Route::get('/sejarahdesa', [Home::class, 'Penduduk'])->name('viewPenduduk');
Route::get('/sejarahdesa/{id}', [Home::class, 'editpenduduk'])->name('editpenduduk');
Route::post('/updatesejarah/{id}', [Home::class, 'updatependuduk']);
