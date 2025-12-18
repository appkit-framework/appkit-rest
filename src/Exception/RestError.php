<?php

namespace AppKit\Rest\Exception;

use AppKit\Http\Exception\HttpError;

class RestError extends HttpError {
    protected $errorCode;

    function __construct(
        $status = 500,
        $errorCode = 'UNKNOWN_ERROR',
        $message = null,
        $previous = null,
        $headers = []
    ) {
        parent::__construct($status, $message, $previous, $headers);
        $this -> errorCode = $errorCode;
    }

    public function getErrorCode() {
        return $this -> errorCode;
    }
}
