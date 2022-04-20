<?php

// locale: Latviešu (Latvian) (lv_LV)
// author: Artjoms Nemiro https://github.com/LinMAD

// copied and modified from Moment.js source

return array(
    'months'  => explode(
        '_',
        'sausis_vasaris_kovas_balandis_gegužė_birželis_liepa_rugpjūtis_rugsėjis_spalis_lapkritis_gruodis'
    ),
    'monthsNominative' => explode(
        '_',
        'sausio_vasario_kovo_balandžio_gegužės_birželio_liepos_rugpjūčio_rugsėjo_spalio_lapkričio_gruodžio'
    ),
    'monthsShort'  => explode(
        '_',
        'sau_vas_kov_bal_geg_bir_lie_rgp_rgs_spa_lap_grd'
    ),
    'weekdays'  => explode(
        '_',
        'sekmadienis_pirmadienis_antradienis_trečiadienis_ketvirtadienis_penktadienis_šeštadienis'
    ),
    'weekdaysShort'    => explode('_', 'Sek_Pir_Ant_Tre_Ket_Pen_Šeš'),
    'calendar'         => array(
        'sameDay' => '[Šiandien] LT',
        'nextDay' => '[Rytoj] LT',
        'lastDay' => '[Vakar] LT',
        'lastWeek' => '[Praėjusį] dddd LT',
        'sameElse' => 'L',
        //'withTime' => '[plkst.] H:i',
        'default'  => 'Y-m-d',
        'nextWeek' => 'dddd LT',
    ),
    'relativeTime'  => array(
        'future' => 'po %s',
        'past'   => 'prieš %s',
        's'      => 'kelias sekundes',
        'ss'     => '%d sekundes',
        'm'      => 'minutė',
        'mm'     => '%d minutės',
        'h'      => 'valanda',
        'hh'     => '%d valandos',
        'd'      => 'diena',
        'dd'     => '%d dienos',
        'M'      => 'mėnuo',
        'MM'     => '%d mėnesiai',
        'y'      => 'metai',
        'yy'     => '%d metai',
    ),
    'ordinal' => function ($number) {
        return $number . '-oji';
    },
    'week'         => array(
        'dow' => 1, // Monday is the first day of the week.
        'doy' => 4  // The week that contains Jan 4th is the first week of the year.
    ),
    'customFormats' => array(
        'l' => 'Y-n-j',
        'L' => 'Y-m-d',
    )
);
