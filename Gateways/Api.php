<?php
namespace Gateways;

use Gateways\Classes\Sdk;

class Api
{

    protected $response;

    /**
     * @var sdk
     */
    protected $sdk;

    protected $sdk_name;

    protected $credentials;

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

    public function createPayment($data){
        $sdk = new Sdk($this->getSdkName(),$this->getCredentials());
        $this->sdk = $sdk->getSDK();
        $this->response = $this->sdk->charge->create($data);
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

    /**
     * @param mixed $sdk_name
     */
    public function setSdkName($sdk_name)
    {
        $this->sdk_name = $sdk_name;
    }

    /**
     * @return mixed
     */
    public function getSdkName()
    {
        return $this->sdk_name;
    }

    /**
     * @param mixed $credentials
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}
