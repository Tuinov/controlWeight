<?php

/**
 * @param array $nums
 * @return float|int
 * возвращает среднее арифметическое массива $nums
 */
function average ($nums) {
   return array_sum($nums)/count($nums);
}


/**
 * @param $query
 * @return array
 * возвращает массив массивов всех измерений по месяцам
 */
function allMonths ($query) {

    // массив массивов всех измерений по месяцам
    $everyMonth =[];

    foreach ($query as $row) {
        // достаёт из даты только месяц
        $month = substr($row['weight_date'],5, 2);

        // добавляет каждому месяцу массив значений
        $everyMonth[$month][] = $row['weight_value'];
    }
    return $everyMonth;
}
