<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>トップページ</title>
</head>
<body>
<h1>トップページ</h1>
<p>お知らせ</p>
<table border="1">
	<tr>
		<th>日付</th>
		<th>タイトル</th>
	</tr>
<?php foreach($list as $row){ ?>
	<tr>
		<td><?php echo date('Y/m/d',strtotime($row['view_date'])) ?></td>
		<td>
		<?php if($row['body']){ ?>
			<a href="detail.php?id=<?php echo $row['id'] ?>">
		<?php } ?>
				<?php echo $row['title'] ?>
		<?php if($row['body']){ ?>
			</a>
		<?php } ?>
		</td>
	</tr>
<?php } ?>
</table>
</body>
</html>