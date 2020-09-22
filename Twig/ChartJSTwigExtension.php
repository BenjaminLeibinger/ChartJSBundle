<?php

namespace Avegao\ChartjsBundle\Twig;

use Avegao\ChartjsBundle\Model\ChartInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ChartJSTwigExtension extends AbstractExtension
{
	/**
	 * @inheritDoc
	 */
	public function getName()
	{
		return 'chartjs_twig_extension';
	}

	/**
	 * @inheritDoc
	 */
	public function getFunctions()
	{
		return [
			new TwigFunction('chartjs_render_html', [$this, 'renderHTML'], ['is_safe' => ['html'], 'needs_environment' => false]),
			new TwigFunction('chartjs_render_js', [$this, 'renderJS'], ['is_safe' => ['html'], 'needs_environment' => false]),
		];
	}


	/**
	 * @param ChartInterface $chart
	 * @param int $width
	 * @param int $height
	 * @return string
	 */
	public function renderHTML(ChartInterface $chart, $height = 400, $width = 400)
	{
		return '<canvas id="chart_'.$chart->getId().'" width="'.$width.'" height="'.$height.'"></canvas>';
	}

	/**
	 * @param ChartInterface $chart
	 * @return string
	 */
	public function renderJS(ChartInterface $chart)
	{
		$js  = 'jQuery(document).ready(function(){'."\n";
		$js .= "\t\t\t".'var ctx_'.$chart->getId().' = jQuery(\'#chart_'.$chart->getId().'\');'."\n";

		$js .= "\t\t\t".'var chart_'.$chart->getId().' = new Chart(ctx_'.$chart->getId().', {'."\n";
		$js .= "\t\t\t\t".'"type": "'.$chart->getType().'",'."\n";
		$js .= "\t\t\t\t".'"data": '.json_encode($chart->getData())."\n";

		if (!is_null($chart->getOptions())) {
			$js .= "\t\t\t\t".',"options": '.json_encode($chart->getOptions()).','."\n";
		}

		$js .= "\t\t\t".'});'."\n";

		$js .= "\t\t".'});';

		return $js;
	}
}
