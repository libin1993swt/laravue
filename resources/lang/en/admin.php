<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'enabled' => 'Enabled',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'slug' => 'Slug',
            'title' => 'Title',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];