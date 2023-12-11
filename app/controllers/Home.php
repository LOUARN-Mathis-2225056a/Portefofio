<?php

namespace app\controllers;
use app\views\Home as HomeView;
use lang\Localization;

class Home
{
    public function execute(): void
    {
        $localization = new Localization();
        $text = $localization->translate('home');
        (new HomeView())->show($text);
    }
}
