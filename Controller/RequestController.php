<?php declare(strict_types=1);

class RequestController
{
    public $request;

    public function __construct($userRequest)
    {
        $this->request = $userRequest;
    }

    public function getRequest() :array
    {
        return $this->request;
    }
}
