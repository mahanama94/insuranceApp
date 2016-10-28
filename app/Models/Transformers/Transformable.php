<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:44 PM
 */

namespace Omicron\Models\Transformers;


trait Transformable
{

    private $transformers = null;

    public function initializeTransformers()
    {
        $this->transformers = [
            'booking' => new BookingTransformer()
        ];
    }

    public function transform($transformer, $items){

        if( !$this->transformers){

            $this->initializeTransformers();

        }

        return $this->transformers[$transformer]->transformCollection($items);
    }

}