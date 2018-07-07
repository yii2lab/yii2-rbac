<?php

namespace yii2lab\rbac\domain\repositories\memory;

use yii\helpers\ArrayHelper;
use yii2lab\domain\repositories\BaseRepository;
use Yii;
use yii2lab\rbac\domain\interfaces\repositories\ManagerInterface;

class ManagerRepository extends BaseRepository implements ManagerInterface {
	
	public function isGuestOnlyAllowed($rule) {
		return $this->isInRules('?', $rule) && !Yii::$app->user->isGuest;
	}

	public function isAuthOnlyAllowed($rule) {
		return $this->isInRules('@', $rule) && Yii::$app->user->isGuest;
	}

	private function isInRules($name, $rules) {
		return in_array($name, ArrayHelper::toArray($rules));
	}
	
}