<?php

return [
    'db'=>[
	'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=api3.onelab.gov.ph;charset=utf8',
        'username' => 'root',
        'password' => 'Arkem@88',
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ],
    'eulims_db'=>[
        'class' => 'yii\db\Connection',  
        'dsn' => 'mysql:host=localhost;dbname=eulims;charset=utf8',
        'username' => 'eulims',
        'password' => 'eulims',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ],
    'eulims_labdb'=>[
        'class' => 'yii\db\Connection',  
        'dsn' => 'mysql:host=localhost;dbname=eulims_lab',
        'username' => 'eulims',
        'password' => 'eulims',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ],
    'eulims_inventorydb'=>[
        'class' => 'yii\db\Connection',  
        'dsn' => 'mysql:host=localhost;dbname=eulims_inventory',
        'username' => 'eulims',
        'password' => 'eulims',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ],
    'eulims_financedb'=>[
        'class' => 'yii\db\Connection',  
        'dsn' => 'mysql:host=localhost;dbname=eulims_finance',
        'username' => 'eulims',
        'password' => 'eulims',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ],
    'eulims_addressdb'=>[
        'class' => 'yii\db\Connection',  
        'dsn' => 'mysql:host=localhost;dbname=eulims_address',
        'username' => 'eulims',
        'password' => 'eulims',
        //'username'=>'arisro9',
        //'password'=>'qwerty!@#$%', 
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ],
];
