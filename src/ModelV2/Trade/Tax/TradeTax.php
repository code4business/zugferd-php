<?php namespace Easybill\ZUGFeRD\ModelV2\Trade\Tax;

use Easybill\ZUGFeRD\ModelV2\Trade\Amount;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\AccessorOrder("custom", custom = {"calculatedAmount", "code", "basisAmount", "category", "percent"})
 */
class TradeTax
{
    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("CalculatedAmount")
     */
    private $calculatedAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("TypeCode")
     */
    private $code = '';

    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("BasisAmount")
     */
    private $basisAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("CategoryCode")
     */
    private $category;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("RateApplicablePercent")
     */
    private $percent;

    /**
     * @param Amount $calculatedAmount
     * @return TradeTax
     */
    public function setCalculatedAmount(Amount $calculatedAmount): TradeTax
    {
        $this->calculatedAmount = $calculatedAmount;
        return $this;
    }

    /**
     * @param string $code
     * @return TradeTax
     */
    public function setCode(string $code): TradeTax
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param Amount $basisAmount
     * @return TradeTax
     */
    public function setBasisAmount(Amount $basisAmount): TradeTax
    {
        $this->basisAmount = $basisAmount;
        return $this;
    }

    /**
     * @param string $category
     * @return TradeTax
     */
    public function setCategory(string $category): TradeTax
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string $percent
     * @return TradeTax
     */
    public function setPercent($percent): TradeTax
    {
        $this->percent = number_format($percent, 2, '.', '');
        return $this;
    }

    /**
     * @return Amount
     */
    public function getCalculatedAmount(): Amount
    {
        return $this->calculatedAmount;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return Amount
     */
    public function getBasisAmount(): Amount
    {
        return $this->basisAmount;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getPercent(): string
    {
        return $this->percent;
    }

}