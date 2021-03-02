<?php

namespace infobip\api\model\omni\send;

use Exception;
use infobip\api\model\omni\send\whatsapp\MediaTemplateData;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 */
class WhatsAppData implements JsonSerializable
{

    /**
     * $mediaTemplateData
     *
     * @var MediaTemplateData
     * Media template definitions
     */
    private $mediaTemplateData;

    /**
     * @var string
     */
    private $templateName;

    /**
     * @var string
     * @deprecated
     * Template namespace
     */
    private $templateNamespace;

    /**
     * @var array
     */
    private $templateData;

    /**
     * @var string
     * The code of the language or locale to use. Needs to be exactly the code with which the template was registered.
     */
    private $language;

    /**
     * $text
     *
     * @var string
     * Text of the message that will be sent.
     */
    private $text;

    /**
     * @var int
     */
    private $validityPeriod;

    /**
     * @var string
     * Default: "MINUTES"
     * Enum: "NANOSECONDS" "MICROSECONDS" "MILLISECONDS" "SECONDS" "MINUTES" "HOURS" "DAYS"
     * The message validity period time unit, allowing finer time granulation.
     */
    private $validityPeriodTimeUnit;

    /**
     * $fileUrl
     *
     * @var string [ 0 .. 2048 ] characters
     * URL of the file sent in the WhatsApp message. Max 2048 characters. Supported file types are PDF, DOC(X), PPT(X), XLS(X). Maximum file size is 100MB.
     */
    private $fileUrl;

    /**
     * $imageUrl
     *
     * @var string [ 0 .. 2048 ] characters
     * URL of the image sent in the WhatsApp message. Max 2048 characters. Supported image types: JPG, JPEG, PNG. Maximum image size is 5MB.
     */
    private $imageUrl;

    /**
     * $audioUrl
     *
     * @var string [ 0 .. 2048 ] characters
     * URL of the audio file sent in the WhatsApp message. Max 2048 characters. Supported audio types are AAC, AMR, MP3, OPUS. Maximum audio size is 16MB.
     */
    private $audioUrl;

    /**
     * $videoUrl
     *
     * @var string [ 0 .. 2048 ] characters
     * URL of the video sent in the WhatsApp message. Max 2048 characters. Supported video types are MP4, 3GPP. Maximum video size is 16MB.
     */
    private $videoUrl;

    /**
     * $locationName
     *
     * @var string [ 0 .. 1000 ] characters
     * Name of the location. Optional value.
     */
    private $locationName;

    /**
     * $address
     *
     * @var string [ 0 .. 1000 ] characters
     * Address location. Optional value.
     */
    private $address;

    /**
     * $longitude
     *
     * @var number <double> [ -180 .. 180 ]
     * Longitude of a coordinate. The value must be between -180 and 180
     */
    private $longitude;

    /**
     * $latitude
     *
     * @var number <double> [ -90 .. 90 ]
     * Latitude of a coordinate. The value must be between -90 and 90.
     */
    private $latitude;

    /**
     * $previewUrl
     *
     * @var boolean
     * Specifying previewUrl in the request is optional when not including a URL in your message. To include a URL preview, set previewUrl to true in the message body and make sure that URL begins with http:// or https:/
     */
    private $previewUrl;


    private $contacts;


    public function getContacts()
    {
        throw new Exception("property not implemented");
    }


    public function setContacts($contacts)
    {
        throw new Exception("property not implemented");
    }

    /**
     * @return MediaTemplateData
     */
    public function getMediaTemplateData()
    {
        return $this->mediaTemplateData;
    }

    /**
     * @param  MediaTemplateData  $mediaTemplateData
     */
    public function setMediaTemplateData($mediaTemplateData)
    {
        $this->mediaTemplateData = $mediaTemplateData;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param  string  $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * @param  int  $validityPeriod
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
    }

    /**
     * @return string
     */
    public function getValidityPeriodTimeUnit()
    {
        return $this->validityPeriodTimeUnit;
    }

    /**
     * @param  string  $validityPeriodTimeUnit
     */
    public function setValidityPeriodTimeUnit($validityPeriodTimeUnit)
    {
        $this->validityPeriodTimeUnit = $validityPeriodTimeUnit;
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    /**
     * @param  string  $fileUrl
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
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
    public function getAudioUrl()
    {
        return $this->audioUrl;
    }

    /**
     * @param  string  $audioUrl
     */
    public function setAudioUrl($audioUrl)
    {
        $this->audioUrl = $audioUrl;
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
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @param  string  $locationName
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param  string  $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return number
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param  number  $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return number
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param  number  $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return bool
     */
    public function isPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @param  bool  $previewUrl
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
    }


    /**
     * @return string
     */

    public function getTemplateName()
    {
        return $this->templateName;
    }

    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
    }

    public function getTemplateNamespace()
    {
        return $this->templateNamespace;
    }

    public function setTemplateNamespace($templateNamespace)
    {
        $this->templateNamespace = $templateNamespace;
    }

    public function getTemplateData()
    {
        return $this->templateData;
    }

    public function setTemplateData($templateData)
    {
        $this->templateData = $templateData;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
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