<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Tests\Client\API\Two;

use ArkEcosystem\Tests\Client\TestCase;

/**
 * This is the votes resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class VotesTest extends TestCase
{
    /** @test */
    public function all_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'votes', function ($mock) {
            return $mock->all();
        });
    }

    /** @test */
    public function show_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'votes/dummy', function ($mock) {
            return $mock->show('dummy');
        });
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return \ArkEcosystem\Client\API\Two\Votes::class;
    }
}
