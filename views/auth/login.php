<?php
/**
 * @var $this yii\web\View
 * @var $model webvimark\modules\UserManagement\models\forms\LoginForm
 */

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<section class="bg-light p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                <div class="card border border-light-subtle rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <h4 class="text-center">
                                        <?= UserManagementModule::t('front', 'Authorization') ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php $form = ActiveForm::begin([
                            'id'             => 'login-form',
                            'options'        => ['autocomplete' => 'off'],
                            'validateOnBlur' => false,
                            'fieldConfig'    => [
                                'template' => "{input}\n{error}",
                            ],
                        ]) ?>

                        <?= $form->field($model, 'username')
                            ->textInput(['placeholder' => $model->getAttributeLabel('username'), 'autocomplete' => 'off']) ?>

                        <?= $form->field($model, 'password')
                            ->passwordInput(['placeholder' => $model->getAttributeLabel('password'), 'autocomplete' => 'off']) ?>

                        <?= (isset(Yii::$app->user->enableAutoLogin) && Yii::$app->user->enableAutoLogin) ? $form->field($model, 'rememberMe')->checkbox(['value' => true]) : '' ?>

                        <div class="row registration-block">
                            <div class="col-sm-6">
                                <?= GhostHtml::a(
                                    UserManagementModule::t('front', "Registration"),
                                    ['/user-management/auth/registration']
                                ) ?>
                            </div>
                            <div class="col-sm-6 text-right">
                                <?= GhostHtml::a(
                                    UserManagementModule::t('front', "Forgot password ?"),
                                    ['/user-management/auth/password-recovery']
                                ) ?>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <?= Html::submitButton(
                                    UserManagementModule::t('front', 'Login'),
                                    ['class' => 'btn bsb-btn-xl btn-primary']
                                ) ?>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>