<?php

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