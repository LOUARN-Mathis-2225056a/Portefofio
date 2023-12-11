<?php

namespace lang;

class Localization
{
    private String $language;

    public function __construct() {
        $this->language = $_ENV['lang'];
    }

    public function loadLanguageFile() {
        $file = __DIR__ . "/{$this->language}.php";

        if (file_exists($file)) {
            return include($file);
        }

        // Fallback to default language
        error_log(__DIR__ . "/en.php");
        return include(__DIR__ . "/en.php");
    }

    public function translate($key) {
        $translations = $this->loadLanguageFile();
        return $translations[$key] ?? $key; // Return the key if translation not found
    }
}