<?php

\Route::group(['namespace' => 'Manage\Tools', 'prefix' => 'tools', 'before' => 's5_manage_events'], function() {

    \Route::get('', function(){ return \Redirect::to('/tools/attendee'); });
    \Route::controller('/attendee', 'AttendeeController');
    \Route::controller('/checkin', 'CheckinController');
    \Route::controller('/directory', 'DirectoryController');
    \Route::controller('/deck', 'DeckController');

    \Route::post('/applications/new', 'ApplicationsController@postNew');
    \Route::get('/applications/{application}', 'ApplicationsController@getEdit');
    \Route::post('/applications/{application}', 'ApplicationsController@postEdit');
    \Route::controller('/applications', 'ApplicationsController');

    \Route::group(['before' => 's5_admin'], function(){
        \Route::controller('status', 'StatusController');
        \Route::controller('promotions', 'PromotionsController');
        \Route::controller('emails', 'EmailsController');
        \Route::controller('managers', 'ManagersController');
        \Route::controller('supplies', 'SuppliesController');
        \Route::controller('tasks', 'TasksController');
        \Route::controller('revenue', 'RevenueController');
        \Route::controller('evangelists', 'EvangelistController');
        \Route::controller('shipments', 'ShipmentController');
        \Route::controller('manifests', 'ManifestController');
    });
});