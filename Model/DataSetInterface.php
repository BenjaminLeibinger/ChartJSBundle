<?php

namespace Avegao\ChartjsBundle\Model;

/**
 * Class DataSetInterface
 *
 * @author Benjamin Leibinger
 */
interface DataSetInterface
{

    /**
     * @return array
     */
    public function getData();

    /**
     * @param array $data
     * @return DataSetInterface
     */
    public function setData($data);

    /**
     * @param mixed $data
     * @return DataSetInterface
     */
    public function addData($data);

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     * @return DataSetInterface
     */
    public function setLabel($label);

    /**
     * @return array
     */
    public function getBackgroundColor();

    /**
     * @param array $backgroundColor
     * @return DataSetInterface
     */
    public function setBackgroundColor($backgroundColor);

    /**
     * @param mixed $color
     * @return DataSetInterface
     */
    public function addBackgroundColor($color = null);
}
