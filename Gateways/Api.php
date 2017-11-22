<?php
namespace Gateways;

use Epayco\Epayco;

class Api
{

    protected $response;

    /**
     * @var array
     */
    protected $options = [];


    public function __construct(array $options)
    {
        $this->options = $options;
    }

    /**
     * @param $method
     * @param array $fields
     * @return array
     */
    protected function doRequest(array $fields)
    {
        //return $response;
    }

    /**
     * @return string
     */
    protected function getApiEndpoint()
    {
        return $this->options['sandbox'] ? 'http://sandbox.example.com' : 'http://example.com';
    }

    public function createToken(){

    }

    public function createPaymentPSE($fields){
        $epayco = new Epayco(array(
            "apiKey" => $fields['public_key'],
            "privateKey" => $fields['private_key'],
            "lenguage" => "ES",
            "test" => true
        ));
        return $pse = $epayco->bank->create($fields);

    }

    public function createPayment($fields){
        $epayco = new Epayco(array(
            "apiKey" => $fields['public_key'],
            "privateKey" => $fields['private_key'],
            "lenguage" => "ES",
            "test" => true
        ));

        $this->response = $epayco->charge->create($fields);
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}
