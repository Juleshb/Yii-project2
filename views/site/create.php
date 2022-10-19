<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'blog';
?>
<div class="site-index">

<h1 class="display-4">CREATE POST</h1>
    <div class="body-content">

    <?php 
    $form = ActiveForm::begin()
    ?>
        <div class="row">
            <div class="form-control">
                <div class="col-lg-6">
                    <?= $form->field($post,'Title');?>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="form-control">
                <div class="col-lg-6">
                    <?= $form->field($post,'Date');?>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="form-control">
                <div class="col-lg-6">
                    <?= $form->field($post,'Contrnt')->textarea(['rows'=>'6']);?>
                 </div>
            </div>
        </div>

        
        <div class="row">
            <div class="form-control">
                <div class="col-lg-6">
                    <div class="col-lg-3">
<?= html::submitButton('Create Post', ['class' =>'btn btn-primary']);?>

                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary" > Go back</a>
                    </div>
                 </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>

    
</div>
