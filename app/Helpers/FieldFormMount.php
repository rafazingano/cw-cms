<?php

if (!function_exists('field_form_mount')) {

    function field_form_mount($params = null) {
        $prms = null;
        $value = null;
        $params['type'] = isset($params['type']) ? $params['type'] : 'text';
        $params['class'] = isset($params['class']) ? $params['class'] : 'form-control';
        if ($params['type'] == 'datalist' and isset($params['id'])) {
            $params['list'] = $params['id'];
        }
        if (isset($params['options'])) {
            $params['options'] = explode(',', $params['options']);
        }
        foreach ($params as $p_k => $p_v) {
            if (!in_array($p_k, ['options'])) {
                $prms .= ' ' . $p_k . '="' . $p_v . '" ';
            }
            if ($p_k == 'value') {
                $value = $p_v;
            }
        }
        if ($params['type'] == 'textarea') {
            $i = '<textarea ' . $prms . '">' . $value . '</textarea>';
        } else if ($params['type'] == 'select') {
            echo $params['value'];
            $i = '<select ' . $prms . '>';
            foreach ($params['options'] as $v) {
                $v = trim($v);
                $i .= '<option value="' . $v . '" ';
                $i .= ($params['value'] == $v)? ' selected ': '';
                $i .= ' >' . $v . '</option>';
            }
            $i .= '</select>';
        } else {
            $i = '<input ' . $prms . '">';
            if (isset($value) && $params['type'] == 'file') {
                //$i .= '<div class="container">';
                $i .= '<div class="row">';
                $i .= '<div class="col-md-12">';
                $i .= '<img src="' . asset($value) . '" class="img-responsive" alt="Responsive image">';
                $i .= '</div>';
                $i .= '</div>';
                //$i .= '</div>';
            }
            if (isset($value) && !empty($value) && $params['type'] == 'file' && isset($params['multiple'])) {
                //$i .= '<div class="container">';
                $i .= '<div class="row">';
                $images = json_decode($value);                
                foreach ($images as $image) {
                    $i .= '<div class="col-md-4">';
                    $i .= '<img src="' . asset($image) . '" class="img-responsive" alt="Responsive image">';
                    $i .= '</div>';
                }
                $i .= '</div>';
                //$i .= '</div>';
            }
            if ($params['type'] == 'datalist' and isset($params['id'])) {
                $i = '<datalist id="' . $params['id'] . '">';
                foreach ($params['options'] as $v) {
                    $i .= '<option value=' . $v . '>' . $v . '</option>';
                }
                $i .= '</datalist>';
            }
        }
        return $i;
    }

}