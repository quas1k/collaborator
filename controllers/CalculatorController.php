<?php
namespace app\controllers;

use app\components\filters\ValidateDtoFilter;
use Yii;
use yii\web\Controller;
use app\dtos\SumEvenRequestDto;
use app\interfaces\CalculatorInterface;

class CalculatorController extends Controller
{
    private CalculatorInterface $calculatorService;

    public function __construct($id, $module, CalculatorInterface $calculatorService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->calculatorService = $calculatorService;
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => ValidateDtoFilter::class,
                'dtoClass' => SumEvenRequestDto::class,
                'only' => ['calculate-sum-even']
            ]
        ];
    }

    public function actionCalculateSumEven()
    {
        $dto = Yii::$app->request->getBodyParam('validatedDto');

        $result = $this->calculatorService->calculateEvenSum($dto->numbers);

        return $this->asJson(['sum' => $result]);
    }
}