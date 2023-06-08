<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Zero_index
{
    public $return_data = '';

    public function __construct()
    {
        $this->return_data = $this->reindex(
            ee()->TMPL->fetch_param('count')
        );
    }

    public function reindex($count)
    {
        $val = (int) $count;
        $val = $val <= 0 ? 0 : $val - 1;
        return $val;
    }
}
