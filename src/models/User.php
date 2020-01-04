<?php

class User extends Model{
    protected static $tableName = 'users';
    protected static $columns = [
        'start_date',
        'password',
        'name',
        'is_admin',
        'id',
        'end_date',
        'email',
    ];
}