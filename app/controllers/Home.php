<?php

namespace app\controllers;
use app\views\Home as HomeView;
use lang\Localization;

class Home
{
    public function execute(): void
    {
        $localization = new Localization('en');
        $text = $localization->translate('greeting');
        (new HomeView())->show($text);
    }
}
