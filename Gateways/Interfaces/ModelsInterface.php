<?php
/**
 * Created by Alexis Vargas.
 * User: lexisvar
 * Date: 23/11/17
 * Time: 10:55 AM
 */

namespace Gateways\Interfaces;

interface Models
{
    public function SetDataPayment(array $data,Payment $model);
}