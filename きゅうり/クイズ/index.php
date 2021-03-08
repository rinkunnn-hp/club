<form action="index.php" method="post" enctype="multipart/form-data">
<input type="submit" id=start name=start value=START>
 

  <?php
        if(isset($_POST['start'])){
           echo"問題1 織田信長が自害した出来事を何というか？";
           echo"<input type=submit id=a1-1 name=a1-1 value=寺>";
           echo"<input type=submit id=a1-2 name=a1-2 value=本能>";
           echo"<input type=submit id=a1-3 name=a1-3 value=本能寺の変>";
           }
          
        if(isset($_POST['a1'])){
           echo"はずれ";
           echo"問題1 織田信長が自害した出来事を何というか？";
           echo"<input type=submit id=a1-1 name=a1-1 value=寺>";
           echo"<input type=submit id=a1-2 name=a1-2 value=本能>";
           echo"<input type=submit id=a1-3 name=a1-3 value=本能寺の変>";
           }
  
          if(isset($_POST['a1-2'])){
           echo"はずれ";
           echo"問題1 織田信長が自害した出来事を何というか？";
           echo"<input type=submit id=a1-1 name=a1-1 value=寺>";
           echo"<input type=submit id=a1-2 name=a1-2 value=本能>";
           echo"<input type=submit id=a1-3 name=a1-3 value=本能寺の変>";
           }
  
          if(isset($_POST['a1-3'])){
           echo"あたり";
           echo"問題2 世界で2番目に高い山は何というのか？";
           echo"<input type=submit id=a2-1 name=a2-1 value=エベレスト>";
           echo"<input type=submit id=a2-2 name=a2-2 value=チョモランマ>";
           echo"<input type=submit id=a2-3 name=a2-3 value=KG>";　
           }
 ?>
  
      

