<?php

namespace infobip\api\model\omni\send\whatsapp\mediatemplatedata;

use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 */
class Header implements JsonSerializable
{
    /**
     * @var string
     * Text placeholder. Required for templates that contain a text header.
     */
    private $textPlaceholder;
    /**
     * @var string
     * Document URL. Required for templates that contain a document header.Supported document types are PDF, DOC(X), PPT(X), XLS(X). Maximum document size is 100MB.
     */
    private $documentUrl;
    /**
     * @var string
     * Document name. Required for templates that contain a document header.
     */
    private $documentFilename;
    /**
     * @var string
     * Image URL. Required for templates that contain an image header. Supported image types: JPG, JPEG, PNG. Maximum image size is 5MB.
     */
    private $imageUrl;
    /**
     * @var string
     * Video URL. Required for templates that contain a video header. Supported video types are MP4, 3GPP. Maximum video size is 16MB.
     */
    private $videoUrl;
    /**
     * @var double [ -90 .. 90 ]
     * Location latitude. The value must be between -90 and 90. Required for templates that contain a location header.
     */
    private $latitude;
    /**
     * @var double [ -180 .. 180 ]
     * Location longitude. The value must be between -180 and 180. Required for templates that contain a location header.
     */
    private $longitude;

    /**
     * @return string
     */
    public function getTextPlaceholder()
    {
        return $this->textPlaceholder;
    }

    /**
     * @param  string  $textPlaceholder
     */
    public function setTextPlaceholder($textPlaceholder)
    {
        $this->textPlaceholder = $textPlaceholder;
    }

    /**
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->documentUrl;
    }

    /**
     * @param  string  $documentUrl
     */
    public function setDocumentUrl($documentUrl)
    {
        $this->documentUrl = $documentUrl;
    }

    /**
     * @return string
     */
    public function getDocumentFilename()
    {
        return $this->documentFilename;
    }

    /**
     * @param  string  $documentFilename
     */
    public function setDocumentFilename($documentFilename)
    {
        $this->documentFilename = $documentFilename;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param  string  $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param  string  $videoUrl
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param  float  $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param  float  $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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