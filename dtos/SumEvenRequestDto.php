<?php
namespace app\dtos;

use yii\base\Model;

class SumEvenRequestDto extends Model
{
    public array $numbers;

    public function rules(): array
    {
        return [
            [['numbers'], 'required'],
            [['numbers'], 'each', 'rule' => [
                'integer',
                'message' => 'Value "{value}" must be an integer.',
            ]],
        ];
    }
}