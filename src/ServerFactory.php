<?php

namespace StockQuote;

use SoapServer;

class ServerFactory
{
    private static function disableSoapCache() {
        ini_set( "soap.wsdl_cache_enabled", 0 );
        ini_set( 'soap.wsdl_cache_ttl', 0 );
    }

    public static function make(): SoapServer {
        self::disableSoapCache();

        $wsdlFullPath = realpath('../stockquote.wsdl');
        $instance = new SoapServer( $wsdlFullPath );
        $instance->setClass(RequestHandler::class);
        
        return $instance;
    }
}