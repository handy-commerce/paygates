<?php
/**
 * Created by PhpStorm.
 * User: Alexis Vargas
 * Date: 10/08/18
 * Time: 09:53 AM
 */

namespace tests;

use Gateways\Api;
use PHPUnit\Framework\TestCase;

class testApiEpayco extends TestCase
{
    protected $sdk_name = 'epayco';
    protected $api;
    protected $apiKey;
    protected $privateKey;
    protected $lenguage;
    protected $test;
    protected $client;
    protected $testCard;
    protected $token;

    protected $epaycoCreditCartPaymentExample = array(
        "doc_type" => "CC",
        "doc_number" => "1035851980",
        "name" => "John",
        "last_name" => "Doe",
        "email" => "example@email.com",
        "bill" => "OR-1234",
        "description" => "Test Payment",
        "value" => "116000",
        "tax" => "16000",
        "tax_base" => "100000",
        "currency" => "COP",
        "dues" => "12"
    );

    protected function setup()
    {
        $this->apiKey = "491d6a0b6e992cf924edd8d3d088aff1";
        $this->privateKey = "268c8e0162990cf2ce97fa7ade2eff5a";
        $this->lenguage = "ES";
        $this->test = true;
        $this->client;

        $credentials = array(
            'apiKey' => $this->apiKey,
            'privateKey' => $this->privateKey,
            'lenguage' => $this->lenguage,
            'test' => $this->test
        );

        $this->api = new Api('epayco',$credentials);

        $this->testCard = array(
        "card[number]" => '4575623182290326',
        "card[exp_year]" => "2017",
        "card[exp_month]" => "07",
        "card[cvc]" => "123");

    }


    public function testGetSdkName()
    {
        $this->setup();
        $expected = 'epayco';
        $this->assertEquals(
            $expected,
            $this->api->getSdkName()
        );
    }

    public function testGetCredentials(){
        $this->setup();
        $expected = array(
            'apiKey' => $this->apiKey,
            'privateKey' => $this->privateKey,
            'lenguage' => $this->lenguage,
            'test' => $this->test
        );
        $this->assertEquals(
            $expected,
            $this->api->GetCredentials()
        );
    }

    public function testCreateToken(){
        $this->setup();
        $token = $this->api->createToken($this->testCard);
        $this->assertTrue(
            isset($token->success)
        );
    }

    public function testCreateCustomer(){
        $this->setup();
        $token = $this->api->createToken($this->testCard);
        $data = array(
            "token_card" => $token->id,
            "name" => "Joe Doe",
            "email" => "joe@payco.co",
            "phone" => "3005234321",
            "default" => true
        );
        $customer = $this->api->createCustomer($data);
        $this->assertTrue(
            isset($customer->success)
        );
    }
    public function testCreatePayment(){
        $this->setup();
        $token = $this->api->createToken($this->testCard);
        $data = array(
            "token_card" => $token->id,
            "name" => "Joe Doe",
            "email" => "joe@payco.co",
            "phone" => "3005234321",
            "default" => true
        );
        $customer = $this->api->createCustomer($data);
        $this->api->createPayment(array(
            "token_card" => $token->id,
            "customer_id" => $customer->data->customerId,
            "doc_type" => "CC",
            "doc_number" => "1035851980",
            "name" => "John",
            "last_name" => "Doe",
            "email" => "example@email.com",
            "bill" => "OR-1234",
            "description" => "Test Payment",
            "value" => "116000",
            "tax" => "16000",
            "tax_base" => "100000",
            "currency" => "COP",
            "dues" => "12"
        ));
        $response = $this->api->getResponse();
        $this->assertTrue(
            isset($response->success)
        );
    }

    public function testCreatePaymentPSE(){
        $this->setup();
        $this->api->createPaymentPSE(array(
            "bank" => "1007",
            "invoice" => "78kk98kl98",
            "description" => "Pago pruebas",
            "value" => "10000",
            "tax" => "0",
            "tax_base" => "0",
            "currency" => "COP",
            "type_person" => "0",
            "doc_type" => "CC",
            "doc_number" => "10358519",
            "name" => "PRUEBAS",
            "last_name" => "PAYCO",
            "email" => "no-responder@payco.co",
            "country" => "CO",
            "cell_phone" => "3010000001",
            "url_response" => "https:/secure.payco.co/restpagos/testRest/endpagopse.php",
            "url_confirmation" => "https:/secure.payco.co/restpagos/testRest/endpagopse.php",
            "method_confirmation" => "POST",
        ));
        $response = $this->api->getResponse();
        $this->assertTrue(
            isset($response->success)
        );
    }


    public function testGetTransaction(){
        $this->setup();
        $this->api->createPaymentPSE(array(
            "bank" => "1007",
            "invoice" => "1472050778",
            "description" => "Pago pruebas",
            "value" => "10000",
            "tax" => "0",
            "tax_base" => "0",
            "currency" => "COP",
            "type_person" => "0",
            "doc_type" => "CC",
            "doc_number" => "10358519",
            "name" => "PRUEBAS",
            "last_name" => "PAYCO",
            "email" => "no-responder@payco.co",
            "country" => "CO",
            "cell_phone" => "3010000001",
            "url_response" => "https:/secure.payco.co/restpagos/testRest/endpagopse.php",
            "url_confirmation" => "https:/secure.payco.co/restpagos/testRest/endpagopse.php",
            "method_confirmation" => "POST",
        ));
        $response = $this->api->getResponse();

        $this->api->getTransaction($response->data->transactionID);
        $transaction = $this->api->getResponse();

        $this->assertTrue(
            isset($transaction->success)
        );
    }


}
