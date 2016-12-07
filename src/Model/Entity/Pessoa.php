<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Pessoa extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
