<?php

namespace AppKit\Rest\Message;

use AppKit\Http\Message\HttpError;

class RestError extends HttpError {
    protected $errorCode;

    function __construct(
        $status,
        $errorCode = 'UNKNOWN_ERROR',
        $message = null,
        $headers = [],
        $previous = null
    ) {
        parent::__construct($status, $message, $headers, $previous);
        $this -> errorCode = $errorCode;
    }

    public function getErrorCode() {
        return $this -> errorCode;
    }
}
