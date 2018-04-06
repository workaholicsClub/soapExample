<?php

namespace StockQuote;

/**
 *
 * @struct OrderItem {
 *     @type string          "MaterialID"      номер материала
 *     @type string          "Quantity"        зарезервированное в заказе количество
 * }

 * @struct GetOrderRequest {
 *     @type string          "DocumentNumber"  номер документа поставщика
 * }
 *
 * @struct GetOrderResponse {
 *     @type string          "OrderDate"       дата заказа
 *     @type `OrderItem`[]   "OrderItems"      таблица позиций заказа
 *     @type integer         "Result"          результат запроса (0 – успешно, 1 – ошибка)
 *     @type string          "ErrorMessage"    в случае ошибки, содержит сообщение об ошибке
 * }
 */

/**
 * Class RequestHandler
 * @package StockQuote
 * 
 * Названия функций должны соответствовать названиям операций в WSDL-файле
 */
class RequestHandler implements RequestHandlerInterface
{
    const RESULT_SUCCESS = 0;
    const RESULT_ERROR = 1;

    public function SetFinalOrder(array $request): array {
        // TODO: Implement SetFinalOrder() method.
    }

    public function GetMaterialData(array $request): array {
        // TODO: Implement GetMaterialData() method.
    }

    public function GetItemsAvail(array $request): array {
        // TODO: Implement GetItemsAvail() method.
    }

    public function GetExcludedDates(array $request): array {
        // TODO: Implement GetExcludedDates() method.
    }

    public function SetDeleteOrder(array $request): array {
        // TODO: Implement SetDeleteOrder() method.
    }

    public function SetSignOrder(array $request): array {
        // TODO: Implement SetSignOrder() method.
    }

    public function SetOrderChange(array $request): array {
        // TODO: Implement SetOrderChange() method.
    }

    /**
     * @param `GetOrderRequest` $request
     * @return `GetOrderResponse`
     */
    public function GetOrder(array $request): array {
        $orderId = $request['DocumentNumber'];

        $item = [
            'MaterialID' => '9daf13cc-3694-49d1-ad30-16a21d7935ed',
            'Quantity'   => 3,
        ];

        return [
            "OrderDate"    => "2018-04-06 20:30:40",
            "OrderItems"   => [$item],
            "Result"       => self::RESULT_SUCCESS,
            "ErrorMessage" => "",
        ];
    }

    public function SetOrderCreate(array $request): array {
        // TODO: Implement SetOrderCreate() method.
    }

    public function GetOperationResult(array $request): array {
        // TODO: Implement GetOperationResult() method.
    }
}