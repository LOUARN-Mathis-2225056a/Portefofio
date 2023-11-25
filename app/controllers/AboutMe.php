<?php

namespace app\controllers;

use app\views\AboutMe as AboutMeView;
use lang\Localization;

class AboutMe
{
    public function execute(): void
    {
        $localization = new Localization('en');
        $text = $localization->translate('about_me');
        (new AboutMeView())->show($text);
    }
}