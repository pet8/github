<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bánh Cưới</title>
</head>
<?php
$cake = new Cake();
$row = $cake->IDSP('BC001');
if($row!=null){
?>
<body>
<div class="container-fluid">
<div class="row">
  <div class="col-md-12 tieude"> <?php echo $row[0]['TEN_LOAI_SP']?> </div>
  <?php foreach ($row as $value){ ?>
  <div class="col-md-3 " style="height:340px"> <a href="#">
    <div class="hinh">
      <div><img src="images/banhcuoi/<?php echo $value['HINH_ANH']; ?>"/>
        <div class="chitiet"><?php echo str_replace("\r\n","<br>", $value['DAC_DIEM']);?></div> 
        <?php if($value["CHIETKHAU"]!=0){?><div class="khuyenmai"><?php echo $value["CHIETKHAU"] ?>%</div><?php }?>
      </div>
    </div>
    </a>
    <div class="row">
      <div class="col-md-offset-3 col-md-7"> <?php echo $value['TEN_SP']?> </div>
      <div class="col-md-12">
        <div class="col-md-7" style="color:#F00;">Giá Gốc: </div><div class="col-md-5" style="color:#F00; <?php if($value["CHIETKHAU"]!=0){ ?> text-decoration:line-through <?php }?>"> <?php echo $value['GIA'] ?> VND </div>
        <?php if($value["CHIETKHAU"]!=0){ ?><div class="col-md-7" style="color:#F00" >Giá Khuyến Mãi: </div> <div class="col-md-5" style="color:#F00"><?php echo $value['GIA']-(($value['CHIETKHAU']/100)*$value['GIA']) ?> VND</div><?php } ?>
        <a href="index.php?mod=giohang&them=add&id=<?php echo $value['MA_SP'] ?>&dongia=<?php echo $value['GIA']?>" style="color:#009"> <div class="col-md-offset-4 col-md-8">Đặt mua </div></a>

      </div>
    </div>
  </div>
  <?php }}
  else{
	  echo "Trang rỗng";
  }
  ?>
</div>
</div>
</body>
</html>