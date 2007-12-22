<?php

class Developer extends BaseDeveloper
{
    public function __toString()
    {
        return $this->getUser()->getUsername();
    }
}