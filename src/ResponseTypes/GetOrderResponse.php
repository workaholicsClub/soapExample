<?php

namespace StockQuote\ResponseTypes;

use StockQuote\DTO;

class GetOrderResponse extends DTO
{
    /**
     * @var string
     */
    public $OrderDate;

    /**
     * @var OrderItem[]
     */
    public $OrderItems;

    /**
     * @var string
     */
    public $Result;

    /**
     * @var string
     */
    public $ErrorMessage;
}