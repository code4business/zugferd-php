<?php namespace Easybill\ZUGFeRD\ModelV2;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Indicator
 *
 * @package Easybill\ZUGFeRD\ModelV2
 */
class Indicator
{
    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100")
     * @JMS\SerializedName("Indicator")
     */
    private $indicator;

    /**
     * Indicator constructor.
     *
     * @param bool $indicator
     */
    public function __construct($indicator)
    {
        $this->indicator = $indicator;
    }

    /**
     * @return boolean
     */
    public function getIndicator()
    {
        return $this->indicator;
    }

    /**
     * @param boolean $indicator
     */
    public function setIndicator($indicator)
    {
        $this->indicator = $indicator;
    }

}