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

    'movie' => [
        'title' => 'Movies',

        'actions' => [
            'index' => 'Movies',
            'create' => 'New Movie',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'player' => [
        'title' => 'Players',

        'actions' => [
            'index' => 'Players',
            'create' => 'New Player',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'roll' => 'Roll',
            'country_id' => 'Country',
            'odi_matches' => 'Odi matches',
            'test_matches' => 'Test matches',
            't20_matches' => 'T20 matches',
            'odi_runs' => 'Odi runs',
            'test_runs' => 'Test runs',
            't20_runs' => 'T20 runs',
            'odi_50s' => 'Odi 50s',
            'test_50s' => 'Test 50s',
            't20_50s' => 'T20 50s',
            'odi_100s' => 'Odi 100s',
            'test_100s' => 'Test 100s',
            't20_100s' => 'T20 100s',
            'odi_wickets' => 'Odi wickets',
            'test_wickets' => 'Test wickets',
            't20_wickets' => 'T20 wickets',
            'odi_highest_score' => 'Odi highest score',
            'test_highest_score' => 'Test highest score',
            't20_highest_score' => 'T20 highest score',
            'odi_batting_average' => 'Odi batting average',
            'test_batting_average' => 'Test batting average',
            't20_batting_average' => 'T20 batting average',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];