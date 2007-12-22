<?php

class License extends BaseLicense
{
    function __toString()
    {
        return $this->getName();
    }
}