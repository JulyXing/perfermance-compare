<?php

class write
{
    public static function error_log()
    {
        $start = microtime(true);
        $message = '{"source":123,"key":"satellite","value":16,"timesmap":1497333480}';
        $path = getcwd() . '/data.txt';

        for ($i=0; $i < 100000; $i++) { 
            error_log($message . "\n", 3, $path);
        }

        $end = microtime(true);

        echo '写入成功,耗时：' . ($end - $start) * 1000 . ' 秒\n';
    }

    public static function file_put_contents()
    {
        $start = microtime(true);
        $message = '{"source":123,"key":"satellite","value":16,"timesmap":1497333480}';
        $path = getcwd() . '/data.txt';

        for ($i=0; $i < 100000; $i++) { 
            file_put_contents($path, $message . "\n", FILE_APPEND);
        }

        $end = microtime(true);

        echo '写入成功,耗时：' . ($end - $start) * 1000 . ' 秒\n';
    }
}

write::error_log();
// write::file_put_contents();
