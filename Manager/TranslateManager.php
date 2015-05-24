<?php

namespace Remedge\YandexTranslateBundle\Manager;

use Yandex\Translate\Translator;
use Yandex\Translate\Exception;

class TranslateManager
{
    private $apiKey;
    private $translator;
    
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->translator = new Translator($this->apiKey);
    }

    public function translate($string, $translateDirection)
    {
        try {
            $translation = $this->translator->translate($string, $translateDirection);

            return $translation;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
