<?php

echo date("d.m.Y H.i.s");
echo "<br>";

date_default_timezone_set('Europe/Istanbul');
echo "<br>";

echo date("d.m.Y H.i.s");  
echo "<br>";

// $IslemZamani = date("Y-m-d H:i:s", ???);

/*
??? alanına yazılabilecekler:
strtotime('now'); // Şimdi
strtotime('2023-03-21'); // Tarih
strtotime("+1 day"); // 1 gün sonrası
strtotime("+1 week"); // 1 hafta sonrası
strtotime("+1 week 2 days 4 hours 2 seconds"); // ... zaman sonrası
strtotime("next thursday"); // sonraki perşembe
strtotime("last monday"); // Aktif ayın son pazartesi günü
strtotime('first day of next month'); // Gelecek ayın ilk günü
strtotime('first monday of february 2023');  // 2023 Şubat ayının ilk pazartesi günü
strtotime('last monday of february 2023'); // 2023 Şubat ayının son pazartesi günü
strtotime('last day of february 2023'); // 2023 Şubat ayının son günü
strtotime('last sunday of 2019-08'); // 2019 Ağustos ayının son pazarı
strtotime('last sunday of 2019-08 -2 day'); // 2019 Ağustos ayının son pazarının 2 gün öncesi
*/

$IslemZamani = date("Y-m-d H:i:s", strtotime("next thursday"));

echo "<br>";
echo $IslemZamani;

echo "<br>";
echo "<br>";
$start_date = '2015-01-27';
$end_date   = '2015-02-13';

while (strtotime($start_date) <= strtotime($end_date)) {
    echo "{$start_date}<br>";
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}

echo "<br>";

$start_date = new DateTime('2015-01-27');
$end_date   = new DateTime('2015-02-13');

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($start_date, $interval, $end_date);

foreach ($period as $dt) {
    echo $dt->format("Y-m-d") . "<br>";
}