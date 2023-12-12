<div class="container">
	<h2><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-front" viewBox="0 0 16 16"> <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5z"/></svg>
	&#160;&#160;Список авторов нашего сайта</h2>
	<br>
	<div class="card" >
		<table class="table table-striped">
			<tr><th>ID</th><th>Ф.И.О.</th><th>Возраст</th><th>Узнать подробнее&#160;</th></tr>
			<?php
				for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
					$data->data_seek($row_no);
					$row = $data->fetch_assoc();
					echo
					"<tr><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['age']."</td><td><a
					href='/journal/about/author/?id=".$row['id']."'
					target='_blank'>Подробнее&#160;&#187;</a></td></tr>";
				}
			?>
		</table>
	</div>
</div>
<br>