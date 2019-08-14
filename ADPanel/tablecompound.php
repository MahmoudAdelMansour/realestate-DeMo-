<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم الكمباوند</th>
        <th scope="col">اسم المشروع التابع له</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($getCompound as $data){
        echo "<tr>
          <th scope=".$data['0'].">".$data['0']."</th>
          <td>".$data['1']."</td>";
            $stmtThree = $conp->prepare("SELECT * FROM projects WHERE project_id = '$data[3]'");
            $stmtThree->execute();
            $checker = $stmtThree->rowCount();
            $getProOfComp = $stmtThree->fetchAll();
            if ($checker > 0) {
              foreach($getProOfComp as $dataTow){
                echo "
                  <td>".$dataTow['1']."</td>";

              }
              echo "<td><a href=\"?do=edit&id=".$data['0']."\" role=\"button\" class=\"btn btn-outline-warning\">تعديل&nbsp;<i class=\"fas fa-edit\"></i></a>"."</td>";
              echo "</tr>";
          } else {
            echo "
              <td>لا يوجد اي كمباوند متوفر الان</td>
              </tr>";
          }
      }

      ?>
    </tbody>
</table>
  <section class="buttons-for-table inline-flex">
    <a href="?do=add" role="button" class="btn btn-outline-success">اضافة&nbsp;<i class="fas fa-plus-circle"></i></a>

    <a href="?do=delete" role="button" class="btn btn-outline-danger">حذف&nbsp;<i class="fas fa-trash-alt"></i></a>
  </section>
