<br/>
<br/>
<br/>
<form class="" action="?do=delete" method="post">
    <div class="edit-form form-group">
      <label for="sel1">اختار المشروع المراد حذفه</label>
      <select name="deleteproject" class="form-control" id="sel1">
        <?php
          foreach($get as $data) {
            echo "<option value=".$data['0'].">".$data['1']."</option>";
          }
        ?>
     </select>
     <button type="submit" name="delete-sub" class="last mx-auto px-md-5 btn btn-outline-danger">حذف&nbsp;<i class="fas fa-trash-alt"></i></button>
   </div>

</form>
