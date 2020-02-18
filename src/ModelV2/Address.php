<?php
namespace Easybill\ZUGFeRD\ModelV2;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class Address
{

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("PostcodeCode")
     */
    private $postcode;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("LineOne")
     */
    private $lineOne;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("LineTwo")
     */
    private $lineTwo;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("CityName")
     */
    private $city;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("CountryID")
     */
    private $countryCode;

    /**
     * Address constructor.
     *
     * @param string $postcode
     * @param string $lineOne
     * @param string $lineTwo
     * @param string $city
     * @param string $countryCode
     */
    public function __construct($postcode = '', $lineOne = '', $lineTwo = '', $city = '', $countryCode = '')
    {
        $this->postcode = $postcode;
        $this->lineOne = $lineOne;
        $this->lineTwo = $lineTwo;
        $this->city = $city;
        $this->countryCode = $countryCode;
    }

    /**
     * @param string $postcode
     * @return Address
     */
    public function setPostcode(string $postcode): Address
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @param string $lineOne
     * @return Address
     */
    public function setLineOne(string $lineOne): Address
    {
        $this->lineOne = $lineOne;
        return $this;
    }

    /**
     * @param string|null $lineTwo
     * @return Address
     */
    public function setLineTwo(?string $lineTwo): Address
    {
        $this->lineTwo = $lineTwo;
        return $this;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode(string $countryCode): Address
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getLineOne(): string
    {
        return $this->lineOne;
    }

    /**
     * @return string|null
     */
    public function getLineTwo(): ?string
    {
        return $this->lineTwo;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}