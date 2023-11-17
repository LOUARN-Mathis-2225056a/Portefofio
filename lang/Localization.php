<?php

namespace lang;

class Localization
{
    private String $language;

    public function __construct($language = 'en') {
        $this->language = $language;
    }

    public function loadLanguageFile() {
        $file = __DIR__ . "/languages/{$this->language}.php";

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