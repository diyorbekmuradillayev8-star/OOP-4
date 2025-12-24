<?php

namespace app\models;

class VacuumCleaner extends Cleaner
{
    public function clean()
    {
        return "Vacuum cleaner is cleaning the floor";
    }
}
