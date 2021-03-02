<?php

namespace infobip\api\model\omni\send\whatsapp\mediatemplatedata;

use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 */
class Body implements JsonSerializable
{
    /**
     * @var array
     * required
     * Array of strings
     * Media template body placeholders. The value must not be null, but can be an empty array. Values within the array must not be null or empty.
     */
    private $placeholders;

    /**
     * @return array
     */
    public function getPlaceholders()
    {
        return $this->placeholders;
    }

    /**
     * @param  array  $placeholders
     */
    public function setPlaceholders($placeholders)
    {
        $this->placeholders = $placeholders;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}