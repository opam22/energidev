<?php
use App\Kabupaten;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
contoh server side datatables
*/
Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);



Route::get('dataebt/ajax', [
		'as' => 'dataebt-ajax', 'uses' => 'DatatablesController@ebtData'
	]);
Route::get('lihatebt/ajax/{id}', [
		'as' => 'lihatebt-ajax', 'uses' => 'DatatablesController@lihatebtData'
	]);

Route::get('report/ajax', [
		'as' => 'report-ajax', 'uses' => 'DatatablesController@reportData'
	]);
Route::get('report/ajax/prov/{id}', [
		'as' => 'report-ajax-prov', 'uses' => 'DatatablesController@reportProvData'
	]);
Route::get('report/ajax/kab/{id}', [
		'as' => 'report-ajax-kab', 'uses' => 'DatatablesController@reportKabData'
	]);
Route::get('report/ajax/kec/{id}', [
		'as' => 'report-ajax-kec', 'uses' => 'DatatablesController@reportKecData'
	]);
Route::get('report/ajax/kel/{id}', [
		'as' => 'report-ajax-kel', 'uses' => 'DatatablesController@reportKelData'
	]);
	
Route::get('/', [
		'as' => 'index', 'uses' => 'IndexController@index'
	]);
Route::post('login/do', [
		'as' => 'do-login', 'uses' => 'Auth\LoginController@doLogin'
	]);
Route::get('logout', [
		'as' => 'do-logout', 'uses' => 'Auth\LogoutController@doLogout'
	]);
Route::get('profile', [
        'as' => 'profile', 'uses' => 'ProfileController@index'
    ]);
Route::get('profile/edit', [
        'as' => 'profile-edit', 'uses' => 'ProfileController@edit'
    ]);
Route::patch('profile/edit/{id}', [
        'as' => 'profile-update', 'uses' => 'ProfileController@update'
    ]);
Route::get('profile/edit/password', [
        'as' => 'profile-edit-password', 'uses' => 'ProfileController@editPassword'
    ]);
Route::post('profile/update/password', [
        'as' => 'profile-update-password', 'uses' => 'ProfileController@updatePassword'
    ]);

