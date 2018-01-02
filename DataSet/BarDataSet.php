<?php

namespace Avegao\ChartjsBundle\DataSet;

/**
 * Class BarDataSet
 *
 * @author Benjamin Leibinger
 */
class BarDataSet extends BaseDataSet
{
    /**
     * @var string The ID of the x axis to plot this dataset on
     */
    protected $xAxisID;

    /**
     * @var string The ID of the y axis to plot this dataset on
     */
    protected $yAxisID;

    /**
     * @var int The width of the line in pixels
     */
    protected $borderWidth;

    /**
     * @var string The color of the line.
     *
     * @see http://www.chartjs.org/docs/#colors
     */
    protected $borderColor;

    /**
     * @var string|array Which edge to skip drawing the border for. Options are 'bottom', 'left', 'top', and 'right'
     */
    protected $borderSkipped;

    /**
     * @var string|array background color when hovered
     */
    protected $hoverBackgroundColor;

    /**
     * @var string|array border color when hovered
     */
    protected $hoverBorderColor;
    /**
     * @var int|array width of point when hovered
     */
    protected $hoverBorderWidth;

    /**
     * @return string
     */
    public function getXAxisID()
    {
        return $this->xAxisID;
    }

    /**
     * @param string $xAxisID
     * @return BarDataSet
     */
    public function setXAxisID($xAxisID)
    {
        $this->xAxisID = $xAxisID;
        return $this;
    }

    /**
     * @return string
     */
    public function getYAxisID()
    {
        return $this->yAxisID;
    }

    /**
     * @param string $yAxisID
     * @return BarDataSet
     */
    public function setYAxisID($yAxisID)
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     * @return BarDataSet
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return BarDataSet
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getBorderSkipped()
    {
        return $this->borderSkipped;
    }

    /**
     * @param array|string $borderSkipped
     * @return BarDataSet
     */
    public function setBorderSkipped($borderSkipped)
    {
        $this->borderSkipped = $borderSkipped;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getHoverBackgroundColor()
    {
        return $this->hoverBackgroundColor;
    }

    /**
     * @param array|string $hoverBackgroundColor
     * @return BarDataSet
     */
    public function setHoverBackgroundColor($hoverBackgroundColor)
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getHoverBorderColor()
    {
        return $this->hoverBorderColor;
    }

    /**
     * @param array|string $hoverBorderColor
     * @return BarDataSet
     */
    public function setHoverBorderColor($hoverBorderColor)
    {
        $this->hoverBorderColor = $hoverBorderColor;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getHoverBorderWidth()
    {
        return $this->hoverBorderWidth;
    }

    /**
     * @param array|int $hoverBorderWidth
     * @return BarDataSet
     */
    public function setHoverBorderWidth($hoverBorderWidth)
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
        return $this;
    }
}
