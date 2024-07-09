<?php
class ReadModel
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getMassages()
    {
        $stmt = $this->pdo->query("SELECT FIO, email, message_text FROM new_table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

