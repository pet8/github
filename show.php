<?php
$cake = new Cake();
$row = $cake->gioihansp('H001');
?>
<?php 
$row1 = $cake->gioihansp('K001');
?>
<?php 
$row2 = $cake->gioihansp('N001');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bánh Kem</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 tieude"> HOT </div>
      <?php foreach($row as $value){ ?>
      <a href="index.php?chitiet=banhhot">
      <div class="col-md-3 hinh" > 
      	<div><img src="images/Hot/<?php echo $value['HINH_ANH'];?>"/>
        	<div class="view"> View More </div>
        </div>
      </div>
      </a>
      <?php }?>
      <div class="col-md-12 tieude"> MỚI NHẤT  </div>
      <?php foreach ($row2 as $value2){ ?>
      <a href="index.php?chitiet=banhmoinhat">
      <div class="col-md-3 hinh" > 
      	<div><img src="images/New/<?php echo $value2['HINH_ANH']; ?>"/>
        	<div class="view"> View More </div>
        </div>
      </div>
      </a>
      <?php }?>
      <div class="col-md-12 tieude" > KHUYẾN MÃI </div>
      <?php foreach($row1 as $value1){?>
      <a href="index.php?chitiet=banhkhuyenmai">
      <div class="col-md-3 hinh" > 
      	<div><img src="images/KM/<?php echo $value1['HINH_ANH']; ?>"/>
        	<div class="view"> View More </div>
        </div>
      </div>
      </a>
      <?php } ?>
    </div>
  </div>
</body>
</html>