<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
