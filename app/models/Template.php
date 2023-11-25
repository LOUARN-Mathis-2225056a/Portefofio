<?php

namespace app\models;

use app\views\Navbar;
use lang\Localization;

class Template
{
    public function __construct(private string $title,
                                private string $content,
                                private string $stylesheet = ''){}
    public function show(): void
    {
        $localization = new Localization('en');
        $text = $localization->translate('navbar');
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> <?= $this->title?></title>
    <link rel="stylesheet" href="/assets/styles/main.css">
    <?php if ($this->stylesheet !== '') { ?>
        <link rel="stylesheet" href="/assets/styles/<?= $this->stylesheet ?>.css">
    <?php } ?>
<!--    <link rel="shortcut icon" type="image/jpg" href="/assets/images/logoblanc.png"/>-->
</head>
<body>
<?= (new Navbar())->show($text)?>
<?= $this->content?>
</body>
</html>
<?php
    }
}
?>
