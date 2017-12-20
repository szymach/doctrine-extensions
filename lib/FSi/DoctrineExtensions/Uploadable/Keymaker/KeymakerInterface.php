<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\DoctrineExtensions\Uploadable\Keymaker;

interface KeymakerInterface
{
    /**
     * Creates a key for a file.
     *
     * @param object $object
     */
    public function createKey(
        $object,
        string $property,
        string $id,
        string $originalName,
        ?string $pattern = null
    ): string;
}
