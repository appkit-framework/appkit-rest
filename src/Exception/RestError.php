<?php

namespace AppKit\Rest\Exception;

use AppKit\Http\Exception\HttpError;

class RestError extends HttpError {
    protected $errorCode;

    function __construct(
        $status = 500,
        $errorCode = 'UNKNOWN_ERROR',
        $message = null,
        $previous = null
    ) {
        parent::__construct($status, $message, $previous);
        $this -> errorCode = $errorCode;
    }

    public function getErrorCode() {
        return $this -> errorCode;
    }

    public function toArray() {
        return [
            'error' => [
                'code' => $this -> getErrorCode(),
                'msg' => $this -> getMessage()
            ]
        ];
    }
}
