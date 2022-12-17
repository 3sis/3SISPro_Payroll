<?php

function coustomeLog($msg)
{
    \Log::channel('customlog')->info($msg);
}
