<?php

namespace App\Logger;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Request;
use RuntimeException;

class LogService implements LoggerInterface
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     */
    public function emergency($message, array $context = [])
    {
        try {
            $this->logger->emergency($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function alert($message, array $context = [])
    {
        try {
            $this->logger->alert($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function critical($message, array $context = [])
    {
        try {
            $this->logger->critical($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function error($message, array $context = [])
    {
        try {
            $this->logger->error($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function warning($message, array $context = [])
    {
        try {
            $this->logger->warning($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function notice($message, array $context = [])
    {
        try {
            $this->logger->notice($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function info($message, array $context = [])
    {
        try {
            $this->logger->info($message, array_merge($this->getBaseContext(), $context));
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function debug($message, array $context = [])
    {
        try {
            $this->logger->debug($message, $context);
        } catch (RuntimeException $e) {
            // TODO handel this exception, you can transform file log or send email
        }
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
        switch ($level) {
            case LogLevel::EMERGENCY:
                $this->emergency($message, $context);
                break;
            case LogLevel::ALERT:
                $this->alert($message, $context);
                break;
            case LogLevel::CRITICAL:
                $this->critical($message, $context);
                break;
            case LogLevel::ERROR:
                $this->error($message, $context);
                break;
            case LogLevel::WARNING:
                $this->warning($message, $context);
                break;
            case LogLevel::NOTICE:
                $this->notice($message, $context);
                break;
            case LogLevel::INFO:
                $this->info($message, $context);
                break;
            case LogLevel::DEBUG:
                $this->debug($message, $context);
                break;
        }
    }

    /**
     * return base log information
     *
     * @return array
     */
    private function getBaseContext()
    {
        $base_info = [
            'adminer_id' => auth()->id(),
            'user_agent' => Request::server('HTTP_USER_AGENT'),
            'user_ip'    => Request::getClientIp(),
            'referer'    => Request::server('HTTP_REFERER'),
        ];

        return $base_info;
    }
}
