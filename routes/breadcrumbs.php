<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Crumbs;

Breadcrumbs::for('home', function (Crumbs $crumbs) {
    $crumbs->push(__('Home'), route('home'));
});

Breadcrumbs::for('login', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('Login'), route('login'));
});

Breadcrumbs::for('register', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('Register'), route('register'));
});

Breadcrumbs::for('password.request', function (Crumbs $crumbs) {
    $crumbs->parent('login');
    $crumbs->push(__('Reset Password'), route('password.request'));
});

Breadcrumbs::for('password.reset', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push(__('Change'), route('password.reset'));
});

Breadcrumbs::for('password.confirm', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push(__('Password Confirm'), route('password.confirm'));
});

Breadcrumbs::for('verify', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push(__('Verify'), route('verify'));
});

// Cabinet
Breadcrumbs::for('cabinet', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('Cabinet'), route('cabinet'));
});
