<?php



    Route::get('detect', function()
    {
        $agent = new \Jenssegers\Agent\Agent;

        $result = $agent->isMobile();

        dd($result);
    });
    Route::get('detect', function()
    {
        $agent = new \Jenssegers\Agent\Agent;

        $result = $agent->isDesktop();

        dd($result);
    });
    Route::get('detect', function()
    {
        $agent = new \Jenssegers\Agent\Agent;

        $result = $agent->isTablet();

        dd($result);
    });



        Auth::routes();

        Route::get('/', 'HomeController@admin_dashabord')->name('first');

        Route::get('/cars', 'CarsController@index')->name('cars.index');
        Route::get('/cars/create', 'CarsController@create')->name('cars.create');
        Route::post('/cars/add_car', 'CarsController@add_cars')->name('cars.add');
        Route::get('/cars/edit/{id}', 'CarsController@edit')->name('cars.editview');
        Route::post('/cars/edit', 'CarsController@edit_car')->name('cars.edit');
        Route::post('/cars/delete_car', 'CarsController@delete_car');
        Route::get('/cars/detail/{id}', 'CarsController@detail_car')->name('cars.detail');
        Route::post('cars/manual_auto', 'CarsController@update_manual_auto');


        Route::get('/drivers', 'DriversController@index')->name('drivers.index');
        Route::get('/drivers/create', 'DriversController@create')->name('drivers.create');
        Route::post('/drivers/add_driver', 'DriversController@add_drivers')->name('drivers.add');
        Route::get('/drivers/edit/{id}', 'DriversController@edit')->name('drivers.editview');
        Route::post('/drivers/edit', 'DriversController@edit_driver')->name('drivers.edit');
        Route::post('/drivers/delete_driver', 'DriversController@delete_driver');
        Route::get('/drivers/detail/{id}', 'DriversController@detail_driver')->name('drivers.detail');
        Route::post('/drivers/drive_stick_shift', 'DriversController@update_stick_shift');
