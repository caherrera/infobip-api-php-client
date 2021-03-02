<?php

namespace infobip\api\model\omni\send\whatsapp;


use infobip\api\model\omni\send\whatsapp\mediatemplatedata\Body;
use infobip\api\model\omni\send\whatsapp\mediatemplatedata\Header;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 */
class MediaTemplateData implements JsonSerializable
{
    /**
     * @var Header;
     * Media template header. Required for media templates which contain headers
     */
    private $header;

    /**
     * @var Body
     * Media template body
     */
    private $body;
    /**
     * @var array
     * Media template buttons
     */
    private $buttons;

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param  Header  $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return Body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param  Body  $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getButtons()
    {
        throw new Exception("property not implemented");
    }


    public function setButtons($buttons)
    {
        throw new Exception("property not implemented");
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