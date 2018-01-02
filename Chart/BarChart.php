<?php

namespace Avegao\ChartjsBundle\Chart;

use Avegao\ChartjsBundle\DataSet\BarDataSet;
use Avegao\ChartjsBundle\Exception\DataSetException;

/**
 * Class BarChart
 *
 * @author Benjamin Leibinger
 */
class BarChart extends BaseChart
{
    /**
     * @inheritDoc
     */
    public function getType()
    {
        return 'bar';
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
            if (!$dataSet instanceof BarDataSet) {
                throw new DataSetException('DataSet must be an instance of BarDataSet, '.get_class($dataSet).' given');
            }

            if (!empty($dataSet->getData())) {
                $data['datasets'][] = $dataSet->toArray();
            }
        }

        $this->setData($data);
    }
}
