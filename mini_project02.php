<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
	</head>

	<body>
	<center><h1>�� ȸ������</h1></center><br>
	<form name="mem_form" method="post" action="mini_project02_03.php">
	<input type="hidden" name="title" value="ȸ�� ���� ���">
	<table border="1" width="640" cellspacing="1" cellpadding="4">
	<tr>
		<td align="right">* ���̵� :</td>
		<td><input type="text" size="15" maxlength="12" name="id" value=""></td>
	</tr>
	<tr>
		<td align="right" > * �̸� :</td>
		<td><input type="text" size="15" maxlength="12" name="name"></td>
	</tr>
	<tr>
		<td align="right"> * ��й�ȣ :</td>
		<td><input type="password" size="15" maxlength="10" name="password" value=""></td>
	</tr>
	<tr>
	<td align="right"> * ��й�ȣ Ȯ�� :</td>
	<td><input type="password" size="15" maxlength="12" name="password_confirm">
 	</td>
	</tr>
	<tr>
	<td align="right">���� :</td>
	<td><input type="radio" name="gender" value="M">��
	<input type="radio" name="gender" value="F">��</td>
	</tr>
	<td align="right"> * ��ȭ��ȣ :</td>
	<td><select name="phone1">
	<option>����</option>
	<option value="010">010</option>
	</select> -
	<input type="text" size="4" name="phone2" maxlength="4"> -
	<input type="text" size="4" name="phone3" maxlength="4"></td>
	</tr>
	<tr>
	<td align="right">�� �� :</td>
	<td><input type="text" size="50" name="address"></td>
	</tr>
	<tr>
	<td align="right">�� �� :</td>
	<td>
	<input type="checkbox" name="movie" value="yes" >��ȭ���� &nbsp;
	<input type="checkbox" name="book" value="yes" >���� &nbsp;
	<input type="checkbox" name="shop" value="yes" >���� &nbsp;
	<input type="checkbox" name="sport" value="yes" >�
	</td>
	</tr>
	<tr>
	<td align="right">�ڱ�Ұ� :</td>
	<td><textarea name="intro" rows="5" cols="60"></textarea></td>
	</tr>
	</table>
	<br>
	<table border="0" width="640">
	<tr><td align="center">
		<input type="submit" value="Ȯ��">
		<input type="reset" value="�ٽ��ۼ�"></td>
	</tr>
	</table>
	</form>
	</body>
</html>