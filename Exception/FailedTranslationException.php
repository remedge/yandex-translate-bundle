<?php

namespace Remedge\YandexTranslateBundle\Exception;

class FailedTranslationException extends \Exception
{
    /** @var  string */
    protected $sourceString;

    /** @var  string */
    protected $translateDirection;

    /**
     * FailedTranslationException constructor.
     *
     * @param string $sourceString
     * @param string $translateDirection
     */
    public function __construct($sourceString, $translateDirection)
    {
        $this->sourceString = $sourceString;
        $this->message = sprintf('Failed to translate string "%s" with direction "%s"', $sourceString, $translateDirection);
    }

    /**
     * @return string
     */
    public function getSourceString()
    {
        return $this->sourceString;
    }

    /**
     * @return string
     */
    public function getTranslateDirection()
    {
        return $this->translateDirection;
    }
}
