<?php
/**
 * Created by PhpStorm.
 * User: kost
 * Date: 3.12.18
 * Time: 17.17
 */

namespace Vaderlab\EAV\Entity;


interface ValueInterface
{
    public function getValue();

    public function setValue( $value ): ValueInterface;

    public function __toString();
}