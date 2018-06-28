<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
  table {
    width: 70%;
    margin-bottom: 1rem;
    border-collapse: collapse;
  }
  td {
    padding-left: .5rem;
    border: #e9e9e9 1px solid;
  }

</style>
</head>
<body>
  <h2>%email.title%</h2>
  <table>
    <tbody>    
      <tr>
        <td><h3>Пользователь:</h3></td>
        <td><b>%email.nameuser%</b></td>
      </tr>

      <tr style="background-color: rgba(0, 0, 0, .05);">
        <td><h3>Сообщение:</h3></td>
        <td>%email.message%</td>
      </tr>

      <tr>
        <td><h3>Email:</h3></td>
        <td><b>%email.emailuser%</b></td>
      </tr>

      <tr style="background-color: rgba(0, 0, 0, .05);">
        <td><h3>Дата отправки:</h3></td>
        <td><b>%email.date%</b></td>
      </tr>
    </tbody>
  </table>
</body>
</html>