Route::group(['prefix' => 'admin'], function(){
    
    Route::get('/', [
            'as' => 'admin-index', 'uses' => 'AdminIndexController@index'
        ]);

    Route::get('management/users', [
            'as' => 'management-user', 'uses' => 'ManagementUserController@index'
        ]);
    Route::get('management/users/add', [
            'as' => 'management-user-add', 'uses' => 'ManagementUserController@add'
        ]);
    Route::post('management/users/store', [
            'as' => 'management-user-store', 'uses' => 'ManagementUserController@store'
        ]);

    Route::get('data/provinsi', [
            'as' => 'data-provinsi', 'uses' => 'DataProvinsiController@index'
        ]);
    Route::get('data/provinsi/datatables', [
            'as' => 'data-provinsi-datatables', 'uses' => 'DataProvinsiController@datatables'
        ]);
    Route::get('data/provinsi/add', [
    		'as' => 'data-provinsi-add', 'uses' => 'DataProvinsiController@add'
    	]);
    Route::post('data/provinsi/store', [
    		'as' => 'data-provinsi-store', 'uses' => 'DataProvinsiController@store'
    	]);
    Route::get('data/provinsi/edit/{id_provinsi}', [
            'as' => 'data-provinsi-edit', 'uses' => 'DataProvinsiController@edit'
        ]);
    Route::post('data/provinsi/update/{id_provinsi}', [
            'as' => 'data-provinsi-update', 'uses' => 'DataProvinsiController@update'
        ]);
    Route::get('data/provinsi/destroy/{id_provinsi}', [
            'as' => 'data-provinsi-destroy', 'uses' => 'DataProvinsiController@destroy'
        ]); 


    Route::get('data/kabupaten', [
            'as' => 'data-kabupaten', 'uses' => 'DataKabupatenController@index'
        ]);
    Route::get('data/kabupaten/add', [
    		'as' => 'data-kabupaten-add', 'uses' => 'DataKabupatenController@add'
    	]);
    Route::post('data/kabupaten/store', [
    		'as' => 'data-kabupaten-store', 'uses' => 'DataKabupatenController@store'
    	]);
    Route::get('data/kabupaten/edit/{id_kabupaten}', [
            'as' => 'data-kabupaten-edit', 'uses' => 'DataKabupatenController@edit'
        ]);
    Route::post('data/kabupaten/update/{id_kabupaten}', [
            'as' => 'data-kabupaten-update', 'uses' => 'DataKabupatenController@update'
        ]);
    Route::get('data/kabupaten/destroy/{id_kabupaten}', [
            'as' => 'data-kabupaten-destroy', 'uses' => 'DataKabupatenController@destroy'
        ]);

    Route::get('data/kecamatan', [
            'as' => 'data-kecamatan', 'uses' => 'DataKecamatanController@index'
        ]);
    Route::get('data/kecamatan/add', [
    		'as' => 'data-kecamatan-add', 'uses' => 'DataKecamatanController@add'
    	]);
    Route::post('data/kecamatan/store', [
    		'as' => 'data-kecamatan-store', 'uses' => 'DataKecamatanController@store'
    	]);
    Route::get('data/kecamatan/edit/{id_kecamatan}', [
            'as' => 'data-kecamatan-edit', 'uses' => 'DataKecamatanController@edit'
        ]);
    Route::post('data/kecamatan/update/{id_kecamatan}', [
            'as' => 'data-kecamatan-update', 'uses' => 'DataKecamatanController@update'
        ]);
    Route::get('data/kecamatan/destroy/{id_kecamatan}', [
            'as' => 'data-kecamatan-destroy', 'uses' => 'DataKecamatanController@destroy'
        ]);

    Route::get('data/kelurahan', [
            'as' => 'data-kelurahan', 'uses' => 'DataKelurahanController@index'
        ]);
    Route::get('data/kelurahan/add', [
    		'as' => 'data-kelurahan-add', 'uses' => 'DataKelurahanController@add'
    	]);
    Route::post('data/kelurahan/store', [
    		'as' => 'data-kelurahan-store', 'uses' => 'DataKelurahanController@store'
    	]);
    Route::get('data/kelurahan/edit/{id_kelurahan}', [
            'as' => 'data-kelurahan-edit', 'uses' => 'DataKelurahanController@edit'
        ]);
    Route::post('data/kelurahan/update/{id_kelurahan}', [
            'as' => 'data-kelurahan-update', 'uses' => 'DataKelurahanController@update'
        ]);
    Route::get('data/kelurahan/destroy/{id_kelurahan}', [
            'as' => 'data-kelurahan-destroy', 'uses' => 'DataKelurahanController@destroy'
        ]);

    Route::get('data/dusun', [
            'as' => 'data-dusun', 'uses' => 'DataDusunController@index'
        ]);
    Route::get('data/dusun/add', [
    		'as' => 'data-dusun-add', 'uses' => 'DataDusunController@add'
    	]);
    Route::post('data/dusun/store', [
    		'as' => 'data-dusun-store', 'uses' => 'DataDusunController@store'
    	]);
    Route::get('data/dusun/edit/{id_dusun}', [
            'as' => 'data-dusun-edit', 'uses' => 'DataDusunController@edit'
        ]);
    Route::post('data/dusun/update/{id_dusun}', [
            'as' => 'data-dusun-update', 'uses' => 'DataDusunController@update'
        ]);
    Route::get('data/dusun/destroy/{id_dusun}', [
            'as' => 'data-dusun-destroy', 'uses' => 'DataDusunController@destroy'
        ]);



});


Route::get('report', ['as' => 'report', 'uses' => 'ReportController@index']);
Route::get('report/prov/{id}', ['as' => 'report-prov', 'uses' => 'ReportController@prov']);
Route::get('report/kab/{id}', ['as' => 'report-kab', 'uses' => 'ReportController@kab']);
Route::get('report/kec/{id}', ['as' => 'report-kec', 'uses' => 'ReportController@kec']);
Route::get('report/kel/{id}', ['as' => 'report-kel', 'uses' => 'ReportController@kel']);

Route::get('lihatebt', ['as' => 'lihatebt', 'uses' => 'LihatEbtController@index']);

Route::get('dataebt', ['as' => 'dataebt', 'uses' => 'DataEbtController@index']);
Route::get('dataebt/edit', ['as' => 'edit-dataebt', 'uses' => 'DataEbtController@edit']);
Route::get('dataebt/create', ['as' => 'create-dataebt', 'uses' => 'DataEbtController@create']);
Route::get('dataebt/destroy', ['as' => 'destroy-dataebt', 'uses' => 'DataEbtController@destroy']);
Route::post('dataebt/update', ['as' => 'update-dataebt', 'uses' => 'DataEbtController@update']);
Route::post('dataebt/store', ['as' => 'store-dataebt', 'uses' => 'DataEbtController@store']);
Route::get('prov/{id}', ['as' => 'dataebt-prov', 'uses' => 'DataEbtController@getKab']);
Route::get('kab/{id}', ['as' => 'dataebt-kab', 'uses' => 'DataEbtController@getKec']);
Route::get('kec/{id}', ['as' => 'dataebt-kec', 'uses' => 'DataEbtController@getKel']);


Route::get('provinsi', ['as' => 'provinsi', 'uses' => 'ProvinsiController@index']);
Route::post('provinsi/update', ['as' => 'provinsi-update', 'uses' => 'ProvinsiController@update']);
Route::get('provinsi/create', ['as' => 'provinsi-create', 'uses' => 'ProvinsiController@create']);
Route::get('provinsi/{id}/edit', ['as' => 'provinsi-edit', 'uses' => 'ProvinsiController@edit']);
Route::get('provinsi/store', ['as' => 'provinsi-store', 'uses' => 'ProvinsiController@store']);
Route::get('provinsi/destroy', ['as' => 'provinsi-destroy', 'uses' => 'ProvinsiController@destroy']);


