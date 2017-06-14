<?php

class read
{
    public static $path;

    public function __construct()
    {
        self::$path = getcwd() . '/data.txt';

        // echo self::$path . "\n";
    }

    public function fileFun()
    {
        $start = microtime(true);
        file(self::$path);
        $end = microtime(true);

        echo "file 读取文件耗时：" . ($end - $start) . "\n";

    }

    public function freadFun()
    {
        $start = microtime(true);
        $handle = fopen(self::$path, 'r');
        $contents = fread($handle, filesize(self::$path));
        fclose($handle);
        $end = microtime(true);

        echo "fread 读取文件耗时：" . ($end - $start) . "\n";
    }

    public function file_get_contentsFun()
    {
        $start = microtime(true);
        file_get_contents(self::$path);
        $end = microtime(true);

        echo "file_get_contents 读取文件耗时：" . ($end - $start) . "\n";
    }
}

$obj = new read();

$obj->fileFun();
$obj->freadFun();
$obj->file_get_contentsFun();
