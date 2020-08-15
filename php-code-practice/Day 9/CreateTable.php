<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists("users");

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});

Capsule::schema()->create('todos', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->boolean('completed');
    $table->integer('user_id')->unsigned();
    $table->timestamps();
});

Capsule::schema()->table('todos', function($table) {
    $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
});