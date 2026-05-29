<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarrosFixture
 */
class CarrosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'modelo' => 'Lorem ipsum dolor sit amet',
                'cor' => 'Lorem ipsum dolor ',
                'marca_id' => 1,
                'created' => '2026-05-26 21:07:54',
                'modified' => '2026-05-26 21:07:54',
                'deleted' => '2026-05-26 21:07:54',
            ],
        ];
        parent::init();
    }
}
