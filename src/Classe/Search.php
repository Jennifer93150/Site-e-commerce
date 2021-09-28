<?php

namespace App\Classe;

use App\Entity\Category;

class Search
{
    /**
     * barre de recherche vide
     * @var string
     */
    public $string = '';

    /**
     * tableau de categorie
     * @var Category[]
     */
    public $categories = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * je ne mets pas 0 par defaut cô ca si on a une valeur null on ne prendra pas en compte le filtre
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    #public $promo = false;


}