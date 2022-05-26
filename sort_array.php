<HTML>

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <TITLE>YLAB</TITLE>
</HEAD>

<BODY>
    <div>
        <h2> Шук Денис. Домашнее задание 1. Задача 1.<h2>
    </div>
    <p>У вас есть массив. Необходимо отсортировать его по PRICE</p>


</BODY>

</HTML>

<?php

$array = [

    'SKLAD1' => [

        'EDA' => [

            'TOVAR1' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR2' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR3' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR4' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],


        ],

        'NAPITKI' => [

            'TOVAR55' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR54' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

        ],

    ],

    'SKLAD2' => [

        'EDA' => [

            'TOVAR66' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR67' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

        ],

        'NAPITKI' => [

            'TOVAR77' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

            'TOVAR78' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

        ],

    ],

];

function sortNestedArray(&$arr)
{
    foreach ($arr as &$nestedArrayLevelFirst) {
        foreach ($nestedArrayLevelFirst as &$nestedArrayLevelTwo) {
            uasort($nestedArrayLevelTwo, function ($a, $b) {
                if (($a['PRICE'] > $b['PRICE'])) return 1;
            });
        }
    }
}

sortNestedArray($array);

function myPrint($val)
{
    echo '<pre>';
    print_r($val);
    echo  '</pre>';
}

myPrint($array);

?>