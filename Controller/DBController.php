<?php declare(strict_types=1);

// TODO refactor db process. Should be more "secure" and more pretty...
class DBController
{
    public $connection;

    public function __construct(array $config)
    {
        $this->connection = $config;
    }

    public function getConnection() {
        return $dbConnection = mysqli_connect($this->connection['host'], $this->connection['user'], $this->connection['password'], $this->connection['name']);
    }

    public function getQuery(string $sqlQuery, string $object = 'stdClass') {
        $result = mysqli_query($this->getConnection(), $sqlQuery);
        // echo print_r($result);
        $news = [];
        while ($newsItem = mysqli_fetch_object($result)) {
            $news[] =$newsItem;
        }
        return $news; 
    }


}



