<?php
class FindAndReplace
{
    function execute($input_string, $string_to_replace, $replacement)
    {
        $charIndex = strpos($input_string, $string_to_replace);
        $beginning = substr($input_string, 0, $charIndex);
        $end = substr($input_string, $charIndex + strlen($string_to_replace));

        $result = $beginning . $replacement . $end;

        return $result;
    }
}
?>
