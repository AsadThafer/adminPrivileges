<div class="topnav" id="myTopnav">
      <a href="index.php">الرئيسية</a>
      <a href="orders.php">الطلبات</a>
      <a href="about.php">من نحن</a>
      <a id="login" href="register.php"  
        <?php 
if (isLoggedIn()==True) {
echo 'style="display:none;"';
}
?>      >إنشاء حساب </a>
      <a id="home_Admin" href="home.php"
      <?php if (!isAdmin()){echo 'style="display:none;"';}?>
      
      > رئيسية الادمن </a>
      <a id="create_user_Admin" href="create_user.php"
      <?php if (!isAdmin()){echo 'style="display:none;"';}?>
      >انشاء حساب الادمن </a>

      <a id="deleteusers" href="delete.php"
      <?php if (!isAdmin()){echo 'style="display:none;"';}?>
      >مشاهدة و حذف مستخدمين</a>

      <a id="signout" href="home.php?logout='1'"  
      <?php 
if (isLoggedIn()==false) {
echo 'style="display:none;"';
}
?>
      
      >تسجيل خروج</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>