<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];
$nick=$_POST['nick'];

if($pw!=$pwc)
{
    echo "비밀번호 틀렸음 다시쳐";
    echo "<a href=signUp.html>back page</a>";
    exit();
}
if($id==NULL || $pw==NULL || $name==NULL || $nick==NULL)
{
    echo "칸 비었음";
    echo "<a href=signUp.html>back page</a>";
    exit();
}
$mysql=mysqli_connect("localhost","root",2464,"noticeboard");
$check="SELECT *from user WHERE user_id='$id'";
$result=$mysql->query($check)

if($result->num_rows==1){
    echo "중복된 id입니다.";
    echo "<a href=signUp.html>back page</a>"
    exit();
}

$signup=mysqli_query($mysql,"INSERT INTO user (user_id,user_pw,user_name,user_nick)
VALUES ('$id','$pw','$name','$nick')");
if($signup){
    echo "회원가입이 정상적으로 완료되었습니다."
}

?>
