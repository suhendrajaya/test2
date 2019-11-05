<?php

namespace App\Libraries;

class Validation
{

    private $arr = [];
    private $config = [];
    private $conHeader = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
        $this->setConfig();
    }

    private function setConfig()
    {
        foreach ($this->arr[0] as $key => $val) {

            if (strpos($val, "*"))
                $this->config[$key] = 'required';
            elseif (strpos($val, "#") > -1)
                $this->config[$key] = 'no_contain';
            else
                $this->config[$key] = 'optional';

            $charFind = array("#", "*");
            $charRep   = array("", "");
            $this->conHeader[$key]  = str_replace($charFind, $charRep, $val);
        }
    }

    function validate()
    {
        $rs = [];
        $row = 0;
        foreach ($this->arr as $key => $value) {
            $row++;
            if ($key > 0) {
                foreach ($value as $keyCol => $valCol) {
                    switch ($this->config[$keyCol]) {
                        case "required":
                            if (empty($valCol)) {
                                $rs[$key]['row'] =  $row;
                                $rs[$key]['message'] = isset($rs[$key]['message']) ? $rs[$key]['message'] . 'Missing value in ' . $this->conHeader[$keyCol] . ', ' : 'Missing value in ' . $this->conHeader[$keyCol] . ', ';
                            }
                            break;
                        case "no_contain":
                            if (!empty($valCol)) {
                                $rs[$key]['row'] =  $row;
                                $rs[$key]['message'] = isset($rs[$key]['message']) ? $rs[$key]['message'] . $this->conHeader[$keyCol] . ' should not contain any space' . ', ' : $this->conHeader[$keyCol] . ' should not contain any space' . ', ';
                            }
                            break;
                    }
                }
            }
        }
        return $rs;
    }
}
