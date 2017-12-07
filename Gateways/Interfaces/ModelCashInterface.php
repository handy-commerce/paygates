<?php
/**
 * Created by lexisvar.
 * User: lexisvar
 * Date: 06/12/17
 * Time: 12:11 PM
 */

namespace Gateways\Interfaces;

interface ModelCashInterface extends ModelsInterface
{

    //Setters
    public function setInvoice($invoice);
    public function setDescription($description);
    public function setTypePerson($type_person);
    public function setCellPhone($cell_phone);
    public function setEndDate($end_date);
    public function setUrlResponse($url_response);
    public function setUrlConfirmation($url_confirmation);
    public function setMethodConfirmation($method_confirmation);
    public function setDetails();

    //Getters
    public function getInvoice();
    public function getDescription();
    public function getTypePerson();
    public function getCellPhone();
    public function getEndDate();
    public function getUrlResponse();
    public function getUrlConfirmation();
    public function getMethodConfirmation();
    public function getDetails();

}