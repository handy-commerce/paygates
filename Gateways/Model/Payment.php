<?php
namespace Gateways\Model;

use Gateways\Interfaces\ModelCreditCardInterface;

class Payment implements ModelCreditCardInterface
{
    protected $public_key;
    protected $private_key;
    protected $token_card;
    protected $customer_id;
    protected $doc_type;
    protected $doc_number;
    protected $name;
    protected $last_name;
    protected $email;
    protected $bill;
    protected $description;
    protected $value;
    protected $tax;
    protected $tax_base;
    protected $currency;
    protected $dues;
    public $details;


    public function __construct()
    {

    }

    /**
     * @param mixed $private_key
     */
    public function setPrivateKey($private_key)
    {
        $this->private_key = $private_key;
    }

    /**
     * @return mixed
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * @param mixed $public_key
     */
    public function setPublicKey($public_key)
    {
        $this->public_key = $public_key;
    }

    /**
     * @return string
     */
    public function getTokenCard()
    {
        return $this->token_card;
    }

    /**
     * @param string $token_card
     */
    public function setTokenCard($token_card)
    {
        $this->token_card = $token_card;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return mixed
     */
    public function getDocType()
    {
        return $this->doc_type;
    }

    /**
     * @param mixed $doc_type
     */
    public function setDocType($doc_type)
    {
        $this->doc_type = $doc_type;
    }

    /**
     * @return mixed
     */
    public function getDocNumber()
    {
        return $this->doc_number;
    }

    /**
     * @param mixed $doc_number
     */
    public function setDocNumber($doc_number)
    {
        $this->doc_number = $doc_number;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * @param mixed $bill
     */
    public function setBill($bill)
    {
        $this->bill = $bill;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return mixed
     */
    public function getTaxBase()
    {
        return $this->tax_base;
    }

    /**
     * @param mixed $tax_base
     */
    public function setTaxBase($tax_base)
    {
        $this->tax_base = $tax_base;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getDues()
    {
        return $this->dues;
    }

    /**
     * @param mixed $dues
     */
    public function setDues($dues)
    {
        $this->dues = $dues;
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails()
    {
        $this->details = array(
            'public_key' => $this->public_key,
            'private_key' => $this->private_key,
            'token_card' => $this->token_card,
            'customer_id' => $this->customer_id,
            'doc_type' => $this->doc_type,
            'doc_number' => $this->doc_number,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'bill' => $this->bill,
            'description' => $this->description,
            'value' => $this->value,
            'tax' => $this->tax,
            'tax_base' => $this->tax_base,
            'currency' => $this->currency,
            'dues' => $this->dues
        );
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

}
