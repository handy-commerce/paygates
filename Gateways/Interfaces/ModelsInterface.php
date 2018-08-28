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
    public function setDocType($doc_type);
    public function setDocNumber($doc_number);
    public function setName($name);
    public function setLastName($last_name);
    public function setEmail($email);
    public function setDescription($description);
    public function setValue($value);
    public function setTax($tax);
    public function setTaxBase($tax_base);
    public function setCurrency($currency);
    public function setDetails();
    public function getDetails();
}