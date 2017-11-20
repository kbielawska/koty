<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            <?= yii\authclient\widgets\AuthChoice::widget([

                'baseAuthUrl' => ['site/auth']

            ]) ?>
            <?php
            use yii\authclient\widgets\AuthChoice;
            ?>
            <?php $authAuthChoice = AuthChoice::begin([
                'baseAuthUrl' => ['site/auth']
            ]); ?>
            <ul>
                <?php foreach ($authAuthChoice->getClients() as $client): ?>
                    <li><?php
                        $authAuthChoice->clientLink($client,
                            '<span class="fa fa-'.$client->getName().'">FBOOOOK</span> Sign in with '.$client->getTitle(),
                            [
                                'class' => 'btn btn-block btn-social btn-'.$client->getName(),
                            ]);
                        ?></li>
                <?php endforeach; ?>
            </ul>
            <?php AuthChoice::end(); ?>


         </div>
    </div>
</div>
