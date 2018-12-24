<?php
    require 'models/connection.php';
    require 'models/QueryBuilder.php';
    require 'Router.php';
    require 'Request.php';
    
    $config = require './config.php';

    $pdo = Connection::make($config['database']);

    $query = new QueryBuilder($pdo);
?>
