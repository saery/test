<?php
/**
 * Created by PhpStorm.
 * User: pane
 * Date: 12/11/15
 * Time: 0:28
 */

class Dekorator
{
    static public function tebalkan($what)
    {
        $what = "<b>".$what."</b>";

        return $what;
    }

    static public function italic($paijo)
    {
        $paijo = "<i>".$paijo."</i>";


        return $paijo;
    }

    static public function anchor($title,$link)
    {
        $what = '<a style="color: black;padding-right: 4px;" href="'.$link.'">'.$title."</a>";

        return $what;
    }

}


