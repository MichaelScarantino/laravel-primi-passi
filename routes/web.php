<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'name' => 'Michael',
        'lastname' => 'Scarantino'
    ];
    return view('home', $data);
})->name('homepage');


Route::get('/faq', function () {
    $faq_data = [
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius accusantium, consectetur architecto ex, ullam quo laboriosam cupiditate sit nulla velit, sed animi tempore debitis earum. Veritatis impedit totam commodi temporibus.'
    ];
    return view('faq', $faq_data);
})->name('faq');

Route::get('/info', function () {
    $info_data = [
        'texts'=> [
            'Lorem ipsum',
            'dolor sit amet consectetur',
            'adipisicing elit. Eius accusantium',
            'consectetur architecto ex',
            'ullam quo laboriosam cupiditate sit nulla velit, sed animi tempore debitis earum',
            'Veritatis impedit totam commodi temporibus'
        ]
    ];
    return view('info', $info_data);
})->name('info');

Route::get('/learn', function () {
    $learn_data = [
        'text'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio facilis reprehenderit, odio eaque autem quisquam sit distinctio temporibus! Dolore ipsa maiores eius eveniet praesentium nulla! Animi, commodi vitae! Officiis, ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Ducimus maiores iusto dolorem consequuntur! Maxime numquam amet, quia unde minima et, magnam nemo mollitia saepe, cumque eos veritatis corrupti.'
    ];
    return view('learn', $learn_data);
})->name('learn');