<?php
class FindAndReplace
{
    function execute($input_string, $string_to_replace, $replacement)
    {
      $charIndex = strpos($input_string, $string_to_replace);
      if ($charIndex === false) {
          return $input_string;
      }
      $beginning = substr($input_string, 0, $charIndex);
      $end = substr($input_string, $charIndex + strlen($string_to_replace));

      $result = $beginning . $replacement . $this->execute($end, $string_to_replace, $replacement);

      return $result;
    }
}
?>
