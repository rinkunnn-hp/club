<form action="index.php" method="post" enctype="multipart/form-data">
<input type="submit" id=start name=start value=START　class="btn btn-border">
 <style>
   /*主な共通部分は省略*/

a.btn-border {
  padding: 1.5rem 4rem;
  border: 3px solid #000;
  border-radius: 0;
  border-radius: 100vh;
  background: #fff;
}

a.btn-border:before {
  position: absolute;
  top: 2px;
  left: 2px;
  width: calc(100% - 4px);
  height: calc(100% - 4px);
  content: '';
  -webkit-transition: all .3s;
  transition: all .3s;
  border: 3px dotted #000;
  border-radius: 100vh;
}

a.btn-border:hover:before {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

  </style>
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
  
      

