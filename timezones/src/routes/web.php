<?php

Route::get('timezones/{timezone?}', 
  'sanjeevscet\timezones\TimezonesController@index');