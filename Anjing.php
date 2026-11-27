<?php
require_once "Hewan.php";

class Anjing extends Hewan
{
    public function getJenis()
    {
        return "Anjing";
    }

    public function getSuara()
    {
        return "Guk guk";
    }
}