Route::get('kabupaten', ['as' => 'kabupaten', 'uses' => 'KabupatenController@index']);
Route::post('kabupaten/update', ['as' => 'kabupaten-update', 'uses' => 'KabupatenController@update']);
Route::get('kabupaten/create', ['as' => 'kabupaten-create', 'uses' => 'KabupatenController@create']);
Route::get('kabupaten/{id}/edit', ['as' => 'kabupaten-edit', 'uses' => 'KabupatenController@edit']);
Route::get('kabupaten/store', ['as' => 'kabupaten-store', 'uses' => 'KabupatenController@store']);
Route::get('kabupaten/destroy', ['as' => 'kabupaten-destroy', 'uses' => 'KabupatenController@destroy']);



Route::get('kecamatan', ['as' => 'kecamatan', 'uses' => 'KecamatanController@index']);
Route::post('kecamatan/update', ['as' => 'kecamatan-update', 'uses' => 'KecamatanController@update']);
Route::get('kecamatan/create', ['as' => 'kecamatan-create', 'uses' => 'KecamatanController@create']);
Route::get('kecamatan/{id}/edit', ['as' => 'kecamatan-edit', 'uses' => 'KecamatanController@edit']);
Route::get('kecamatan/store', ['as' => 'kecamatan-store', 'uses' => 'KecamatanController@store']);
Route::get('kecamatan/destroy', ['as' => 'kecamatan-destroy', 'uses' => 'KecamatanController@destroy']);


Route::get('kelurahan', ['as' => 'kelurahan', 'uses' => 'KelurahanController@index']);
Route::post('kelurahan/update', ['as' => 'kelurahan-update', 'uses' => 'KelurahanController@update']);
Route::get('kelurahan/create', ['as' => 'kelurahan-create', 'uses' => 'KelurahanController@create']);
Route::get('kelurahan/{id}/edit', ['as' => 'kelurahan-edit', 'uses' => 'KelurahanController@edit']);
Route::get('kelurahan/store', ['as' => 'kelurahan-store', 'uses' => 'KelurahanController@store']);
Route::get('kelurahan/destroy', ['as' => 'kelurahan-destroy', 'uses' => 'KelurahanController@destroy']);


Route::get('master/anggaran', ['as' => 'master-anggaran', 'uses' => 'MasterAnggaranController@index']);
Route::get('master/anggaran/add', ['as' => 'master-anggaran-add', 'uses' => 'MasterAnggaranController@add']);
Route::get('master/anggaran/destroy/{id_anggaran}', ['as' => 'master-anggaran-destroy', 'uses' => 'MasterAnggaranController@destroy']);
Route::get('master/anggaran/edit/{id_anggaran}', ['as' => 'master-anggaran-edit', 'uses' => 'MasterAnggaranController@edit']);
Route::post('master/anggaran/update/{id_anggaran}', ['as' => 'master-anggaran-update', 'uses' => 'MasterAnggaranController@update']);
Route::post('master/anggaran/store', ['as' => 'master-anggaran-store', 'uses' => 'MasterAnggaranController@store']);


Route::get('master/energi', ['as' => 'master-energi', 'uses' => 'MasterEnergiController@index']);


Route::get('master/instansi', ['as' => 'master-instansi', 'uses' => 'MasterInstansiController@index']);


Route::get('master/potensi', ['as' => 'master-potensi', 'uses' => 'MasterPotensiController@index']);



Route::get('master/presentasi', [
        'as' => 'master-presentasi', 'uses' => 'MasterPresentasiController@index'
    ]);
Route::get('master/presentasi/add', [
        'as' => 'master-presentasi-add', 'uses' => 'MasterPresentasiController@add'
    ]);

Route::get('master/presentasi/api/kabupaten/{id}', function($id){
    if(Request::ajax()){
        //$category_id = Input::get('category_id');
        $kabupaten = Kabupaten::where('id_provinsi',  $id)->get();
        return $kabupaten;
    }

});
Route::post('master/presentasi/store', [
        'as' => 'master-presentasi-store', 'uses' => 'MasterPresentasiController@store'
    ]);
Route::get('master/presentasi/edit/{id}', [
        'as' => 'master-presentasi-edit', 'uses' => 'MasterPresentasiController@edit'
    ]);

Route::post('master/presentasi/update/{id}', [
        'as' => 'master-presentasi-update', 'uses' => 'MasterPresentasiController@update'
    ]);
Route::get('master/presentasi/destroy/{id}', [
        'as' => 'master-presentasi-destroy', 'uses' => 'MasterPresentasiController@destroy'
    ]);

 