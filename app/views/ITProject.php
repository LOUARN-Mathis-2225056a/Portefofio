<?php

namespace app\views;
use app\models\Template;

class ITProject
{
    public function show($text): void
    {
        ob_start();
?>
<div class="page">
    <h1>yo</h1>
</div>
<?php
        (new Template('IT Project', ob_get_clean(),'it_project'))->show();
    }
}