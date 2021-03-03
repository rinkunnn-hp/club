<form action="index.php" method="post" enctype="multipart/form-data">
<input type="submit" id=start name=start value=START>
  <?php
        if(isset($_POST['start'])){
           echo"問題1 織田信長が自害した出来事を何というか？";
           echo"<input type="submit" id=a1 name=a1 value=寺>";
           if(isset($_POST['a1'])){
             echo"あったりー";
           }
  ?>
      

