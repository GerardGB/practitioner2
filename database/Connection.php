<?php

class Connection {
    public static function make(
        $Connection = 'mysql:host=127.0.0.1;dbname=tasks',
        $user = 'debian-sys-maint',
        $password = 'fgKo0I75jriiw1Qq'
        ) {
        try {
            return new PDO($Connection, $user, $password);

            } catch (PDOException $e) {
                die($e->getMessage());
            }
    }
}