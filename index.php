<?php
if(isset($_POST['submit'])){
    require_once 'db.php';
    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $sql = "INSERT INTO emp (EMPNO, ENAME, USERNAME, PASSWORD) 
    VALUES (?,?,?,?) ";
    $statement = $connection->prepare($sql);
    if($statement->execute([$empno,$ename,$username,$password ])){
      echo 'ลงทะเบียนเสร็จเรียบร้อย';
    }
}

?>
<?php require 'header.php'; ?>
<br>
<br>
<center>

<h3>สร้างบัญชีใหม่</h3>
</div>
<form name="register" action="" method="post">
<br>
<div  class="form-control col-sm-4">
  <input type="text" class="form-control" name="empno" placeholder="รหัสพนักงาน" required>
</div>
<br>

<div class="form-control col-sm-4">
  <input type="text" class="form-control" name="ename" placeholder="ชื่อ"required>
</div>
<br>

<div class="form-control col-sm-4">
  <input type="text"  class="form-control" name="username" placeholder="อีเมล"required>
</div>
<br>

<div class="form-control col-sm-4">
  <input type="password" class="form-control"name="password" placeholder="รหัสผ่าน"required>
</div>
<br>
<div class="form-control col-sm-4">
  <input type="submit" class="btn btn-primary btn-block" name="submit" value="ลงทะเบียน" class="btn btn-primary"/>
</div>
</center>
</form>
<?php require 'footer.php'; ?>



      