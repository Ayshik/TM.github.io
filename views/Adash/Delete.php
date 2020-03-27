<html>

<head>
<title>Delete user</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="bootstable.min.js"></script>
</head>
<body>





<div style="width:70%; margin: auto;">
<h1>Delete User</h1>
<table class="table" id="makeEditable">
    <thead>
      <tr>
        <th>Name</th>
        <th>UserId</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
      <tr class="success">
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
      <tr class="danger">
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
      <tr class="info">
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
      <tr class="warning">
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
      <tr class="active">
        <td>Ayshik</td>
        <td>Aysh123</td>
        <td>ayshikmee@gmail.com</td>
      </tr>
    </tbody>
  </table>
</div>
<script>
 $('#makeEditable').SetEditable({ $addButton: $('#but_add')});
</script>
