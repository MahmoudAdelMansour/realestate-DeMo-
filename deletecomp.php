<br/>
<br/>
<br/>
<form class="" action="?do=delete" method="post">
    <div class="edit-form form-group">
      <label for="sel1">اختار الكمباوند المراد حذفه</label>
      <select name="deletecompound" class="form-control" id="sel1">
        <?php
          foreach($getCompound as $data) {
            echo "<option value=".$data['0'].">".$data['1']."</option>";
          }
        ?>
     </select>
     <button type="submit" name="delete-sub" class="last mx-auto px-md-5 btn btn-outline-danger">حذف&nbsp;<i class="fas fa-trash-alt"></i></button>
   </div>

</form>
