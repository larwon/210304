<?
	$connect = mysql_connect('localhost', 'root', 'apmsetup');
	mysql_select_db('sign_in_db', $connect);

	$result = $connect;
	
	if ($result)
	{
		echo "연결 되었습니다";
	}
	else
	{
		echo "연결 실패했습니다";
	}


	$tel = $phone1."-".$phone2."-".$phone3;
	
	if ($movie == 'yes')
	{
		$hobby = "movie";
	}
	if ($book == 'yes')
	{
		$hobby = $hobby." book";
	}
	if ($shop == 'yes')
	{
		$hobby = $hobby." shop";
	}
	if ($sport == 'yes')
	{
		$hobby = $hobby." sport";
	}
	
	$sql = "insert into sign_in (id, name, password, gender, tel, address, hobby, intro, title) values ('$id', '$name', '$password', '$gender', '$tel', '$address', '$hobby', '$intro', '$title')";
	$result = mysql_query($sql);
	mysql_close($connect);

?>