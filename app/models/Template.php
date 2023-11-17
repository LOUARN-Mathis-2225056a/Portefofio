<?php

namespace app\models;

class Template
{
    public function __construct(private string $title,
                                private string $content,
                                private string $stylesheet = ''){}
    public function show(): void
    {
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> <?= $this->title?></title>
    <link rel="stylesheet" href="/public/assets/styles/main.css">
    <?php if ($this->stylesheet !== '') { ?>
        <link rel="stylesheet" href="/public/assets/styles/<?= $this->stylesheet ?>.css">
    <?php } ?>
<!--    <link rel="shortcut icon" type="image/jpg" href="/assets/images/logoblanc.png"/>-->
</head>
<body>

<?= $this->content?>
</body>
</html>
<?php
    }
}
?>
