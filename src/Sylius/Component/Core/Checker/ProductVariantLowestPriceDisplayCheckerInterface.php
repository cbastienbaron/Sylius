<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Core\Checker;

use Sylius\Component\Core\Model\ProductVariantInterface;

interface ProductVariantLowestPriceDisplayCheckerInterface
{
    public function isLowestPriceDisplayable(ProductVariantInterface $productVariant, array $context): bool;
}
