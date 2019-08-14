<section class="edit-form">
  <form class="" action="index.html" method="post">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="text" name="projectadddn" class="form-control our" placeholder="اسم المشروع" aria-label="اسم المشروع" aria-describedby="basic-addon1">
      </div>
      <label for="sel1">اضافة وصف</label>
    <textarea  name="projectaddd" id="mytextarea" placeholder="اضافة الوصف"></textarea>
       <div class="form-group">
        <label for="sel1">اختار المشروع التابع له</label>
        <select name="compoundwhat" class="form-control" id="sel1">
          <?php
            foreach($get as $data) {
              echo "<option value=".$data['0'].">".$data['1']."</option>";
            }
          ?>
       </select>
      </div>

    <button type="submit" name="send-sub" class="last mx-auto px-md-5 btn btn-outline-success">اضافة&nbsp;<i class="fas fa-plus-circle"></i></button>
  </form>
</section>
