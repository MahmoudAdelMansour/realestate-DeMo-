<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم المشروع</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($get as $data){
        echo "<tr>
          <th scope=".$data['0'].">".$data['0']."</th>
          <td>".$data['1']."</td>
          <td><a href=\"?do=edit&id=".$data['0']."\" role=\"button\" class=\"btn btn-outline-warning\">تعديل&nbsp;<i class=\"fas fa-edit\"></i></a></td>
          </tr>";
      }
      ?>
    </tbody>
</table>
  <section class="buttons-for-table inline-flex">
    <a href="?do=add" role="button" class="btn btn-outline-success">اضافة&nbsp;<i class="fas fa-plus-circle"></i></a>
    <a href="?do=delete" role="button" class="btn btn-outline-danger">حذف&nbsp;<i class="fas fa-trash-alt"></i></a>
  </section>
