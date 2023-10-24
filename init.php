<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'starisland',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'starisland',
        'projecturl'=>'http://localhost/PHP/starisland/starisland'
    ]

];

const BASE_PATH='/PHP/starisland/starisland/';

