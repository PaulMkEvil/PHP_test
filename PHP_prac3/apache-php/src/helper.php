<?php
    const
        host = 'db',
        users = 'users',
        name = 'name',
        dbUser = 'user',
        password = 'password',
        db = 'appDB',
        toys = 'toys',
        id = 'ID',
        description = 'description',
        price = 'price';

    function openMysqli(): mysqli { return new mysqli(
        host, dbUser, password, db
    ); }
?>
