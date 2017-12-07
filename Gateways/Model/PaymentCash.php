<?php
namespace Gateways\Model;

use Gateways\Interfaces\ModelCashInterface;

class PaymentCash implements ModelCashInterface
{

    protected $public_key;
    protected $private_key;
    protected $invoice;
    protected $description;
    protected $value;
    protected $tax;
    protected $tax_base;
    protected $currency;
    protected $type_person;
    protected $doc_type;
    protected $doc_number;
    protected $name;
    protected $last_name;
    protected $email;
    protected $cell_phone;
    protected $end_date;
    protected $url_response;
    protected $url_confirmation;
    protected $method_confirmation;
    public $details;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * @param mixed $public_key
     */
    public function setPublicKey($public_key)
    {
        $this->public_key = $public_key;
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
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param mixed $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return mixed
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param mixed $invoice
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
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
    public function getTypePerson()
    {
        return $this->type_person;
    }

    /**
     * @param mixed $type_person
     */
    public function setTypePerson($type_person)
    {
        $this->type_person = $type_person;
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
    public function getCellPhone()
    {
        return $this->cell_phone;
    }

    /**
     * @param mixed $cell_phone
     */
    public function setCellPhone($cell_phone)
    {
        $this->cell_phone = $cell_phone;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getUrlResponse()
    {
        return $this->url_response;
    }

    /**
     * @param mixed $url_response
     */
    public function setUrlResponse($url_response)
    {
        $this->url_response = $url_response;
    }

    /**
     * @return mixed
     */
    public function getUrlConfirmation()
    {
        return $this->url_confirmation;
    }

    /**
     * @param mixed $url_confirmation
     */
    public function setUrlConfirmation($url_confirmation)
    {
        $this->url_confirmation = $url_confirmation;
    }

    /**
     * @return mixed
     */
    public function getMethodConfirmation()
    {
        return $this->method_confirmation;
    }

    /**
     * @param mixed $method_confirmation
     */
    public function setMethodConfirmation($method_confirmation)
    {
        $this->method_confirmation = $method_confirmation;
    }

    public function setDetails()
    {
        $this->details = array(
            'public_key' => $this->public_key,
            'private_key' => $this->private_key,
            'invoice' => $this->invoice,
            'description' => $this->description,
            'value' => $this->value,
            'tax' => $this->tax,
            'tax_base' => $this->tax_base,
            'currency' => $this->currency,
            'type_person' => $this->type_person,
            'doc_type' => $this->doc_type,
            'doc_number' => $this->doc_number,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'end_date' => $this->end_date,
            'cell_phone' => $this->cell_phone,
            'url_response' => $this->url_response,
            'url_confirmation' => $this->url_confirmation,
            'method_confirmation' => $this->method_confirmation,
        );
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }
}
