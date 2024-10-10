<?php

namespace App\Utils;

class PythagoreUtility
{
    public function display(): string
    {
        $taille = 10;
        $html = '';

        for ($i = 0; $i <= $taille; $i++) {
            $html .= "<tr>";
            for ($j = 0; $j <= $taille; $j++) {
                if ($i == 0 && $j == 0) {
                    $html .= "<td>X</td>";
                } elseif ($i == $j && $i != 0) {
                    $html .= "<td>X</td>";
                } elseif ($i == 0) {
                    $html .= "<td>$j</td>";
                } elseif ($j == 0) {
                    $html .= "<td>$i</td>";
                } else {
                    $html .= "<td>" . $i * $j . "</td>";
                }
            }
            $html .= "</tr>";
        }

        return $html;
    }
}
