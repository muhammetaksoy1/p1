<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock-Paper-Scissors</title>
</head>
<body>
    <?php
    
    $round=10;
    $numberOfWinsOfPlayerA=0;
    $numberOfWinsOfPlayerB=0;
    $numberOfDraw=0;

    for($i=1;$i<=$round;$i++){

        $playerA=rand(0,2);
        $playerB=rand(0,2);
        echo " <br>";
        echo("round $i:");
        echo " <br>";

        if($playerA==0 && $playerB==0){
            $playerA=="Rock";
            $playerB=="Rock";
            echo " <br>";
            echo "playerA:Rock";
            echo " <br>";
            echo "playerB:Rock";
            echo " <br>";
            echo 'Same choice:It is a draw...';
            echo " <br>";
            $numberOfDraw++;
            echo " <br>";

        }
        else if($playerA==1 && $playerB==1){
            $playerA=="Paper";
            $playerB=="Paper";
            echo " <br>";
            echo "playerA:Paper";
            echo " <br>";
            echo "playerB:Paper";
            echo " <br>";
            echo 'Same choice:It is a draw...';
            echo " <br>";
            $numberOfDraw++;
            echo " <br>";

        }
        else if($playerA==2 && $playerB=2){
            $playerA=="Scissors";
            $playerB=="Scissors";
            echo " <br>";
            echo "playerA:Scissors";
            echo " <br>";
            echo "playerB:Scissors";     
            echo " <br>";       
            echo 'Same choice:It is a draw...';
            echo " <br>";
            $numberOfDraw++;

        }
        else if($playerA==0 && $playerB==1){
            $playerA=="Rock";
            $playerB=="Paper";
            echo "playerA:Rock";
            echo " <br>";
            echo "playerB:Paper";     
            echo " <br>"; 
            echo 'Paper cover rocks:PlayerB is wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerB++;

        }
        else if($playerA==0 && $playerB=2){
            $playerA=="Rock";
            $playerB=="Scissors";
            echo "playerA:Rock";
            echo " <br>";
            echo "playerB:Scissors";     
            echo " <br>"; 
            echo 'Rock crushes Scissors: Player A wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerA++;

        }

        else if($playerA==1 && $playerB==0){
            $playerA=="Paper";
            $playerB=="Rock";
            echo "playerA:Paper";
            echo " <br>";
            echo "playerB:Rock";     
            echo " <br>"; 
            echo 'Paper cover rocks:PlayerA is wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerA++;

        }
        else if($playerA==1 && $playerB=2){
            $playerA=="Paper";
            $playerB=="Scissors";
            echo "playerA:Paper";
            echo " <br>";
            echo "playerB:Scissors";     
            echo " <br>"; 
            echo 'Scissors cut paper : Player B wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerB++;

        }
        else if($playerA==2 && $playerB==0){
            $playerA=="Scissors";
            $playerB=="Rock";
            echo "playerA:Scissors";
            echo " <br>";
            echo "playerB:Rock";     
            echo " <br>";     
            echo 'Rock crushes Scissors: Player A wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerB++;

        }
        else if($playerA==2 && $playerB=1){
            $playerA=="Scissors";
            $playerB=="Paper";
            echo "playerA:Scissors";
            echo " <br>";
            echo "playerB:Paper";     
            echo " <br>";
            echo 'Scissors cut paper : Player A wins...';
            echo " <br>"; 
            $numberOfWinsOfPlayerA++;

        }
      

    }
    echo " <br>"; 
    echo " <br>"; 
    echo "Player A : $numberOfWinsOfPlayerA wins";
    echo " <br>"; 
    echo "Player B : $numberOfWinsOfPlayerB wins";
    echo " <br>"; 
    echo "$numberOfDraw games were a draw";

    ?>     




</body>
</html>