<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note"> <span class="required">*</span> 为必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<?php echo Category::model()->getCateName($_GET['cid']);?>
	</div>
	<pre>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decription'); ?>
		<?php echo $form->textArea($model,'decription',array('size'=>60,'style'=>'width:500px;height:100px;resize:none;style:-100px;','maxlength'=>100)); ?>
		<?php echo $form->error($model,'decription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createTime'); ?>
		<?php echo $form->textField($model,'createTime'); ?>
		<?php echo $form->error($model,'createTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bl_user_id'); ?>
		<?php echo $form->textField($model,'bl_user_id'); ?>
		<?php echo $form->error($model,'bl_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click'); ?>
		<?php echo $form->textField($model,'click'); ?>
		<?php echo $form->error($model,'click'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recomendation'); ?>
		<?php echo $form->textField($model,'recomendation'); ?>
		<?php echo $form->error($model,'recomendation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateTime'); ?>
		<?php echo $form->textField($model,'updateTime'); ?>
		<?php echo $form->error($model,'updateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_cate'); ?>
		<?php echo $form->textField($model,'home_cate'); ?>
		<?php echo $form->error($model,'home_cate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_top'); ?>
		<?php echo $form->textField($model,'home_top'); ?>
		<?php echo $form->error($model,'home_top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'children_top'); ?>
		<?php echo $form->textField($model,'children_top'); ?>
		<?php echo $form->error($model,'children_top'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->