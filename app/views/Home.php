<?php

namespace app\views;

use app\models\Template;

class Home
{
    public function show(String $text): void
    {
        ob_start();
?>
<h1>Home <?= $text?> </h1>
<?php
        (new Template('Homepage', ob_get_clean()))->show();
    }
}
?>