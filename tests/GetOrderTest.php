<?php

use PHPUnit\Framework\TestCase;
use StockQuote\RequestHandler;
use StockQuote\RequestTypes\GetOrderRequest;
use StockQuote\ResponseTypes\GetOrderResponse;

class GetOrderTest extends TestCase
{
    public function testExistentOrder() {
        $request = new GetOrderRequest();
        $request->DocumentNumber = '1234567890';

        $handler = new RequestHandler();

        $response = $handler->GetOrder($request);

        $this->assertInstanceOf(GetOrderResponse::class, $response);
        $this->assertEquals($response->Result, RequestHandler::RESULT_SUCCESS);
        $this->assertEmpty($response->ErrorMessage);
        $this->assertCount(1, $response->OrderItems);
    }

    public function testUnexistentOrder() {
        $request = new GetOrderRequest();
        $request->DocumentNumber = '1111111111';

        $handler = new RequestHandler();

        $response = $handler->GetOrder($request);

        $this->assertInstanceOf(GetOrderResponse::class, $response);
        $this->assertEquals($response->Result, RequestHandler::RESULT_ERROR);
        $this->assertEquals("Заказ не найден", $response->ErrorMessage);
        $this->assertCount(0, $response->OrderItems);
    }
}