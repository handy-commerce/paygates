<?php
namespace Gateways;

use Gateways\Classes\Sdk;

class Api
{

    protected $response;

    /**
     * @var sdk
     */
    private $sdk;

    protected $sdk_name;

    protected $credentials;

    protected $token;

    public function __construct($gateway_name,$credentials)
    {
        $this->setCredentials($credentials);
        $this->setSdkName($gateway_name);
        switch($this->getSdkName()){
            case 'epayco':
                $this->setSdk(new Sdk($this->getSdkName(),$this->getCredentials()));
                break;
        }
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

    public function createToken($data){
        return $this->sdk->createToken($data);
    }

    public function createCustomer($data){
        return $this->sdk->createCustomer($data);
    }

    public function createPayment($data){
        $sdk = $this->sdk->getSDK();
        $this->setResponse($sdk->charge->create($data));
    }

    public function createPaymentPSE($data){
        $sdk = $this->sdk->getSDK();
        $this->setResponse($sdk->bank->create($data));

    }

    public function createPaymentCash($channel,$data){
        $sdk = $this->sdk->getSDK();
        $this->setResponse($sdk->cash->create($channel,$data));
    }

    public function getTransaction($id){
        $sdk = $this->sdk->getSDK();
        $this->setResponse($sdk->bank->get($id));
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

    /**
     * @return Sdk
     */
    public function getSdk()
    {
        return $this->sdk;
    }

    /**
     * @param Sdk $sdk
     */
    public function setSdk(Sdk $sdk)
    {
        $this->sdk = $sdk;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}
