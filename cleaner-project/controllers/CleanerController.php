<?php

namespace app\controllers;

use yii\rest\Controller;
use app\models\Cleaner;
use app\models\VacuumCleaner;
use app\models\WindowCleaner;

class CleanerController extends Controller
{
    // GET /cleaner/test
    public function actionTest()
    {
        $cleaners = [
            new Cleaner(),
            new VacuumCleaner(),
            new WindowCleaner(),
        ];

        $result = [];

        foreach ($cleaners as $cleaner) {
            $result[] = [
                'class' => get_class($cleaner),
                'clean' => $cleaner->clean(),
            ];
        }

        return $result; // JSON javob qaytaradi
    }
}
