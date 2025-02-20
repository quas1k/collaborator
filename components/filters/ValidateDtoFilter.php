<?php
namespace app\components\filters;

use Yii;
use yii\base\ActionFilter;
use yii\web\UnprocessableEntityHttpException;

class ValidateDtoFilter extends ActionFilter
{
    public string $dtoClass;

    public function beforeAction($action)
    {
        $dto = Yii::createObject($this->dtoClass);
        $dto->load(Yii::$app->request->getBodyParams(), '');

        if (!$dto->validate()) {
            throw new UnprocessableEntityHttpException(json_encode($dto->errors));
        }

        Yii::$app->request->setBodyParams(array_merge(
            Yii::$app->request->getBodyParams(),
            ['validatedDto' => $dto]
        ));

        return parent::beforeAction($action);
    }
}