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
 * This is the wallets resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Wallets extends AbstractAPI
{
    /**
     * Get all wallets.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('wallets');
    }

    /**
     * Get a wallet by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function show(string $id): array
    {
        return $this->get("wallets/{$id}");
    }

    /**
     * Get all transactions for the given wallet.
     *
     * @param string $id
     *
     * @return array
     */
    public function transactions(string $id): array
    {
        return $this->get("wallets/{$id}/transactions");
    }

    /**
     * Get all transactions sent by the given wallet.
     *
     * @param string $id
     *
     * @return array
     */
    public function sentTransactions(string $id): array
    {
        return $this->get("wallets/{$id}/transactions/sent");
    }

    /**
     * Get all transactions received by the given wallet.
     *
     * @param string $id
     *
     * @return array
     */
    public function receivedTransactions(string $id): array
    {
        return $this->get("wallets/{$id}/transactions/received");
    }

    /**
     * Get all votes by the given wallet.
     *
     * @param string $id
     *
     * @return array
     */
    public function votes(string $id): array
    {
        return $this->get("wallets/{$id}/votes");
    }

    /**
     * Filter all wallets by the given parameters.
     *
     * @param array $parameters
     *
     * @return array
     */
    public function search(array $parameters): array
    {
        return $this->post('wallets/search', $parameters);
    }

    /**
     * Get all wallets sorted by balance in descending order.
     *
     * @return array
     */
    public function top(): array
    {
        return $this->get('wallets/top');
    }
}
