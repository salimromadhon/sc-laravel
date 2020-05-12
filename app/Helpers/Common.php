<?php

if (!function_exists('alert'))
{
    function alert($name = NULL, $message = NULL, $type = 'info')
    {
        if ($message && $type) {
            session()->flash('alert_' . $name, array($message, $type));
        } else {
            $data = session('alert_' . $name);

            if (is_array($data) && ! (empty($data[0]) OR empty($data[1]))) {
                return '<div class="alert alert-' . $data[1] . '">' . $data[0] . '</div>';
            }
        }
    }
}
