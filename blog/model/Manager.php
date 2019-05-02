<?php

namespace Tp\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=db5000032778.hosting-data.io;port=3306;dbname=dbs27909;charset=utf8', 'dbu6173', 'PFekCrCJaQC3789');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}