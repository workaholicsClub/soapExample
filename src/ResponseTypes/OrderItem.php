<?php

namespace StockQuote\ResponseTypes;

use StockQuote\DTO;

class OrderItem extends DTO
{
    /**
     * @var string
     */
    public $MaterialID;

    /**
     * @var integer
     */
    public $Quantity;
}