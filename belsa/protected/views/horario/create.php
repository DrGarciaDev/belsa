<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Horarios', 'url'=>array('index')),
	array('label'=>'Administrar Horarios', 'url'=>array('admin')),
);
?>

<h1>Crear Horario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>