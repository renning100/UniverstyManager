<?php

use App\Http\Controllers\Admin\Fairs\CareerTalkFairController;
use App\Http\Controllers\Admin\Fairs\FairsController;
use App\Http\Controllers\Admin\School\Info\ChangePasswordController;
use App\Http\Controllers\Admin\School\Info\SchoolCounselorController;
use App\Http\Controllers\Admin\School\Info\UserBioController;
use App\Http\Controllers\User\SelectSchoolController;
use App\Http\Livewire\Pages\UniversitiesList;


Route::middleware(['setup-locale', 'auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->name('admin.')->group(function () {
        Route::get('select-school',[SelectSchoolController::class,'index'])->name('selectSchool');
        Route::get('set-school/{school}',[SelectSchoolController::class,'setSchool'])->name('setSchool');

        Route::middleware('school-selected')->group(function (){
            Route::get('/dashboard', function () {
                return redirect()->route('admin.school.information');
            })->name('dashboard');
            Route::name('school.')->prefix('school')->group(function () {
                Route::get('/', function () {
                    return redirect()->route('admin.school.information');
                })->name('show');
                Route::view('share-qr', 'pages.school.school-qr-page' )->name('shereQr');
                Route::view('information', 'pages.school.school-information')->name('information');
                Route::name('info.')->group(function () {
                    //counselor
                    Route::name('counselor.')->prefix('counselor')->controller(SchoolCounselorController::class)
                        ->group(function () {
                            Route::get('/', 'index')->name('show');
                            Route::post('save', 'save')->name('save');
                        });

                    //Phone numbers
                    Route::post('phone-numbers/save', [UserBioController::class, 'save'])->name('phonenumbers.save');
                    //Change Password
                    Route::post('change-password/save', [ChangePasswordController::class, 'save'])->name('changepassword.save');
                });
                //Fair
                Route::name('fair.')->prefix('fair')->controller(FairsController::class)->group(function () {
                    Route::get('/', 'index');
                    Route::get('registered-universities/{fair}', 'registeredUniversities')->name('registeredUniversities');
                    Route::get('list', 'fairList')->name('list');
                    Route::get('create', 'create')->name('create');
                    Route::get('edit/{fair}', 'edit')->name('edit');
                    Route::get('view/{fair}', 'view')->name('view');
                });
                //Career Talks
                Route::name('career-talk.')->prefix('career-talk')->controller(CareerTalkFairController::class)->group(function () {
                    Route::get('/', 'index');
                    Route::get('registered-universities/{fair}', 'registeredUniversities')->name('registeredUniversities');
                    Route::get('list', 'fairList')->name('list');
                    Route::get('create', 'create')->name('create');
                    Route::get('edit/{fair}', 'edit')->name('edit');
                    Route::get('view/{fair}', 'view')->name('view');
                });
                //statistics
                Route::name('statistics.')->prefix('statistics')->group(function (){
                    Route::get('/',function (){
                        return redirect()->route('admin.school.statistics.registrations.list');
                    })->name('show');
                    //
                    Route::name('registrations.')->prefix('registrations')->group(function (){
                        Route::view('list','pages.statistics.registrations.registration-list')->name('list');
                        Route::view('coverage','pages.statistics.registrations.registration-coverage-percentage')->name('coverage');
                    });
                    //
                    Route::name('universities.')->prefix('universities')->group(function (){
                        Route::view('/','pages.statistics.universities.students-universities-list')->name('show');
                        Route::view('student-list','pages.statistics.universities.list-of-university-students-by-students')->name('studentList');
                        Route::view('coverage','pages.statistics.universities.students-university-statistic')->name('coverage');
                        Route::get('selected-by-students/{university}',function (){})->name('selectedByStudent');
                    });
                    //
                    Route::name('majors.')->prefix('majors')->group(function (){
                        Route::view('/','pages.statistics.majors.students-majors-statistic')->name('show');
                        Route::view('student-list','pages.statistics.majors.students-selected-a-major-list')->name('studentList');
                        Route::view('coverage','pages.statistics.majors.students-majors-statistic-pie')->name('coverage');
                        Route::get('selected-by-students/{major}',function (){})->name('selectedByStudent');
                    });
                    //
                    Route::name('destinations.')->prefix('destinations')->group(function (){
                        Route::view('list','pages.statistics.destinations.list-of-destinations-selected-by-students')->name('show');
                        Route::view('student-list','pages.statistics.destinations.students-destination-list')->name('studentList');
                        Route::view('coverage','pages.statistics.destinations.students-destination-statistic')->name('coverage');
                        Route::get('selected-by-students/{destination}',function (){})->name('selectedByStudent');
                    });
                });
            });
            Route::redirect('user/profile',url('admin/school/information?t=user-personal-info'))->name('user.profile');
            Route::name('university.')->prefix('university')->group(function () {
                Route::redirect('', 'list');
                Route::view('list', 'pages.universities.universities-list')->name('list');
            });

            Route::view('my-calander','pages.user.user-calander-page')->name('calander');
        });
    });
