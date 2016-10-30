<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 8:40 PM
 */

namespace Omicron\Models\Stores;


class PolicyStore
{

    private $data = [
        'AIA' => [
            'taxi' => ['PickMe'],
            'towing' => ['AA', 'CC']
        ],
        'AsianAllianz' => [
            'taxi' => ['PickMe', 'Uber'],
            'towing' => ['AA']
        ]
    ];

    public function getPolicy($provider){
        return $this->data[$provider];
    }

}