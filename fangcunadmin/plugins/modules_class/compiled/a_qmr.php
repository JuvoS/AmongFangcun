<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>
<table>
    <tr>
        <td class="tophead">姓名</td>
        <td><?php
echo $_obj['name'];
?>
</td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php
echo $_obj['Email'];
?>
</td>
    </tr>
</table>
</body>
</html>