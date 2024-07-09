<?php

class ReadController
{
    protected $modelRead;

    public function __construct(ReadModel $modelRead)
    {
        $this->modelRead = $modelRead;
    }

    public function getMassages()
    {
        return $this->modelRead->getMassages();
    }
}
?>