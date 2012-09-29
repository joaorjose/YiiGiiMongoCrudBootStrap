<?php

Yii::setPathOfAlias('mongoExtRoot', realpath(implode(DIRECTORY_SEPARATOR, array(
	dirname(__FILE__), '..', '..',
))));

class MongoCRUDBootstrapGenerator extends CCodeGenerator
{
	public $codeModel = 'mongoExtRoot.gii.mongoCRUDBootstrap.MongoCRUDBootstrapCode';
}