<?php namespace Easybill\ZUGFeRD\ModelV2\Trade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\Exclude;

class MonetarySummation
{
    /**
     * @var string
     * @Exclude
     */
    private $currency;
    /**
     * Total amount of all invoice positions.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("LineTotalAmount")
     */
    private $lineTotal;

    /**
     * Total amount of the supplements.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("ChargeTotalAmount")
     */
    private $chargeTotal;

    /**
     * Total amount of the reductions.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("AllowanceTotalAmount")
     */
    private $allowanceTotal;

    /**
     * Invoice amount WITHOUT taxes.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("TaxBasisTotalAmount")
     */
    private $taxBasisTotal;

    /**
     * Total amount of taxes.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("TaxTotalAmount")
     */
    private $taxTotal;

    /**
     * Gross amount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("GrandTotalAmount")
     */
    private $grandTotal;

    /**
     * TotalPrepaidAmount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("TotalPrepaidAmount")
     */
    private $totalPrepaidAmount;
    /**
     * DuePayableAmount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("DuePayableAmount")
     */
    private $duePayableAmount;


    /**
     * @param string $currency
     */
    public function __construct($currency = 'EUR')
    {
        $this->currency = $currency;
    }

    /**
     * @param Amount|float $lineTotal
     * @return MonetarySummation
     */
    public function setLineTotal($lineTotal): MonetarySummation
    {
        $this->lineTotal = $this->prepareAmount($lineTotal);
        return $this;
    }

    /**
     * @param Amount|float $chargeTotal
     * @return MonetarySummation
     */
    public function setChargeTotal($chargeTotal): MonetarySummation
    {
        $this->chargeTotal = $this->prepareAmount($chargeTotal);
        return $this;
    }

    /**
     * @param Amount|float $allowanceTotal
     * @return MonetarySummation
     */
    public function setAllowanceTotal($allowanceTotal): MonetarySummation
    {
        $this->allowanceTotal = $this->prepareAmount($allowanceTotal);
        return $this;
    }

    /**
     * @param Amount|float $taxBasisTotal
     * @return MonetarySummation
     */
    public function setTaxBasisTotal($taxBasisTotal): MonetarySummation
    {
        $this->taxBasisTotal = $this->prepareAmount($taxBasisTotal);
        return $this;
    }

    /**
     * @param Amount|float $taxTotal
     * @return MonetarySummation
     */
    public function setTaxTotal($taxTotal): MonetarySummation
    {
        $this->taxTotal = $this->prepareAmount($taxTotal);
        return $this;
    }

    /**
     * @param Amount|float $grandTotal
     * @return MonetarySummation
     */
    public function setGrandTotal($grandTotal): MonetarySummation
    {
        $this->grandTotal = $this->prepareAmount($grandTotal);
        return $this;
    }

    /**
     * @param Amount|float $duePayableAmount
     * @return MonetarySummation
     */
    public function setDuePayableAmount($duePayableAmount): MonetarySummation
    {
        $this->duePayableAmount = $this->prepareAmount($duePayableAmount);
        return $this;
    }

    /**
     * @param Amount|float $totalPrepaidAmount
     * @return MonetarySummation
     */
    public function setTotalPrepaidAmount($totalPrepaidAmount)
    {
        $this->totalPrepaidAmount = $this->prepareAmount($totalPrepaidAmount);
        return $this;
    }

    /**
     * @return Amount
     */
    public function getLineTotal(): Amount
    {
        return $this->lineTotal;
    }

    /**
     * @return Amount
     */
    public function getChargeTotal(): Amount
    {
        return $this->chargeTotal;
    }

    /**
     * @return Amount
     */
    public function getAllowanceTotal(): Amount
    {
        return $this->allowanceTotal;
    }

    /**
     * @return Amount
     */
    public function getTaxBasisTotal(): Amount
    {
        return $this->taxBasisTotal;
    }

    /**
     * @return Amount
     */
    public function getTaxTotal(): Amount
    {
        return $this->taxTotal;
    }

    /**
     * @return Amount
     */
    public function getGrandTotal(): Amount
    {
        return $this->grandTotal;
    }

    /**
     * @return Amount
     */
    public function getTotalPrepaidAmount(): Amount
    {
        return $this->totalPrepaidAmount;
    }

    /**
     * @return Amount
     */
    public function getDuePayableAmount(): Amount
    {
        return $this->duePayableAmount;
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