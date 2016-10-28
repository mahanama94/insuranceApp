<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:35 PM
 */

namespace Omicron\Models\Transformers;

use Illuminate\Support\Collection;

abstract class Transformer
{
    /**
     * @param Collection $items
     * @return array
     */
    public function transformCollection(Collection $items){
        if($items->count() == 1){

            return $this->transform($items->first());

        }

        $returnArray = array();

        foreach($items as $item){

            array_push($returnArray , $this->transform($item));

        }

        return $returnArray;
    }

    public abstract function transform($item);

}