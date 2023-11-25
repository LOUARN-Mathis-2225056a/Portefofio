<?php

namespace app\controllers;
use lang\Localization;
use app\views\OtherProject as OtherProjectView;

class OtherProject
{
    public function execute(): void
    {
        $localization = new Localization('en');
        $text = $localization->translate('other_project');
        (new OtherProjectView())->show($text);
    }
}