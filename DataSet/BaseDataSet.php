<?php

namespace Avegao\ChartjsBundle\DataSet;

use Avegao\ChartjsBundle\Model\DataSetInterface;

/**
 * Class BaseDataSet
 *
 * @author Benjamin Leibinger
 */
abstract class BaseDataSet implements DataSetInterface
{
    /**
     * @var array Default colors
     */
    private $colors = array("#F7464A", "#E2EAE9", "#D4CCC5", "#949FB1", "#4D5360", "#FF6600", "#4081BD", "#64992C", "#956188", "#DC6D7F", "#415E9B", "#C50000");

    /**
     * @var int $currentColorKey The current color key
     **/
    protected $currentColorKey = 0;

    /**
     * @var array The data to plot
     */
    protected $data;

    /**
     * @var string    The label for the dataset which appears in the legend and tooltips
     */
    protected $label;

    /**
     * @var array The fill color under the line
     *
     * @see http://www.chartjs.org/docs/#colors
     */
    protected $backgroundColor;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return DataSetInterface
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $data
     * @return DataSetInterface
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->addBackgroundColor();
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return DataSetInterface
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getRandomColor(){
        $key = array_rand($this->colors);
        return $this->colors[$key];
    }

    public function getNextDefaultColor()
    {
        if($this->currentColorKey == count($this->colors))
        {
            $this->currentColorKey = 0;
        }

        $color = $this->colors[$this->currentColorKey];

        $this->currentColorKey += 1;

        return $color;
    }

    /**
     * @return array
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param array $backgroundColor
     * @return DataSetInterface
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param mixed $color
     * @return DataSetInterface
     */
    public function addBackgroundColor($color = null)
    {
        $this->backgroundColor[] = is_null($color) ? $this->getNextDefaultColor() : $color;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $vars = get_object_vars($this);

        $array = [];

        foreach ($vars as $index => $var) {
            if(is_null($var) || $index == "currentColorKey" || $index == "colors")
            {
                continue;
            }

            $array[$index] = $var;
        }

        return $array;
    }

}