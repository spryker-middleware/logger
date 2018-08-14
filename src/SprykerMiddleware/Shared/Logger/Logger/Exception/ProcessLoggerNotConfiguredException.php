<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerMiddleware\Shared\Logger\Logger\Exception;

use Exception;

class ProcessLoggerNotConfiguredException extends Exception
{
    public function __construct()
    {
        $message = sprintf("Logger for middleware process does not configured. Call MiddlewareLoggerTrait::initLogger() first.");

        parent::__construct($message);
    }
}
