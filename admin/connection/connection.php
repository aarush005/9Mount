 <?php 
 session_start();
 $con=mysqli_connect("localhost","root","","9mount");
 define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/9Mount/admin/'); 

 define('SITE_PATH','http://localhost/9Mount/admin/'); 


 define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'assets/images/product/'); 


 define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'assets/images/product/'); 
 ?>