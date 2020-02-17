<?php

namespace Easybill\ZUGFeRD\ModelV2\Trade;

use Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

class SpecifiedLogisticsServiceCharge
{
    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("Description")
     */
    private $description;

    /**
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("AppliedAmount")
     */
    private $appliedAmount;

    /**
     * @var TradeTax
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax")
     * @XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("AppliedTradeTax")
     */
    private $appliedTradeTax;

    /**
     * SpecifiedLogisticsServiceCharge constructor.
     *
     * @param string $description
     * @param Amount $appliedAmount
     */
    public function __construct(string $description, Amount $appliedAmount)
    {
        $this->description = $description;
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return SpecifiedLogisticsServiceCharge
     */
    public function setDescription(string $description): SpecifiedLogisticsServiceCharge
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Amount
     */
    public function getAppliedAmount(): Amount
    {
        return $this->appliedAmount;
    }

    /**
     * @param Amount $appliedAmount
     *
     * @return SpecifiedLogisticsServiceCharge
     */
    public function setAppliedAmount(Amount $appliedAmount): SpecifiedLogisticsServiceCharge
    {
        $this->appliedAmount = $appliedAmount;

        return $this;
    }

    /**
     * @return TradeTax
     */
    public function getAppliedTradeTax(): TradeTax
    {
        return $this->appliedTradeTax;
    }

    /**
     * @param TradeTax $appliedTradeTax
     *
     * @return SpecifiedLogisticsServiceCharge
     */
    public function setAppliedTradeTax(TradeTax $appliedTradeTax): SpecifiedLogisticsServiceCharge
    {
        $this->appliedTradeTax = $appliedTradeTax;

        return $this;
    }
}