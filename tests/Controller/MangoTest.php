<?php
declare(strict_types=1);

namespace tests\Controller;

use app\Controller\Mango;
use PHPUnit\Framework\TestCase;


class MangoTest extends TestCase
{
    /**
     * @dataProvider weightScaleProvider
     * @return void
     */
    public function testWeightScale($params, $expect)
    {
        $mango = new Mango();
        $weightScale = $mango->weightScale($params['number'], $params['weight']);
        $this->assertEquals($expect, $weightScale);
    }

    public function weightScaleProvider(): array
    {
        return [
            'case-1-200' => [
                'params' => [
                    'number' => 1,
                    'weight' => 200
                ],
                'expect' => 200
            ],
            'case-1-2300' => [
                'params' => [
                    'number' => 2,
                    'weight' => 2300
                ],
                'expect' => 4600
            ],
            'case-1-2400' => [
                'params' => [
                    'number' => 1,
                    'weight' => 2400
                ],
                'expect' => 200
            ]
        ];
    }

}
