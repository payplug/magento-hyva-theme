<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Payplug\PaymentsHyvaTheme\ViewModel;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Payplug\Payments\Helper\Oney;

class OneyDisplayer implements ArgumentInterface
{
    private const ONEY_SIMULATION_ROUTE = 'hyva_checkout_payplug/oney/simulation';

    /**
     * @param Oney $oney
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
        private readonly Oney $oney,
        private readonly UrlInterface $urlBuilder
    ) {
    }

    /**
     * Can display Oney
     *
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function canDisplayOney(): bool
    {
        return $this->oney->canDisplayOney();
    }

    /**
     * Get Oney Simulation Url
     *
     * @return string
     */
    public function getOneySimulationUrl(): string
    {
        return $this->urlBuilder->getUrl(self::ONEY_SIMULATION_ROUTE);
    }
}
