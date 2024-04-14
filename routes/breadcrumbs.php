<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > レシピ一覧
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('レシピ一覧', route('recipe.index'));
});
