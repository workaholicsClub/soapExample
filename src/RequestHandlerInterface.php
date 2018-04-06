<?php

namespace StockQuote;

use StockQuote\ResponseTypes\GetOrderResponse;

interface RequestHandlerInterface
{
    public function SetFinalOrder(\stdClass $request): DTO;
    public function GetMaterialData(\stdClass $request): DTO;
    public function GetItemsAvail(\stdClass $request): DTO;
    public function GetExcludedDates(\stdClass $request): DTO;
    public function SetDeleteOrder(\stdClass $request): DTO;
    public function SetSignOrder(\stdClass $request): DTO;
    public function SetOrderChange(\stdClass $request): DTO;
    public function GetOrder(\stdClass $request): GetOrderResponse;
    public function SetOrderCreate(\stdClass $request): DTO;
    public function GetOperationResult(\stdClass $request): DTO;
}