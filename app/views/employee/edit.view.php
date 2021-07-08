<style>
  table {
    font-family: arial, sans-serif;
    width: 100%;
  }
  input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=submit]:hover {
    background-color: #45a049;
  }
</style>
<html>
  <body>
    <form method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
      <table>
        <tr>
          <td>
            <label for="name">Employee Name:</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="name" id="name" placeholder="Write the employee name here" value="<?=$employee->name?>"/>
          </td>
        </tr>
        <tr>
          <td>
            <label for="age">Employee Age:</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="number" step="1" min="22" max="45" name="age" id="age" placeholder="Write the employee age here" value="<?=$employee->age?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="address">Employee Address:</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="address" id="address" placeholder="Write the employee address here" value="<?=$employee->address?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="salary">Employee Salary:</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="number" name="salary" id="salary" step="0.01" min="1500" max="50000" placeholder="Write the employee salary here" value="<?=$employee->salary?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="tax">Employee Tax (%):</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="number" name="tax" id="tax" step="0.01" min="1" max="5" placeholder="Write the employee tax here" value="<?=$employee->tax?>" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="Save" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>