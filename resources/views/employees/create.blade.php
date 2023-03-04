<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create | Employees</title> 
  </head>
  <body>
    <h1>Create</h1>
    <form action="/databaseapp/public/employees/store" method="post">
      @csrf
      <table>
        <tr>
          <th>氏名</th>
          <td><input type="text" name="employee_name"></td>
        </tr>
        <tr>
          <th>部署</th>
          <td><input type="text" name="section"></td>
        </tr>
        <tr>
          <th>基本給</th>
          <td>
            <input type="number" name="salary">
          </td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="送信"></td>
        </tr>
      </table>
    </form>
  </body>
</html>