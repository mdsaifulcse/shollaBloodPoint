<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
// frontend ---------------------------------------
Route::get('/','BloodPointController@index');
Route::get('/all-eligible-donors','BloodPointController@allEligibleDonors');
Route::get('/donor-profile/{id}','BloodPointController@donorProfile');
Route::get('/top-ten-donor-profile/{useId}','BloodPointController@topDonorProfile');
Route::get('/about.html','BloodPointController@bloodPointInfo');
Route::get('/member-register.html','MemberRegistrationController@memberRegistration');
Route::post('/user-member-register','MemberRegistrationController@registerAMember');

Route::get('/load-thana-by-district/{id}','MemberRegistrationController@loadThanaUpazila');
Route::get('/load-union-by-thana/{id}','UnionController@loadUnionInfo');
Route::get('/load-village-by-union/{id}','VillageController@loadVillageInfo');

Route::get('/search-blood-donor.html','SearchBloodDonorController@searchRequiredBloodDonor');
Route::get('/blood-banks-list.html','BloodBankListController@yourBloodBanksLists');
Route::get('/blood-request.html','BloodRequestController@requestFroBlood');
Route::post('/blood-request','BloodRequestController@submitBloodRequest');
Route::get('/blood-request-list.html','BloodRequestController@listOfBloodRequest');
Route::post('/user-message','ContactController@messageFormUser');
Route::get('/donor-blood-group/{group}/{id}','BloodDonatesController@bloodDonorByGroup');
Route::get('/active-donors-by-group/{id}','BloodDonatesController@showAllDonorsByGroup');
Route::get('/page/{url}','PageViewController@myBloodPage');
Route::get('/show-notice/{id}','BloodPointController@noticeDetails');
Route::get('/about-organization/{id}','BloodPointController@detailsAboutOranization');
Route::get('/photo-gallery','BloodPointController@photoGallery');
Route::get('/contact.html','ContactController@contactFunction');
Route::get('/founder-members-list.html','BloodPointController@showAllFounderMembersList');
Route::get('/show-active-founder-members','BloodPointController@showAllActiveFounderMembers');


Route::get('/register',function (){
    return redirect('/404');
});

Route::get('/logout',function (){
    return redirect('/404');
});



// backend ---------------------------------------
Route::middleware(['auth'])->group(function () {

    Route::get('/home',function (){
        if (auth()->user()->type===2){
            return redirect('/member-area');

        }elseif (auth()->user()->type==1 || auth()->user()->type==3){
            return redirect('/dashboard');
        }
    });

    // for member access area ------------
    Route::middleware(['member'])->group(function (){
        Route::get('/member-area','MemberRegistrationController@showMemberProfile');
        Route::get('/edit-profile','MemberRegistrationController@memberEditProfile');
        Route::post('/edit-profile','MemberRegistrationController@updateMemberProfile');
        Route::get('/last-blood-donation','BloodDonatesController@memberLastBloodDonation');
        Route::post('/last-blood-donation','BloodDonatesController@saveLastBloodDonation');
        Route::get('/blood-donation-details','BloodDonatesController@memberBloodDonationDetails');
        Route::get('/member-change-password','BloodPointController@memberChangePass');
        Route::post('/member-change-password','BloodPointController@changeMemberPassword');
    });


    // for admin access area----------------
    Route::group(['middleware' => ['admin']], function() {
        Route::get('/dashboard', 'HomeController@index');
        Route::resource('/profile', 'ProfileController');
        Route::resource('/notice','NoticeController');
        Route::resource('member-register','MemberController');
        Route::get('volunteer-members','MemberController@volunteerMembersList');
        Route::get('all-volunteers-show','MemberController@showVolunteerMembers');

        Route::get('/donors-by-group/{id}','HomeController@donorsByGroup');
        Route::get('/show-donors-by-group/{id}','HomeController@showDonorsByGroup');
        Route::get('/member-blood-donation','MemberController@newBloodDonation');
        Route::get('/save-donation-record/{id}','BloodDonatesController@recordBloodDonation');
        Route::get('/show-user-message','ContactController@showUserMessage');
        Route::get('/approve-member','MemberController@newWaitingMember');
        Route::get('/approve-new-member/{id}','MemberController@approveNewMember');
        Route::get('/all-members-show','MemberController@showMembers');
        Route::get('/load-thana/{id?}','MemberController@loadThanaUpazila');
        Route::post('change-password',['as'=>'password','uses'=>'UsersController@password']);
        Route::get('change-password','UsersController@changePass');
        Route::get('change-member-password/{useId}','UsersController@changeMemberPasswordByAdmin');
        Route::get('blood-receiver-list','SearchBloodDonorController@showBloodReceiverList');

    });

    // for superadmin access area----------------
    Route::group(['middleware' => ['superadmin']], function() {

        Route::resource('/blood-group','BloodGroupController');
        Route::resource('/blood-bank','BloodBankController');
        Route::resource('/manage-slider','SliderController');

        Route::resource('/primary-info', 'PrimaryInfoController');
        Route::resource('/menu','MenuController'); // for admin panel -- manage-slider
        Route::resource('/frontend-menu','FrontendMenuController'); // for  frontend --
        Route::resource('/frontend-sub-menu','FrontendSubMenuController'); // for  frontend --
        Route::resource('/sub-menu','SubMenuController');
        Route::resource('/sub-sub-menu','SubSubMenuController');

        Route::resource('/district','DistrictController');
        Route::resource('/thana-upazila','ThanaUpazilaController');
        Route::resource('/union','UnionController');
        Route::resource('/village','VillageController');


        Route::get('all-founder-member-show','MemberController@showAllFounderMembers'); 

        Route::get('/delete-blood-donation/{id}','BloodDonatesController@deleteNewBloodDonation');
        Route::get('/donors-by-year','BloodDonatesController@showBloodDonorsByYear');


        Route::post('/delete-user-message','ContactController@deleteUserMessage');
        Route::resource('/pages','PageController');
        Route::resource('/president-speech','PresidentSpeechController');
        Route::resource('/users', 'UsersController');
        Route::resource('/founder-members', 'FounderMembersController');

        Route::get('blood-receiver-list','SearchBloodDonorController@showBloodReceiverList');
        Route::get('show-all-blood-receivers','SearchBloodDonorController@showActiveBloodReceiverList');
        Route::resource('/gallery','PhotoGalleryController');
    });
});

//Clear Cache facade value:
Route::get('/clear-cache','CacheClearController@clearCache');
//Clear View cache:
Route::get('/view-clear','CacheClearController@viewClear');

//Clear Route cache:
Route::get('/route-clear','CacheClearController@routeCache');
//Seeding
Route::get('/seeding','CacheClearController@seed');
//Migrate
Route::get('/migrate','CacheClearController@migrate');

// Wrong url redirect to dashboard page

//Route::get('register', function () {
//    return redirect('/');
//});
