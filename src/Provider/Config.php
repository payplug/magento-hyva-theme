<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Payplug\PaymentsHyvaTheme\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    private const HYVA_MODULE_NAME = 'Payplug_PaymentsHyvaTheme';
    public const HYVA_VERSION_XML_PATH = 'hyva/checkout_payplug/version';

    public function __construct(
        protected ScopeConfigInterface $scopeConfig
    ) {
    }

    public function getHyvaModuleVersion(): string
    {
        return (string)$this->scopeConfig->getValue(self::HYVA_VERSION_XML_PATH);
    }

    public function getHyvaModuleName(): string
    {
        return Config::HYVA_MODULE_NAME;
    }
}
