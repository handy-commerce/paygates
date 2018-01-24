<?php
/**
 * Created by lexisvar.
 * User: lexisvar
 * Date: 06/12/17
 * Time: 12:11 PM
 */

namespace Gateways\Interfaces;

interface ModelCreditCardInterface extends ModelsInterface
{
    //Setters
    public function setTokenCard($token_card);
    public function setCustomerId($customer_id);
    public function setCardNumber($card_number);
    public function setCardExpYear($card_exp_year);
    public function setCardExpMonth($card_exp_month);
    public function setCardCvc($card_cvc);
    public function setBill($bill);
    public function setDescription($description);
    public function setTax($tax);
    public function setTaxBase($tax_base);
    public function setDues($dues);

    //Getters
    public function getTokenCard();
    public function getCustomerId();
    public function getCardNumber();
    public function getCardExpYear();
    public function getCardExpMonth();
    public function getCardCvc();
    public function getBill();
    public function getDescription();
    public function getTax();
    public function getTaxBase();
    public function getDues();
}