<?php

namespace Avegao\ChartjsBundle\DataSet;

/**
 * Class PieDoughnutDataSet
 *
 * @author Benjamin Leibinger
 */
class PieDoughnutDataSet extends BaseDataSet
{
    protected $currentColorKey = 0;

    /**
     * @var array Border width of arcs in pixels
     */
    protected $borderWidth;

    /**
     * @var array Arc border color
     *
     * @see http://www.chartjs.org/docs/#colors
     */
    protected $borderColor;

    /**
     * @var array Arc background color when hovered
     */
    protected $hoverBackgroundColor;

    /**
     * @var array Arc border color when hovered
     */
    protected $hoverBorderColor;
    /**
     * @var array Border width of arc when hovered
     */
    protected $hoverBorderWidth;

    /**
     * @return array
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param array $borderWidth
     * @return PieDoughnutDataSet
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @return array
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @param array $borderColor
     * @return PieDoughnutDataSet
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return array
     */
    public function getHoverBackgroundColor()
    {
        return $this->hoverBackgroundColor;
    }

    /**
     * @param array $hoverBackgroundColor
     * @return PieDoughnutDataSet
     */
    public function setHoverBackgroundColor($hoverBackgroundColor)
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
        return $this;
    }

    /**
     * @return array
     */
    public function getHoverBorderColor()
    {
        return $this->hoverBorderColor;
    }

    /**
     * @param array $hoverBorderColor
     * @return PieDoughnutDataSet
     */
    public function setHoverBorderColor($hoverBorderColor)
    {
        $this->hoverBorderColor = $hoverBorderColor;
        return $this;
    }

    /**
     * @return array
     */
    public function getHoverBorderWidth()
    {
        return $this->hoverBorderWidth;
    }

    /**
     * @param array $hoverBorderWidth
     * @return PieDoughnutDataSet
     */
    public function setHoverBorderWidth($hoverBorderWidth)
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
        return $this;
    }
}
