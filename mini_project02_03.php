<?
	$connect = mysql_connect('localhost', 'root', 'apmsetup');
	mysql_select_db('sign_in_db', $connect);

	$result = $connect;
	
	if ($result)
	{
		echo "���� �Ǿ����ϴ�";
	}
	else
	{
		echo "���� �����߽��ϴ�";
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