<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h1>Our Employees</h1>
<a href="/employee/add"><?= $text_add_employee ?></a>
<table>
  <thead>
    <tr>
      <th><?= $text_table_employee_name ?></th>
      <th><?= $text_table_employee_age ?></th>
      <th><?= $text_table_employee_address ?></th>
      <th><?= $text_table_employee_salary ?></th>
      <th><?= $text_table_employee_tax ?></th>
      <th><?= $text_table_employee_control ?></th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if ($employees) 
  {
    foreach ($employees as $employee) 
    { 
      ?>
      <tr>
        <td><?= $employee->name ?></td>
        <td><?= $employee->age ?></td>
        <td><?= $employee->address ?></td>
        <td><?= $employee->calculateSalary() ?> L.E</td>
        <td><?= $employee->tax ?>%</td>
        <td>
          <a href="/employee/edit/<?= $employee->id ?>"><?= $text_employee_edit ?></a>
          <a href="/employee/delete/<?= $employee->id ?>" onclick="return !confirm('<?= $text_delete_confirm ?>') ?  false : true;"><?= $text_employee_delete ?></a>
        </td>
      </tr>
      <?php 
    }  
  } 
  else
  {
    ?>
    <td colspan="6"><p style="text-align:center">Sorry there's no employees</p></td>
    <?php
  }
  ?>
  </tbody>
</table>