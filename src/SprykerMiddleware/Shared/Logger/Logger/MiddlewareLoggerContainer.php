<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
