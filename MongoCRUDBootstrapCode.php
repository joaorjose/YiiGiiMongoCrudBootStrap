<?php

Yii::import('ext.YiiMongoDbSuite.gii.mongoCRUD.MongoCRUDCode');

class MongoCRUDBootstrapCode extends MongoCRUDCode
{
	public function generateActiveRow($modelClass, $name)
	{
		if (preg_match('/^(password|pass|passwd|passcode)$/i',$name))
			$inputField='passwordFieldRow';
		else
			$inputField='textFieldRow';

		return "\$form->{$inputField}(\$model,'{$name}',array('class'=>'span5'))";
	}
}