<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 2018/3/8
 * Time: 9:48
 */

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function success($data = [])
    {
        $array = [
            'code' => 'SUCCESS',
            'msg'  => 'SUCCESS',
        ];
        $array = array_merge($array, $this->convertToString($data));

        return response($array);
    }

    private function convertToString($value)
    {
        if (is_array($value) || is_object($value)) {
            $tmp = [];
            foreach ($value as $k => $v) {
                $tmp[$k] = $this->convertToString($v);
            }

            return $tmp;
        } elseif (!is_bool($value)) {
            return (string)$value;
        }

        return $value;
    }

    public function error($message, $errNo, array $data = [])
    {
        $array = [
            'code' => $errNo,
            'msg'  => $message,
        ];
        if ($data) {
            $array = array_merge($array, $data);
        }

        return response($array);
    }
}