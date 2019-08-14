<?php $id_compound  = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0 ;
// GET ANOTHER WITH ID
$stmtID = $conp->prepare("SELECT * FROM compound WHERE compound_id = :proID");
$stmtID->bindParam(":proID",$id_compound);
$stmtID->execute();
$test = $stmtID->rowCount();
if ($test > 0){
$compound_data_bc = $stmtID->fetchAll(PDO::FETCH_ASSOC);
} else
{
  echo "<h1>There's No Such item</h1>";
  exit();
}
?>
<section class="edit-form">
  <form class="" action="?do=update&id=<?php echo $id_compound; ?>" method="post">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">+</span>
        </div>
        <input type="text" name="compoundeditname" class="form-control our" placeholder="اسم الكمباوند الجديد" aria-label="اسم الكمباوند" aria-describedby="basic-addon1" value="<?php echo $compound_data_bc[0]['compound_name']; ?>">
      </div>
      <label for="projectaddd">تعديل الوصف</label>
    <textarea  name="compounddescribe" id="mytextarea" placeholder="تعديل الوصف">
      <?php
      echo $compound_data_bc[0]['compound_description'];
      ?>
    </textarea>
      <!-- <div class="form-group">
        <label for="sel1">اختار الكمباوند المراد تعديله</label>
        <select name="compoundwhat" class="form-control" id="sel1">

       </select>
     </div> -->
    <button type="submit" name="send-sub" class="last mx-auto px-md-5 btn btn-outline-warning">تعديل&nbsp;<i class="fas fa-edit"></i></button>
  </form>
</section>
