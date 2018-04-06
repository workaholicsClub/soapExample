<?php

namespace StockQuote;

interface RequestHandlerInterface
{
    public function SetFinalOrder(array $request): array;
    public function GetMaterialData(array $request): array;
    public function GetItemsAvail(array $request): array;
    public function GetExcludedDates(array $request): array;
    public function SetDeleteOrder(array $request): array;
    public function SetSignOrder(array $request): array;
    public function SetOrderChange(array $request): array;
    public function GetOrder(array $request): array;
    public function SetOrderCreate(array $request): array;
    public function GetOperationResult(array $request): array;
}