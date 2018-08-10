<?php
/**
 * Created by Alexis Vargas.
 * User: lexisvar
 * Date: 23/11/17
 * Time: 01:00 PM
 */

namespace Gateways\Classes;

use Gateways\Interfaces\SdkInterface;
use Epayco\Epayco;

class Sdk implements SdkInterface
{
    protected $sdk;
    protected $name;
    protected $credentials;

    public function __construct($name,$credentials)
    {
        $this->setName($name);
        $this->setCredentials($credentials);
        $this->setSDK();
    }

    public function setCredentials(array $credentials){
        $this->credentials = $credentials;
    }

    public function setSDK()
    {
        switch ($this->getName()){
            case 'epayco':
                $this->sdk = new Epayco($this->credentials);
                break;
        }
    }

    public function getSDK(){
        return $this->sdk;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function createToken($data){
        switch ($this->getName()){
            case 'epayco':
                $token = $this->sdk->token->create($data);
                return $token;
                break;
        }
    }

    public function createCustomer($data){
        switch ($this->getName()){
            case 'epayco':
                $customer = $this->sdk->customer->create($data);
                return $customer;
                break;
        }
    }

}