<?php

function table($data)
{
    print '<table>';
    foreach (array_keys($data[0]
             ) as $value) {
        print '<th>' . $value . '</th>';
    }
    foreach ($data as $users) {
        print '<tr>';
        foreach ($users as $user) {
            print '<td>' . $user . '</td>';
        }
        print '</tr>';
    }
    print '</table>';
}