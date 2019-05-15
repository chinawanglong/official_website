<?php
/**
 * Created by PhpStorm.
 * User: elliot
 * Date: 2019/5/15
 * Time: 10:25
 */

Route::group(['namespace' => 'Home','prefix' => 'home'], function (){
    // 首页
    Route::any('index','IndexController@index');
});
