<?php

namespace Zoo\Staff\Exceptions;

use Throwable;

class AnimalIsNotSupportedException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}