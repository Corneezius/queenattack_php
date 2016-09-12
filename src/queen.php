<?php
    class Queen{

        public $location;
        public $xArray = ["A","B","C","D","E","F","G","H"];
        public $yArray = [1,2,3,4,5,6,7,8];

        function canAttack($position, $target){
          $position_array = str_split($position);
          $target_array = str_split($target);

          if($position_array[0] === $target_array[0]){
            return true;
          }
          else{
            return false;
          }

        }

    }
?>
