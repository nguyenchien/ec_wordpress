<?php

/**
 * Class SWE_JSON_API_Query
 */
class SWE_JSON_API_Query
{
    // Default values
    protected $defaults = array(
        'date_format' => 'Y-m-d H:i:s',
    );

    function __construct()
    {
    }

    function get($key)
    {
        if (is_array($key)) {
            $result = array();
            foreach ($key as $k) {
                $result[$k] = $this->get($k);
            }
            return $result;
        }
        $query_var = (isset($_REQUEST[$key])) ? $_REQUEST[$key] : null;
        if ($query_var) {
            return $this->strip_magic_quotes($query_var);
        } else if (isset($this->defaults[$key])) {
            return $this->defaults[$key];
        } else {
            return null;
        }
    }

    function __get($key)
    {
        return $this->get($key);
    }

    function __isset($key)
    {
        return ($this->get($key) !== null);
    }

    function strip_magic_quotes($value)
    {
        if (get_magic_quotes_gpc()) {
            return stripslashes($value);
        } else {
            return $value;
        }
    }

    function getRegex($pattern)
    {
        $allowedParamChars = '[a-zA-Z0-9\_\-]+';
        preg_match_all('/{(' . $allowedParamChars . ')}/', $pattern, $matches);
        $arrayPatterns = array();
        $pattern = '';
        foreach ($matches[0] as $match) {
            if (empty($pattern)) {
                $pattern = $match;
            } else {
                $pattern = $pattern . '/' . $match;
            }
            $arrayPatterns[] = $pattern . '(/)';
        }

        $patternAsRegex = array();
        foreach ($arrayPatterns as $findPattern) {
            if (preg_match('/[^-:\/_{}()a-zA-Z\d]/', $findPattern))
                return false; // Invalid pattern

            // Turn "(/)" into "/?"
            $findPattern = preg_replace('#\(/\)#', '/?', $findPattern);

            // Create capture group for '{parameter}'
            $findPattern = preg_replace(
                '/{(' . $allowedParamChars . ')}/',    # Replace "{parameter}"
                '(?<$1>' . $allowedParamChars . ')', # with "(?<parameter>[a-zA-Z0-9\_\-]+)"
                $findPattern
            );

            $patternAsRegex[] = "@^" . $findPattern . "@D";
        }
        return $patternAsRegex;
    }

    function parseURL($routes, $url)
    {
        $params = array();
        if (empty($routes) || empty($url)) return $params;
        $patternAsRegex = $this->getRegex($routes);
        foreach ($patternAsRegex as $pattern) {
            preg_match($pattern, $url, $matches);
            if (empty($matches)) break;
            $params = array_intersect_key(
                $matches,
                array_flip(array_filter(array_keys($matches), 'is_string'))
            );
        }
        return $params;
    }


}