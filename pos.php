<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
session_start();
$empno = $_SESSION['empno'];

//2. connect db
require_once 'db.php';

//3. query string
$sql = "SELECT * FROM emp WHERE EMPNO = ? ";
$statement = $connection->prepare($sql);
$statement->execute([$empno]);
$emp = $statement->fetch(PDO::FETCH_OBJ);

?>


<?php require 'header.php'; ?>
<php?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
    <center> <h3>บัญชีส่วนตัว</h3></center>
    </div>
    <div class="container">
        <label for="ENAME">Employee ID : </label>
        <input type="text" value="<?= $emp->EMPNO; ?>"class="btn">
        
    </div>

    <div class="container">
        <label for="ENAME">Empolyee Name : </label> 
        <input type="text" value="<?= $emp->ENAME; ?>"class="btn">
        
    </div>
    
    <div class="container">
        <label for="ENAME">Job : </label> 
        <input type="text" value="<?= $emp->JOB; ?>"class="btn">
       
    </div>
   
    <div class="container">
        <label for="ENAME">Menager : </label> 
        <input type="text" value="<?= $emp->MGR ?>"class="btn">
       
    </div>

    <div class="container">
        <label for="ENAME">Hiredate : </label> 
          <input type="text" value="<?= $emp->HIREDATE ?>"class="btn">
         
    </div>

    <div class="container">
        <label for="ENAME">Salary : </label> 
        <input type="text" value="<?= $emp->SAL ?>"class="btn">
     
    </div>

    <div class="container">
        <label for="ENAME">Commission : </label>
        <input type="text" value="<?= $emp->COMM ?>"<button class="btn">
       
    </div>
    
    <div class="container">
        <label for="ENAME">Department : </label> 
        <input type="text" value="<?= $emp->DEPTNO ?>"<button class="btn">
 
    </div>
    
    <div class="container">
        <label for="ENAME">อีเมล : </label>
        <input type="text" value="<?= $emp->USERNAME ?>"<button class="btn">
     
    </div>
    
    <div class="container">
        <label for="ENAME">รหัสผ่าน : </label> 
        <input type="text" value="<?= $emp->PASSWORD ?>"<button class="btn">
   
    </div>
    
   

    <div class="form-group"><br>      
        <center><input type="button" class="btn btn-outline-primary" onclick="window.location='index.php'" value="ออกจากระบบ"></center>

    </div>