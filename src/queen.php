<?php
    class Queen{
        function canAttack($position, $target){
            $x_array = ["a","b","c","d","e","f","g","h"];
            $y_array = ["1","2","3","4","5","6","7","8"];

            $position_array = str_split($position);// = "d","4"
            $target_array = str_split($target);// = "e","5"
            $position_xAsNumber;
            $index = 0;
            foreach($x_array as $x){
                if($x === $position_array[0]){
                    $position_xAsNumber = $index;
                    $index = 0;
                }
                $index++;
            }

            if($position_array[0] === $target_array[0] || $position_array[1] === $target_array[1]){
                return true;
            }
            // else if($target_array[0] === $x_array[$position_xAsNumber +1] && $target_array[1] === $y_array[$position_array[1]]){
            //     return true;
            // }
            else{
                while($position_xAsNumber + $index < 8){
                  if($target_array[0] === $x_array[$position_xAsNumber + $index + 1] && $target_array[1] === $y_array[$position_array[1] + $index]){
                      return true;
                  }else{
                    $index++;
                  }
                }
            }

        }

    }
?>
