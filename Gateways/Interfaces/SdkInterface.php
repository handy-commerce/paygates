<?php
/**
 * Created by Alexis Vargas.
 * User: lexisvar
 * Date: 23/11/17
 * Time: 14:13 PM
 */

namespace Gateways\Interfaces;

interface SdkInterface
{
    public function setCredentials(array $credentials);
    public function setSDK();
    public function getSDK();
}