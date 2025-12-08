<!DOCTYPE html>
<html>
    <body>

    <h1> Here is count of all the factor of 20</h1>
        <?php
        function countFactor($n){
            $ans=0;
            for($i=1 ; $i<=$n ; $i++){

                if($n%$i == 0){
                    $ans++;
                }
            }
            return $ans;
        }
        $n=20;
        echo countFactor($n);
        ?>
        
    </body>
</html>