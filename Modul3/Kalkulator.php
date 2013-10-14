  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Kalkulator</title>
  <style>
  body{
    background-color: #0F9;
  }
  .content{
    background-color: #0F9;
    margin: 100px auto;
    padding: 5px 20px 40px 20px;
    width: 350px;
    border: solid 3px #a4d7f5;
  }
  .min_content{
    margin: 0px auto;
    width: 250px;
  }
  .content h1{
    color: #3C0;
    
  }
  
  .content input{
    display:block;
    margin: 5px 0 0 0;
    padding: 5px;
  }
  </style>
  
  </head>
  <script>
  function validateForm(){
  var x=document.forms["kalkulator"]["input1"].value;
  if (x==null || x==""){
    alert("Inputan Pertama Masih Kosong !!");
    document.getElementById("input1").focus();
    return false;
  }
  var y=document.forms["kalkulator"]["input2"].value;
  if (y==null || y==""){
    alert("Inputan Kedua Masih Kosong !!");
    document.getElementById("input2").focus();
    return false;
  }
  }
  
  function isNumberKey(evt){
	  var charCode = (evt.which) ? evt.which : event.keyCode
	  if (charCode > 31 && (charCode < 48 || charCode > 57))
	  return false;
	  return true;
  }
  
  </script>
  <body>
  
  <form name="kalkulator" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return validateForm()" >
  <div class="content">
  <div class="min_content">
  <h1>Mini Kalkulator</h1>
  </div>
  <hr color="#a4d7f5" />
  <div class="min_content">
  <label>
    <input type="text" name="input1" id="input1" value= "<?php echo $_POST['input1'];?>" onkeypress="return isNumberKey(event)"/>
  </label>
  <select name="operasi">
    <option value="+" <?php
  if ($_POST['operasi'] == "+") {
    echo 'selected="selected"';
  }
  ?>>+ </option>
    <option value="-" <?php
  if ($_POST['operasi'] == "-") {
    echo 'selected="selected"';
  }
  ?> >- </option>
    <option value="*" <?php
  if ($_POST['operasi'] == "*") {
    echo 'selected="selected"';
  }
  ?> >*</option>
    <option value="/" <?php
  if ($_POST['operasi'] == "/") {
    echo 'selected="selected"';
  }
  ?> >/</option>
  </select>
  <label>
    <input type="text" name="input2" id="input2" value= "<?php echo $_POST['input2'];?>" onkeypress="return isNumberKey(event)" />
  </label>
  <input type="submit" value="OK" />
  <label>
  <input name="hasil" type="text" value="<?php 
  $a = $_POST['input1'];
  $b = $_POST['input2'];
  if (isset($_POST['operasi'])){
      if ($_POST['operasi'] == '+'){
        $c = $a + $b;
        echo $c;
        } else if ($_POST['operasi'] == '-'){
            $c = $a - $b;
            echo $c;
        } else if ($_POST['operasi'] == '/'){
            $c = $a / $b;
            echo $c;
        } else if ($_POST['operasi'] == '*'){
            $c = $a * $b;
            echo $c;
        }
        
    }
  ?>" readonly="readonly" />
  </label>
  </div>
  </div>
  </form>
  
  </body>
  </html>