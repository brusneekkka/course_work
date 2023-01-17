<?php
    function json_encode_objs($item)
    {
        if (is_object($item) || (is_array($item)&&isAssoc($item))) {
            $pieces = array();
            foreach ($item as $k => $v) {
                $pieces[] = "\"$k\":" . json_encode_objs($v);
            }
            return '{' . implode(',', $pieces) . '}';
        } else if(is_array($item)) {
            $pieces = array();
            foreach ($item as $k => $v) {
                $pieces[] = json_encode_objs($v);
            }
            return '[' . implode(',', $pieces) . ']';
        }else{
            return json_encode($item);
        }

    }


    function isAssoc(array $arr)
    {
        if (array() === $arr) return false;
        return array_keys($arr) !== range(0, count($arr) - 1);
    }

    function return_ok($info, $code){
        header('Content-Type: application/json');
        http_response_code($code);
        $arr = array('status'=>true, 'data'=>$info);
        echo json_encode_objs($arr);
        die();
    }

    function return_error($info, $code){
        header('Content-Type: application/json');
        http_response_code($code);
        $arr = array('status'=>false, 'data'=>$info, 'code'=>$code);
        echo json_encode_objs($arr);
        die();
    }
?>