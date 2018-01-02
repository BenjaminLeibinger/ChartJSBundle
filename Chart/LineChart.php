<?php

namespace Avegao\ChartjsBundle\Chart;

use Avegao\ChartjsBundle\DataSet\LineDataSet;
use Avegao\ChartjsBundle\Exception\DataSetException;

/**
 * Class LineChart
 *
 * @author Benjamin Leibinger
 */
class LineChart extends BaseChart
{
    /**
     * @inheritDoc
     */
    public function getType()
    {
        return 'line';
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
            if (!$dataSet instanceof LineDataSet) {
                throw new DataSetException('DataSet must be an instance of LineDataSet, '.get_class($dataSet).' given');
            }

            if (!empty($dataSet->getData())) {
                $data['datasets'][] = $dataSet->toArray();
            }
        }

        $this->setData($data);
    }
}
