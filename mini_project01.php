<?
	$connect = mysql_connect('localhost', 'root', 'apmsetup');
	mysql_select_db('aaa_db', $connect);

	$result = $connect;
	if ($result)
	{
		echo "���� �Ǿ����ϴ�";
	}
	else
	{
		echo "������ �����Ͽ����ϴ�";
	}

	
	$tot = $kor + $eng + $math;
	$avg = $tot / 3; 

	if ($avg >= 90)
	{
		$grade = "A";
	}
	elseif ($avg >= 80)
	{
		$grade = "B";
	}
	elseif ($avg >= 70)
	{
		$grade = "C";
	}
	elseif ($avg >= 60)
	{
		$grade = "D";
	}
	else
	{
		$grade = "F";
	}

	$sql = "insert into aaa01 (name, kor, eng, math, tot, avg, grade) values ('$name', '$kor', '$eng', '$math', '$tot', '$avg', '$grade')";
	$result = mysql_query($sql);	
	mysql_close($connect);

	
?>