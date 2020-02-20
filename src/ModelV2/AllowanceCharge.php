<?php namespace Easybill\ZUGFeRD\ModelV2;

use Easybill\ZUGFeRD\ModelV2\Trade\Amount;
use Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax;
use JMS\Serializer\Annotation as JMS;

/**
 * Class AllowanceCharge
 *
 * @package Easybill\ZUGFeRD\ModelV2
 */
class AllowanceCharge
{
    /**
     * @var string
     * @JMS\Exclude
     */
    private $currency;

    /**
     * @var Indicator
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Indicator")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ChargeIndicator")
     */
    private $indicator;

    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("BasisAmount")
     */
    private $basisAmount;

    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ActualAmount")
     */
    private $actualAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ReasonCode")
     */
    private $reasonCode;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("Reason")
     */
    private $reason;

    /**
     * @var TradeTax[]
     * @JMS\Type("array<Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax>")
     * @JMS\XmlList(inline = true, entry = "CategoryTradeTax", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     */
    private $categoryTradeTaxes;

    /**
     * @param string $currency
     */
    public function __construct(string $currency = 'EUR')
    {
        $this->currency = $currency;
    }

    /**
     * @param bool $indicator
     * @return AllowanceCharge
     */
    public function setIndicator(bool $indicator): AllowanceCharge
    {
        $this->indicator = new Indicator($indicator);
        return $this;
    }

    /**
     * @param Amount $basisAmount
     * @return AllowanceCharge
     */
    public function setBasisAmount(Amount $basisAmount): AllowanceCharge
    {
        $this->basisAmount = $basisAmount;
        return $this;
    }

    /**
     * @param Amount|float $actualAmount
     * @return AllowanceCharge
     */
    public function setActualAmount($actualAmount): AllowanceCharge
    {
        $this->actualAmount = $this->prepareAmount($actualAmount);;
        return $this;
    }

    /**
     * @param string $reasonCode
     * @return AllowanceCharge
     */
    public function setReasonCode(string $reasonCode): AllowanceCharge
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @param string $reason
     * @return AllowanceCharge
     */
    public function setReason(string $reason): AllowanceCharge
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param TradeTax $tradeTax
     *
     * @return AllowanceCharge
     */
    public function addCategoryTradeTax(TradeTax $tradeTax): AllowanceCharge
    {
        $this->categoryTradeTaxes[] = $tradeTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return Indicator
     */
    public function getIndicator(): Indicator
    {
        return $this->indicator;
    }

    /**
     * @return Amount
     */
    public function getBasisAmount(): Amount
    {
        return $this->basisAmount;
    }

    /**
     * @return Amount
     */
    public function getActualAmount(): Amount
    {
        return $this->actualAmount;
    }

    /**
     * @return string
     */
    public function getReasonCode(): string
    {
        return $this->reasonCode;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return TradeTax[]
     */
    public function getCategoryTradeTaxes(): array
    {
        return $this->categoryTradeTaxes;
    }

    /**
     * @param $amount
     * @return Amount
     */
    private function prepareAmount($amount): Amount
    {
        if ($amount instanceof Amount)
        {
            return $amount;
        }
        else
        {
            return new Amount($amount, $this->currency);
        }
    }

}