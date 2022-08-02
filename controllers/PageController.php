<?php

namespace app\controllers;
 use yii\web\Controller;

 class PageController extends Controller
 {
     public function actionAbout(){
         return $this->render('about');
     }

     public function actionNewPage(){
         return $this->render('newPage');
     }
 }