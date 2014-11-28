<?php

namespace Remedge\YandexTranslateBundle\Manager;

use Yandex\Translate\Translator;
use Yandex\Translate\Exception;

class TranslateManager
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function translate($string, $translateDirection)
    {
        try {
            $translator = new Translator($this->apiKey);

            $translation = $translator->translate($string, $translateDirection);

            return $translation;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}