<?php

namespace app\views;

class Navbar
{
    public function show(): string
    {
        ob_start();
?>

<?php
        return ob_get_clean();
    }
}