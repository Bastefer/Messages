<?php

class AddModel
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function addMessage($fio, $email, $message_post)
    {
        if (empty($fio) || empty($email) || empty($message_post)) {
            return false;
        } else {
            $stmt = $this->pdo->prepare("INSERT INTO new_table (FIO, email, message_text) VALUES (?, ?, ?)");
            $stmt->execute([$fio, $email, $message_post]);
            return true;
        }
    }
}
?>