<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Order;

trigger_deprecation(
    'sylius/order',
    '1.14',
    'The "%s" class is deprecated. Will be removed in Sylius 2.0.',
    CartActions::class,
);
/** @deprecated since Sylius 1.14 and will be removed in Sylius 2.0. */
interface CartActions
{
    public const ADD = 'add';

    public const REMOVE = 'remove';
}
