<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerMiddleware\Shared\Logger\Logger;

use Psr\Log\LoggerInterface;
use Spryker\Shared\Log\Config\LoggerConfigInterface;
use Spryker\Shared\Log\LoggerTrait;
use SprykerMiddleware\Shared\Logger\Logger\Exception\ProcessLoggerNotConfiguredException;

trait MiddlewareLoggerTrait
{
    use LoggerTrait;

    /**
     * @throws \SprykerMiddleware\Shared\Logger\Logger\Exception\ProcessLoggerNotConfiguredException
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getProcessLogger(): LoggerInterface
    {
        if (MiddlewareLoggerContainer::getLogger()) {
            return MiddlewareLoggerContainer::getLogger();
        }

        throw new ProcessLoggerNotConfiguredException();
    }

    /**
     * @param \Spryker\Shared\Log\Config\LoggerConfigInterface $loggerConfig
     *
     * @return void
     */
    public function initLogger(LoggerConfigInterface $loggerConfig): void
    {
        if (!MiddlewareLoggerContainer::getLogger()) {
            MiddlewareLoggerContainer::setLogger($this->getLogger($loggerConfig));
        }
    }
}
