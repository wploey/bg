<?php
/**
 * Created by PhpStorm.
 * User: METOO3
 * Date: 2017-03-23
 * Time: 10:02
 */

Route::resource('article', 'Lide\ArticleController',['names'=>[
    'create'=>'article.create',
    'show'=>'article.show'
]]);