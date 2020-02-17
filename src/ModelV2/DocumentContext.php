<?php namespace Easybill\ZUGFeRD\ModelV2;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class DocumentContext
{
    /**
     * @var \Easybill\ZUGFeRD\ModelV2\ContextParameterID
     * @Type("Easybill\ZUGFeRD\ModelV2\ContextParameterID")
     * @XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("BusinessProcessSpecifiedDocumentContextParameter")
     */
    private $bp_type;

    /**
     * @var \Easybill\ZUGFeRD\ModelV2\ContextParameterID
     * @Type("Easybill\ZUGFeRD\ModelV2\ContextParameterID")
     * @XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("GuidelineSpecifiedDocumentContextParameter")
     */
    private $type;


    public function __construct($type)
    {
        switch ($type)
        {
            case \Easybill\ZUGFeRD\ModelV2\Invoice::TYPE_BASIC:
                $additionalType = '#compliant#urn:zugferd.de:2p0:basic';
                break;
            case \Easybill\ZUGFeRD\ModelV2\Invoice::TYPE_EXTENDED:
                $additionalType = '#conformant#urn:zugferd.de:2p0:extended';
                break;
            default:
                $additionalType = '';
                break;
        }

        $this->type = new ContextParameterID("urn:cen.eu:en16931:2017{$additionalType}");
    }
}