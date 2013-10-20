<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>首頁</title>
</head>
<body>
  <h2>歡迎回來<?php echo $username;?></h2>
  <a href="<?php echo base_url('member/update');?>">修改</a>
  <a href="<?php echo base_url('portal/logout');?>">登出</a>
  <a href="<?php echo base_url('issue');?>">議題表態</a>
  <a href="<?php echo base_url('politcian');?>">立委列表</a>


  <h3>立委列表</h3>
  <p>考慮各個議題您的立場與立委的立場，以及經過您針對議題的重視程度加權，最終所作的綜合排序。</p>
  <table>
    <thead>
      <tr>
        <td>序號</td>
        <td>立委名稱</td>
        <td>加權排序</td>
      </tr>
    </thead>
    <tbody>
      <?php echo $tbody; ?>
    </tbody>
  </table>

</body>
</html>
