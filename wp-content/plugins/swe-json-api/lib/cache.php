<?php

/**
 * Class SWE_JSON_API_Cache
 */
class SWE_JSON_API_Cache
{
    public $cache_dir;

    function __construct()
    {
        $this->cache_dir = SWE_JSON_API_CACHE_DIR;
        if (!is_dir(SWE_JSON_API_CACHE_DIR)) {
            $this->swe_mkdir_from(SWE_JSON_API_CACHE_DIR, ABSPATH);
        }
    }

    function get_cache($file, $hours = 24)
    {
        $current_time = time();
        $expire_time = $hours * 60 * 60;
        $file_time = @filemtime($file);
        if (file_exists($file) && ($current_time - $expire_time < $file_time)) {
            $json_results = file_get_contents($file);
            return json_decode($json_results, true);
        }
        return false;
    }

    function make_cache_file($filePath, $content)
    {
        if (!is_dir(dirname($filePath))) {
            $from_dir = $this->cache_dir;

            $this->swe_mkdir_from(dirname($filePath), $from_dir);
        }

        if (is_writable($filePath)) {
            file_put_contents($filePath, $content);
        }
    }

    /**
     * Returns path to section's cache dir
     *
     * @param string $section
     * @return string
     */
    function cache_dir($section)
    {
        return $this->swe_path($this->cache_dir . '/' . $section);
    }

    /**
     * Converts win path to unix
     *
     * @param string $path
     * @return string
     */
    function swe_path($path)
    {
        $path = preg_replace('~[/\\\]+~', '/', $path);
        $path = rtrim($path, '/');

        return $path;
    }

    /**
     * Returns real path of given path
     *
     * @param string $path
     * @return string
     */
    function swe_realpath($path)
    {
        $path = $this->swe_path($path);
        $parts = explode('/', $path);
        $absolutes = array();

        foreach ($parts as $part) {
            if ('.' == $part) {
                continue;
            }
            if ('..' == $part) {
                array_pop($absolutes);
            } else {
                $absolutes[] = $part;
            }
        }

        return implode('/', $absolutes);
    }

    /**
     * Recursive creates directory from some directory
     * Does not try to create directory before from
     *
     * @param string $path
     * @param string $from_path
     * @param integer $mask
     * @return boolean
     */
    function swe_mkdir_from($path, $from_path = '', $mask = 0777)
    {
        $path = $this->swe_realpath($path);
        $from_path = $this->swe_realpath($from_path);

        if (substr($path, 0, strlen($from_path)) != $from_path)
            return false;

        $path = substr($path, strlen($from_path));

        $path = trim($path, '/');
        $dirs = explode('/', $path);

        $curr_path = $from_path;

        foreach ($dirs as $dir) {
            if ($dir == '') {
                return false;
            }

            $curr_path .= ($curr_path == '' ? '' : '/') . $dir;

            if (!is_dir($curr_path)) {
                if (is_writable($curr_path) && !mkdir($curr_path, $mask)) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Recursive remove dir
     *
     * @param string $path
     * @param array $exclude
     * @param bool $remove
     * @return void
     */
    function swe_rmdir($path, $remove = true)
    {
        $dir = @opendir($path);

        if ($dir) {
            while (($entry = @readdir($dir)) !== false) {
                if ($entry == '.' || $entry == '..') {
                    continue;
                }

                $full_path = $path . DIRECTORY_SEPARATOR . $entry;

                if (@is_dir($full_path)) {
                    $this->swe_rmdir($full_path);
                } else {
                    @unlink($full_path);
                }
            }

            @closedir($dir);

            if ($remove) {
                @rmdir($path);
            }
        }
    }

    function cache_flush()
    {
        $this->swe_rmdir($this->cache_dir, false);
    }
}