<?php

class AddController
{
    protected $modelAdd;

    public function __construct(AddModel $modelAdd)
    {
        $this->modelAdd = $modelAdd;
    }

    public function postTransaction()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_message'])) {
            $fio = filter_var($_POST['fio_input'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email_input'], FILTER_SANITIZE_EMAIL);
            $message_post = filter_var($_POST['message_post'], FILTER_SANITIZE_STRING);

            $this->modelAdd->addMessage($fio, $email, $message_post);
            header("Location: index.php");
            exit();               
        } 
    }
}
?>