<?php
$id = 1;
$cardContainer = [
    [
        'id' => $id++,
        'title' => 'Дырявый',
        'img' => 'img/likaon'.$id.'.jpg',
        'alt' => 'desc'. $id,
        'description' => 'Он продырявил своим... Продолжение следует'
    ],
    [
        'id' => $id++,
        'title' => 'ВелЛи',
        'img' => 'img/likaon'.$id.'.jpg',
        'alt' => 'desc'. $id,
        'description' => 'Ликаон и Велина встретились в пабе и он показал свой... Прожолжение следует'
    ],
    [
        'id' => $id++,
        'title' => 'Выйти из игры',
        'img' => 'img/likaon'.$id.'.jpg',
        'alt' => 'desc'. $id,
        'description' => 'У него настолько был большой что он вышел за игру'
    ],
    [
            'id' => $id++,
            'title' => 'Выйти из игры',
            'img' => 'img/likaon'.$id.'.jpg',
            'alt' => 'desc'. $id,
            'description' => 'У него настолько был большой что он вышел за игру'
    ],
    [
                'id' => $id++,
                'title' => 'Выйти из игры',
                'img' => 'img/likaon'.$id.'.jpg',
                'alt' => 'desc'. $id,
                'description' => 'У него настолько был большой что он вышел за игру'
    ],
    [
                    'id' => $id++,
                    'title' => 'Выйти из игры',
                    'img' => 'img/likaon'.$id.'.jpg',
                    'alt' => 'desc'. $id,
                    'description' => 'У него настолько был большой что он вышел за игру'
    ]

];
    foreach($cardContainer as $card) {
        echo '
            <div class="card">
                <h3>' . $card['title'] . '</h3>
                <img src="' . $card['img'] . '" alt="' . $card['alt'] . '">
                <p>' . $card['description'] . '</p>
            </div>';
    }
?>