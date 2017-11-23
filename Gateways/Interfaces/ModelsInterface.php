<?php
/**
 * Created by Alexis Vargas.
 * User: lexisvar
 * Date: 23/11/17
 * Time: 10:55 AM
 */

namespace Gateways\Interfaces;

interface ModelsInterface
{
    public function setPublicKey($public_key);
    public function setPrivateKey($private_key);
    public function setTokenCard($token_card);
    public function setCustomerId($customer_id);
    public function setDocType($doc_type);
    public function setDocNumber($doc_number);
    public function setName($name);
    public function setLastName($last_name);
    public function setEmail($email);
    public function setBill($bill);
    public function setDescription($description);
    public function setValue($value);
    public function setTax($tax);
    public function setTaxBase($tax_base);
    public function setCurrency($currency);
    public function setDues($dues);
    public function setDetails();
    public function getDetails();
}