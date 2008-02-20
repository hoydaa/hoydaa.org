<?php

class User extends BaseUser
{
    public function setPassword($password)
    {
        $salt = md5(rand(100000, 999999).$this->getUsername().$this->getEmail());
        $this->setSalt($salt);
        $this->setSha1Password(sha1($salt.$password));
    }

    public function __toString()
    {
        return $this->getUsername();
    }
}