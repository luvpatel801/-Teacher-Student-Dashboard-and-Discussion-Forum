<?php
function sanitize($text)
{
  $text = trim($text);
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function sanitizeout($text)
{
  echo html($text);
}




