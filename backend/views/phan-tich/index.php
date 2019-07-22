<?php
/**
 * Created by nvdiepse.
 * User: NgoGiaDiep
 * Date: 6/25/2019
 * Time: 4:14 PM
 */
use kartik\grid\GridView;
$this->title = 'Phân tích';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-primary">
    <div class="box-header with-border">
        <?= \yii\helpers\Html::a('Thêm mới',['create'],['class'=>'btn btn-success','title'=>'Thêm mới']) ?>
        <br>
    </div><!-- /.box-header -->

    <div class="box-body">
        <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'Title',
                'Description',
                'Thumbnail',
                'Content:ntext',
                'Type',
                'Date',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>