<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Shared\Logger\Logger;

use Psr\Log\LoggerInterface;

class MiddlewareLoggerContainer
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private static $logger;

    /**
     * @return \Psr\Log\LoggerInterface|null
     */
    public static function getLogger(): ?LoggerInterface
    {
        return self::$logger;
    }

    /**
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return void
     */
    public static function setLogger(LoggerInterface $logger): void
    {
        self::$logger = $logger;
    }
}
