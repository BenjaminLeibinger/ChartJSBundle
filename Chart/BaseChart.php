<?php

namespace Avegao\ChartjsBundle\Chart;

use Avegao\ChartjsBundle\Model\DataSetInterface;
use Avegao\ChartjsBundle\Model\ChartInterface;

/**
 * Class BaseChart
 *
 * @author Benjamin Leibinger
 */
abstract class BaseChart implements ChartInterface
{
    /** @var string */
    private $id;

    /** @var array */
    private $labels;

    /** @var DataSetInterface[] */
    private $dataSets;

    /** @var array */
    private $data;

    /** @var array */
    private $options;

    /**
     * @param String $id
     *
     * LinearChart constructor.
     */
    public function __construct($id = null)
    {
        $this->id     =  !is_null($id) ? $id : mt_rand(0, 4096);
        $this->labels = [];
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @inheritDoc
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addLabel($label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDataSets()
    {
        return $this->dataSets;
    }

    /**
     * @inheritDoc
     */
    public function setDataSets($dataSets)
    {
        $this->dataSets = $dataSets;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addDataSet(DataSetInterface $dataSet)
    {
        $this->dataSets[] = $dataSet;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @inheritDoc
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @inheritDoc
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function generateData()
    {
        $data = [
            'labels'   => $this->getLabels(),
            'datasets' => [],
        ];

        foreach ($this->getDataSets() as $dataSet) {
            if (!empty($dataSet->getData())) {
                $data['datasets'][] = $dataSet->toArray();
            }
        }

        $this->setData($data);
    }
}
