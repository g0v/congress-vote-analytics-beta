<h2>議題名稱： <?php echo $issue->name;?></h2>
<form name="form" method="post" action="<?php echo $action;?>">
  <input type="hidden" name="issueid" value="<?php echo $issueid;?>" />

  立場：
  <input type="radio" name="vote" value="1" <?php echo $is_vote_true;?>/>同意 
  <input type="radio" name="vote" value="-1" <?php echo $is_vote_false;?>/>反對 

  <br/>
  
  重要性：
  <input type="text" name="scale" value="<?php echo $ivsm->scale;?>" />(請輸入1~100的數值) <br/>
  <input type="submit" name="button" value="確定" /> <br/>
</form>

<br/>

<h3>立委立場：</h3>
<p>各個立委針對此一議題的立場。</p>

<table>
  <thead>
    <tr>
      <td>序號</td>
      <td>立委姓名</td>
      <td>立場</td>
      <td>立場指數</td>
    </tr>
  </thead>
  <tbody>
    <?php echo $tbody; ?>  
  </tbody>
</table>
