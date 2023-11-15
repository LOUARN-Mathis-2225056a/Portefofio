<?php

class Home
{
    public function execute(): void
    {
        header('Location: /home');
        (new HomeView())->show();
    }
}