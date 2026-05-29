<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MarcasFixture
 */
class MarcasFixture extends TestFixture
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
                'created' => '2026-05-26 21:03:03',
                'modified' => '2026-05-26 21:03:03',
                'deleted' => '2026-05-26 21:03:03',
            ],
        ];
        parent::init();
    }
}
