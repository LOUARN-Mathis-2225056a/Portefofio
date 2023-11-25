<?php

namespace app\controllers;
use app\views\ITProject as ITProjectView;
use lang\Localization;
class ITProject
{
    public function execute(): void
    {
        $localization = new Localization('en');
        $text = $localization->translate('it_project');
        (new ITProjectView())->show($text);
    }
}
