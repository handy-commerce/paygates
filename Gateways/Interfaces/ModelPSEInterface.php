<?php
/**
 * Created by lexisvar.
 * User: lexisvar
 * Date: 06/12/17
 * Time: 12:11 PM
 */

namespace Gateways\Interfaces;

interface ModelPSEInterface extends ModelsInterface
{
    //Setters
    public function setBank($bank);
    public function setInvoice($invoice);
    public function setTypePerson($type_person);
    public function setCountry($country);
    public function setCellPhone($cell_phone);
    public function setUrlResponse($url_response);
    public function setUrlConfirmation($url_confirmation);
    public function setMethodConfirmation($method_confirmation);

    //Getters
    public function getBank();
    public function getInvoice();
    public function getTypePerson();
    public function getCountry();
    public function getCellPhone();
    public function getUrlResponse();
    public function getUrlConfirmation();
    public function getMethodConfirmation();
}