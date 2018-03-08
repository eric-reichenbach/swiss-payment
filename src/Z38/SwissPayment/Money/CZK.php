<?php

namespace Z38\SwissPayment\Money;

/**
 * Sum of money in Swiss francs
 */
class CZK extends Money
{
    /**
     * {@inheritdoc}
     */
    final public function getCurrency()
    {
        return 'CZK';
    }

    /**
     * {@inheritdoc}
     */
    final protected function getDecimals()
    {
        return 2;
    }
}
