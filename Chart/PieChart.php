<?php

namespace Avegao\ChartjsBundle\Chart;

use Avegao\ChartjsBundle\DataSet\PieDoughnutDataSet;
use Avegao\ChartjsBundle\Exception\DataSetException;

/**
 * Class PieChart
 *
 * @author Benjamin Leibinger
 */
class PieChart extends BaseChart
{
    /**
     * @inheritDoc
     */
    public function getType()
    {
        return 'pie';
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
            if (!$dataSet instanceof PieDoughnutDataSet) {
                throw new DataSetException('DataSet must be an instance of PieDoughnutDataSet, '.get_class($dataSet).' given');
            }

            if (!empty($dataSet->getData())) {
                $data['datasets'][] = $dataSet->toArray();
            }
        }

        $this->setData($data);
    }
}
