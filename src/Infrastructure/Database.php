<?php

namespace SimpleApi\Infrastructure;

use AllowDynamicProperties;
use PDO;

 class Database
{

    public function __construct(public PDO $pdo = new PDO('sqlite:../../db.sqlite'))
    {

    }

}