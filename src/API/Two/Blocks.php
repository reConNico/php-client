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

namespace ArkEcosystem\Client\API\Two;

use ArkEcosystem\Client\API\AbstractAPI;

/**
 * This is the blocks resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Blocks extends AbstractAPI
{
    /**
     * Get all blocks.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('blocks');
    }

    /**
     * Get a block by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function show(string $id): array
    {
        return $this->get("blocks/{$id}");
    }

    /**
     * Get all transactions by the given block.
     *
     * @param string $id
     *
     * @return array
     */
    public function transactions(string $id): array
    {
        return $this->get("blocks/{$id}/transactions");
    }

    /**
     * Filter all blocks by the given parameters.
     *
     * @param array $parameters
     *
     * @return array
     */
    public function search(array $parameters): array
    {
        return $this->post('blocks/search', $parameters);
    }
}
