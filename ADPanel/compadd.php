<section class="edit-form">
  <form class="" action="?do=insert" method="post">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="text" name="namecomp" class="form-control our" placeholder="اسم الكمباوند" aria-label="اسم الكمباوند" aria-describedby="basic-addon1">
      </div>
      <label for="describeproject">اضافة وصف</label>
      <textarea  name="compdescribeadd" id="mytextarea" placeholder="اضافة الوصف"></textarea>
      <label for="forwhat">الكمباوند تابع لمشروع ؟</label>
      <select name="forwhat" class="form-control" id="sel1">
        <?php
          foreach($getProject as $data) {
            echo "<option value=".$data['0'].">".$data['1']."</option>";
          }
        ?>
     </select>
    <button type="submit" name="send-sub" class="last mx-auto px-md-5 btn btn-outline-success">اضافة&nbsp;<i class="fas fa-plus-circle"></i></button>
  </form>
</section>
