<?php

require __DIR__ . '/vendor/autoload.php';

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\Point;

$imagine = new Imagine;

// Abre a imagem original
$origin = $imagine->open(__DIR__ . '/email.png'); 
// Obtem o tamanho real da imagem
$size = $origin->getSize(); 

// Resize da imagem definindo width 
$origin->resize($size->widen(500))
    ->save(__DIR__ . '/images/email_resize.png');

// Abre a imagem original
$origin = $imagine->open(__DIR__ . '/email.png'); 
$origin->rotate(90) // 90 graus
    ->save(__DIR__ . '/images/email_rotate.png');

// Abre a imagem original
$origin = $imagine->open(__DIR__ . '/email.png'); 
$origin->crop(new Point(10,90), new Box(150, 150))
    ->save(__DIR__ . '/images/email_crop.png');

