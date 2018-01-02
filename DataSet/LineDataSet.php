<?php

namespace Avegao\ChartjsBundle\DataSet;

use Avegao\ChartjsBundle\Model\DataSetInterface;

/**
 * Class LineDataSet
 *
 * @author Benjamin Leibinger
 */
class LineDataSet extends BaseDataSet
{
    protected $currentColorKey = 0;

    /**
     * @var string The ID of the x axis to plot this dataset on
     */
    protected $xAxisID;

    /**
     * @var string The ID of the y axis to plot this dataset on
     */
    protected $yAxisID;

    /**
     * @var bool If true, fill the area under the line
     */
    protected $fill = false;

    /**
     * @var int Bezier curve tension of the line. Set to 0 to draw straightlines.
     *          Note This was renamed from 'tension' but the old name still works.
     */
    protected $lineTension;

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
     * @var string Cap style of the line
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineCap
     */
    protected $borderCapStyle;

    /**
     * @var array Length and spacing of dashes
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/setLineDash
     */
    protected $borderDash;

    /**
     * @var int Offset for line dashes
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineDashOffset
     */
    protected $borderDashOffset;

    /**
     * @var string Line joint style
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineJoin
     */
    protected $borderJoinStyle;

    /**
     * @var string|array The border color for points.
     */
    protected $pointBorderColor;

    /**
     * @var string|array The fill color for points
     */
    protected $pointBackgrounColor;

    /**
     * @var int|array The width of the point border in pixels
     */
    protected $pointBorderWidth;

    /**
     * @var int|array The radius of the point shape. If set to 0, nothing is rendered.
     */
    protected $pointHoverRadius;

    /**
     * @var int|array The pixel size of the non-displayed point that reacts to mouse events
     */
    protected $pointHitRadius;

    /**
     * @var string|array Point background color when hovered
     */
    protected $pointHoverBackgroundColor;

    /**
     * @var string|array Point border color when hovered
     */
    protected $pointHoverBorderColor;
    /**
     * @var int|array Border width of point when hovered
     */
    protected $pointHoverBorderWidth;

    /**
     * @var string|array The style of point. Options include 'circle', 'triangle', 'rect', 'rectRot', 'cross',
     *                   'crossRot', 'star', 'line', and 'dash'
     */
    protected $pointStyle;

    /**
     * BarDataSet constructor.
     * @param int $color
     */
    public function __construct($color = null)
    {
        if(is_null($color)){
            $this->backgroundColor = $this->getRandomColor();
            $this->borderColor = $this->backgroundColor;
        }else{
            $this->backgroundColor = $color;
            $this->borderColor = $color;
        }
    }


    /**
     * @param mixed $data
     * @return DataSetInterface
     */
    public function addData($data)
    {
        $this->data[] = $data;
        return $this;
    }


    /**
     * @return string
     */
    public function getXAxisID()
    {
        return $this->xAxisID;
    }

    /**
     * @param string $xAxisID
     * @return LineDataSet
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
     * @return LineDataSet
     */
    public function setYAxisID($yAxisID)
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFill()
    {
        return $this->fill;
    }

    /**
     * @param boolean $fill
     * @return LineDataSet
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineTension()
    {
        return $this->lineTension;
    }

    /**
     * @param int $lineTension
     * @return LineDataSet
     */
    public function setLineTension($lineTension)
    {
        $this->lineTension = $lineTension;
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
     * @return LineDataSet
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
     * @return LineDataSet
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderCapStyle()
    {
        return $this->borderCapStyle;
    }

    /**
     * @param string $borderCapStyle
     * @return LineDataSet
     */
    public function setBorderCapStyle($borderCapStyle)
    {
        $this->borderCapStyle = $borderCapStyle;
        return $this;
    }

    /**
     * @return array
     */
    public function getBorderDash()
    {
        return $this->borderDash;
    }

    /**
     * @param array $borderDash
     * @return LineDataSet
     */
    public function setBorderDash($borderDash)
    {
        $this->borderDash = $borderDash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderDashOffset()
    {
        return $this->borderDashOffset;
    }

    /**
     * @param int $borderDashOffset
     * @return LineDataSet
     */
    public function setBorderDashOffset($borderDashOffset)
    {
        $this->borderDashOffset = $borderDashOffset;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderJoinStyle()
    {
        return $this->borderJoinStyle;
    }

    /**
     * @param string $borderJoinStyle
     * @return LineDataSet
     */
    public function setBorderJoinStyle($borderJoinStyle)
    {
        $this->borderJoinStyle = $borderJoinStyle;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointBorderColor()
    {
        return $this->pointBorderColor;
    }

    /**
     * @param array|string $pointBorderColor
     * @return LineDataSet
     */
    public function setPointBorderColor($pointBorderColor)
    {
        $this->pointBorderColor = $pointBorderColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointBackgrounColor()
    {
        return $this->pointBackgrounColor;
    }

    /**
     * @param array|string $pointBackgrounColor
     * @return LineDataSet
     */
    public function setPointBackgrounColor($pointBackgrounColor)
    {
        $this->pointBackgrounColor = $pointBackgrounColor;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointBorderWidth()
    {
        return $this->pointBorderWidth;
    }

    /**
     * @param array|int $pointBorderWidth
     * @return LineDataSet
     */
    public function setPointBorderWidth($pointBorderWidth)
    {
        $this->pointBorderWidth = $pointBorderWidth;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHoverRadius()
    {
        return $this->pointHoverRadius;
    }

    /**
     * @param array|int $pointHoverRadius
     * @return LineDataSet
     */
    public function setPointHoverRadius($pointHoverRadius)
    {
        $this->pointHoverRadius = $pointHoverRadius;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHitRadius()
    {
        return $this->pointHitRadius;
    }

    /**
     * @param array|int $pointHitRadius
     * @return LineDataSet
     */
    public function setPointHitRadius($pointHitRadius)
    {
        $this->pointHitRadius = $pointHitRadius;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointHoverBackgroundColor()
    {
        return $this->pointHoverBackgroundColor;
    }

    /**
     * @param array|string $pointHoverBackgroundColor
     * @return LineDataSet
     */
    public function setPointHoverBackgroundColor($pointHoverBackgroundColor)
    {
        $this->pointHoverBackgroundColor = $pointHoverBackgroundColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointHoverBorderColor()
    {
        return $this->pointHoverBorderColor;
    }

    /**
     * @param array|string $pointHoverBorderColor
     * @return LineDataSet
     */
    public function setPointHoverBorderColor($pointHoverBorderColor)
    {
        $this->pointHoverBorderColor = $pointHoverBorderColor;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHoverBorderWidth()
    {
        return $this->pointHoverBorderWidth;
    }

    /**
     * @param array|int $pointHoverBorderWidth
     * @return LineDataSet
     */
    public function setPointHoverBorderWidth($pointHoverBorderWidth)
    {
        $this->pointHoverBorderWidth = $pointHoverBorderWidth;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }

    /**
     * @param array|string $pointStyle
     * @return LineDataSet
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;
        return $this;
    }
}
