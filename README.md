# ChartJSBundle
ChartJS Bundle for Symfony 2/3

Create Dataset and Chart
```php
$chart = new LineChart();
 
$options = array(
    "responsive" => true,
    "tooltips" => array(
        "mode" => 'index',
        "intersect" => false
    ),
    "hover" => array(
        "mode" => 'nearest',
        "intersect" => true
    ),
    "scales" => array(
        "yAxes" => array(
            array(
                "ticks" => array(
                    "beginAtZero" => true
                )
            )
        )
    )
);
 
$chart->setOptions($options);
 
$ds = new LineDataSet("#415E9B");
$ds->setLabel("some Text");
 
$data = [
    "Mo" => 10,
    "Tu" => 12,
    "We" => 32
];
 
foreach($data as $key => $value)
{
    $chart->addLabel($key);
    $ds->addData($value);    
}
 
$chart->addDataSet($ds);
$chart->generateData();
```

Use in twig Template
```twig
<script type="text/javascript" src="{{ asset('path/to/chartjs/Chart.min.js') }}"></script>
<script>
    {{ chartjs_render_js(chart) }}
</script 
 
{{ chartjs_render_html(chart, 100) }}
```
