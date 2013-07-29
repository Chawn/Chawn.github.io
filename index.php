<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <title>Chawn.github.io by Chawput</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
        .van{
        width:400px;
        }
        .row{
        width:100%;
        display:inline;
        }
        .col{
        width:25%;
        display:inline-block;
        background: red ;
        }
        .col-blank{
        width:25%;
        display:inline-block;
        background: white;
        }
    </style>
</head>
<body>
<div class="van">
<?
for ($r=1; $r <= 5 ; $r++) { 
    echo "<div class='row'>" ;
    if($r==1){
        for ($c=1; $c <= 4 ; $c++) { 
            if($r==1&&$c==4){
                echo "<div class='col-blank'></div>" ;
            }else{
                echo "<div class='col'></div>" ;
            }
        }
    }else if($r==5){
        for ($c=1; $c <= 4 ; $c++) { 
            echo "<div class='col'></div>" ;
        }
    }else{
        for ($c=1; $c <= 4 ; $c++) { 
            if($c==2){
                echo "<div class='col-blank'></div>" ;
            }else{
                echo "<div class='col'></div>" ;
            }
        }
    }
    echo "</div>";
}
?>
</div>
</body>
</html>
