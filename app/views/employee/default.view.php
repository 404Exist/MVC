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
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Address</th>
      <th>Salary</th>
      <th>Tax (%)</th>
      <th>Control</th>
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
          <a href="employee/edit/<?= $employee->id ?>">Edit</a>
          <a href="employee/delete/<?= $employee->id ?>" onclik="if(!confirm('do you want to delete ?'))">Delete</a>
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