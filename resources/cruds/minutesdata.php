<?php

return [
    'model' => App\Models\MinutesData::class,

    // searchable fields, if you dont want search feature, remove it
    'search' => [],

    // Manage actions in crud
    'create' => true,
    'update' => true,
    'delete' => true,

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    'with_auth' => false,

    // Validation in update and create actions
    // It will use Laravel validation system
    'validation' => [
        'filename' => 'required',
        'year_created' => 'required',
    ],

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "text", "file", "textarea", "password", "number", "email", "select"
    'fields' => [
        'filename' => 'file',
        'year_created' => 'text',
    ],

    // Where files will store for inputs
    'store' => [
        'filename' => './Minutes'
    ],

    // which kind of data should be showed in list page
    'show' => ['filename', 'year_created'],
];
