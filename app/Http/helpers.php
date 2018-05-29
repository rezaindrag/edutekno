<?php

/**
 * Duration Time Format
 */
if ( ! function_exists('fmt_duration') )
{
    function fmt_duration($time, $show_seconds = false)
    {
        $time_ex = explode(':', $time);

        if (count($time_ex) > 2) {
            $hours = $time_ex[0];
            $minutes = $time_ex[1];
            $seconds = $time_ex[2];
            $duration = "{$hours}h {$minutes}m {$seconds}s";
        } else if (count($time_ex) > 1) {
            $minutes = $time_ex[0];
            $seconds = $time_ex[1];
            $duration = "{$minutes}m {$seconds}s";
        } else {
            $seconds = $time_ex[0];
            $duration = "{$seconds}s";
        }

        return $duration;
    }
}