<?php

namespace Avegao\ChartjsBundle\Model;

use Avegao\ChartjsBundle\Model\DataSetInterface;

interface ChartInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     * @return ChartInterface
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getType();

    /**
     * @return array
     */
    public function getData();

    /**
     * @param array $data
     * @return ChartInterface
     */
    public function setData($data);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array $options
     * @return ChartInterface
     */
    public function setOptions($options);

    /**
     * Generate data array from DataSets and label
     */
    public function generateData();

    /**
     * @return array
     */
    public function getLabels();

    /**
     * @param array $labels
     * @return ChartInterface
     */
    public function setLabels($labels);

    /**
     * @param string $label
     * @return ChartInterface
     */
    public function addLabel($label);

    /**
     * @return DataSetInterface[]
     */
    public function getDataSets();

    /**
     * @param DataSetInterface[] $dataSets
     * @return ChartInterface
     */
    public function setDataSets($dataSets);

    /**
     * @param DataSetInterface $dataSet
     * @return ChartInterface
     */
    public function addDataSet(DataSetInterface $dataSet);
}
