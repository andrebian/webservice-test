<?php

class Database
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', 'masterkey');
        mysql_select_db('webservice');
    }
}

new Database();