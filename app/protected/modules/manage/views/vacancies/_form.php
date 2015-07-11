<?php
/**
 * @var $model Vacancy
 * @var $company Company
 * @var $this CController
 */

?>

<h1 xmlns="http://www.w3.org/1999/html"><?=  $model->isNewRecord ? Yii::t('main', 'vacancy.title.create')
        : Yii::t('main', 'vacancy.title.edit'); ?></h1>


<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'vacancy-form',
        'enableAjaxValidation' => true,
    )); /* @var $form TbActiveForm */
    ?>
    <div class="alert alert-block">
        <?= Yii::t('main', 'company') . ': ' . $model->company->name ?>

        <?php if (!$model->isNewRecord): ?>
            [ <?= $model->getAttributeLabel('created_at') . ': ' . $model->created_at ?> ]
            [ <?= $model->getAttributeLabel('updated_at') . ': ' . $model->updated_at ?>]
        <?php endif; ?>

    </div>

    <?= $form->errorSummary($model) ?>

    <?= $form->dropDownListControlGroup($model, 'status', VacancyHelper::statuses(),['class' => 'span4']) ?>

    <?= $form->textFieldControlGroup($model, 'name', ['size' => 200, 'class' => 'span8']) ?>

    <?= $form->dropDownListControlGroup($model, 'user_id', CompanyHelper::userList($company->id), [
        'class' => 'span8',
    ]) ?>

    <?= $form->dropDownListControlGroup($model, 'city_id', UserCitiesHelper::all()) ?>


    <?= $form->textAreaControlGroup($model, 'description', ['rows' => 8, 'class' => 'span8']) ?>

    <?= $form->textAreaControlGroup($model, 'requirements', ['rows' => 4, 'class' => 'span8']) ?>

    <?= $form->dropDownListControlGroup($model, 'experience_id', ExperienceHelper::all(), ['class' => 'span4']) ?>

    <?= $form->checkBoxControlGroup($model, 'housing') ?>

    <hr />
    <?= $form->label($model, VacancyCategoriesHelper::fieldName()) ?>

    <div class="div-overflow narrow">
        <?= VacancyCategoriesHelper::checkBoxList($model) ?>
    </div>

    <hr />
    <?= $form->label($model, EducationHelper::fieldName()) ?>
    <div class="div-overflow narrow">
        <?= EducationHelper::checkBoxList($model) ?>
    </div>

    <hr />
    <?= $form->label($model, PositionsHelper::fieldName()) ?>
    <div class="div-overflow narrow">
        <?= PositionsHelper::checkBoxList($model) ?>
    </div>


    <div class="form-actions">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? Yii::t('main', 'form.button.add') : Yii::t('main',
            'form.button.save'),
            [
                'color' => TbHtml::BUTTON_COLOR_PRIMARY,
                'size' => TbHtml::BUTTON_SIZE_LARGE,
            ]);
        ?>
    </div>

    <?php $this->endWidget() ?>
</div>