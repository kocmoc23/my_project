<div class="container">
	<h1 style="font-weight: 700;color: #FFC107;">Добро&#160;пожаловать на&#160;наш&#160;первый&#160;сайт!</h1>
	<br>
	<p style="text-align=left; font-size: 20pt; font-weight: 700; color: #191367;">Последние новости:</p>
	<div class="card">
		<table class="table table-striped">
			<tr><th>ID</th><th>Title</th><th>Content</th><th>Postcard</th></tr>
			<?php 
				for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
				    $data->data_seek($row_no);
				    $row = $data->fetch_assoc();
				    echo "<tr><td>".$row['id_news']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>";
				}
			?>
		</table>
	</div>
</div>