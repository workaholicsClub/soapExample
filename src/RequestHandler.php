<?php

namespace StockQuote;

use StockQuote\RequestTypes\GetOrderRequest;
use StockQuote\ResponseTypes\GetOrderResponse;
use StockQuote\ResponseTypes\OrderItem;

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

    private function convertToRequestClass($requestClass, $request) {
        return new $requestClass((array) $request);
    }

    public function SetFinalOrder(\stdClass $request): DTO {
        // TODO: Implement SetFinalOrder() method.
    }

    public function GetMaterialData(\stdClass $request): DTO {
        // TODO: Implement GetMaterialData() method.
    }

    public function GetItemsAvail(\stdClass $request): DTO {
        // TODO: Implement GetItemsAvail() method.
    }

    public function GetExcludedDates(\stdClass $request): DTO {
        // TODO: Implement GetExcludedDates() method.
    }

    public function SetDeleteOrder(\stdClass $request): DTO {
        // TODO: Implement SetDeleteOrder() method.
    }

    public function SetSignOrder(\stdClass $request): DTO {
        // TODO: Implement SetSignOrder() method.
    }

    public function SetOrderChange(\stdClass $request): DTO {
        // TODO: Implement SetOrderChange() method.
    }

    /**
     * @param \stdClass $request
     * @return GetOrderResponse
     */
    public function GetOrder(\stdClass $request): GetOrderResponse {
        /**
         * @var GetOrderRequest $request
         */
        $request = $this->convertToRequestClass(GetOrderRequest::class, $request);

        $orderId = $request->DocumentNumber;

        if ($orderId === '1234567890') {
            $item = new OrderItem([
                'MaterialID' => '9daf13cc-3694-49d1-ad30-16a21d7935ed',
                'Quantity'   => 3,
            ]);

            $response = new GetOrderResponse([
                "OrderDate"    => "2018-04-06 20:30:40",
                "OrderItems"   => [$item],
                "Result"       => self::RESULT_SUCCESS,
                "ErrorMessage" => "",
            ]);
        }
        else {
            $response = new GetOrderResponse([
                "OrderDate"    => "",
                "OrderItems"   => [],
                "Result"       => self::RESULT_ERROR,
                "ErrorMessage" => "Заказ не найден",
            ]);
        }

        return $response;
    }

    public function SetOrderCreate(\stdClass $request): DTO {
        // TODO: Implement SetOrderCreate() method.
    }

    public function GetOperationResult(\stdClass $request): DTO {
        // TODO: Implement GetOperationResult() method.
    }
}