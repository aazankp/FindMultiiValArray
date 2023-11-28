<?php
    $values = [1,4,5,6,7,8,8,10,1,4,5,5,16,9,10,11,10, 16,16, 16, 10, 12,16,8, 14];
    $count = count($values);
    $arr = [];
    echo "<pre>";   
    for ($i=0; $i < $count; $i++) {
        $counter = 1;
        for ($j=$i+1; $j < $count; $j++) {  
            if ($values[$i] == $values[$j]) {
                $counter++;
            }
        }
        if ($counter > 1 && !isset($arr[$values[$i]])) {
            $arr[$values[$i]] = $counter;
        }
    }

    $SortArr = [];

    foreach ($arr as $key => $value) {
        $SortArr[][$key] = $value;
    }

    $countsortarr = count($SortArr);

    for ($k=0; $k < $countsortarr; $k++) { 
        for ($l=$k+1; $l < $countsortarr; $l++) { 
            foreach ($SortArr[$k] as $key => $value) {
                foreach ($SortArr[$l] as $keyval => $value1) {
                    if ($value < $value1) {
                        $temp = $SortArr[$k];
                        $SortArr[$k] = $SortArr[$l];
                        $SortArr[$l] = $temp;
                    }
                }
            }
        }
    }

    echo "<table border='1' width='50%' cellspacing='1'>
        <tr>
            <th>Multi Number</th>
            <th>How Many Times</th>
        </tr>
        <tr>";

    foreach ($SortArr as $key => $value) {
        foreach ($value as $keyprint => $printarr) {
            echo "<td align='center'>" . $keyprint . "</td><td align='center'>" . $printarr . "</td>";
        }
        echo "</tr>";
    }
    
?>