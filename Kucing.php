<?php
require_once "Hewan.php";

class Kucing extends Hewan
{
    public function getJenis()
    {
        return "Kucing";
    }

    public function getSuara()
    {
        return "Meong";
    }
}