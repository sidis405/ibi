<?php

function tokenTruncate($string, $your_desired_width) {

    if(strlen($string) < $your_desired_width) return $string;

  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { break; }
  }

  return implode(array_slice($parts, 0, $last_part)).'...';
}

function getTheText($contenuti, $blocco)
{
    return $contenuti[$blocco]['testo'];
}

function getKey($contenuti, $blocco, $key)
{
    return $contenuti[$blocco][$key];
}

function presentBreadcrumbs($pieces){


    if(count($pieces) > 1)
    {
        $lastElement = end($pieces);

        ?>

        <ol class="breadcrumb">
         
        <?php

        print "<li><a href='/admin'>Admin</a></li>";

        foreach ($pieces as $piece) {
            
            if($piece == $lastElement)
            {
                print "<li class='active'>" . ucwords(str_replace('-', ' ', $piece)). "</li>";
            }
            elseif($piece)
            {
                print "<li><a href='/" . str_slug($piece) . "'>" . ucwords(str_replace('-', ' ', $piece)). "</a></li>";
            }
          
        }

        ?>

        </ol>

        <?php


    }

}