
<div class="container"> 
	<h3 style="text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  	<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
	</svg>&#160;&#160;Информация об авторе нашего сайта</h3>
	<div class="card" style="width: 35em; box-shadow: 0 5px 6px rgba(0,0,0,0.3);">
		<div class="card-body">
		<?php
			for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
				$data->data_seek($row_no);
				$row = $data->fetch_assoc();
				echo "<p>Индекс: ".$row['id']."</p><hr>
				<p><b>".$row['fio']."</b></p>
				<p>Возраст: ".$row['age']."</p>
				<p>Город: ".$row['location']."</p>
				<p>Дополнительная информация: ".$row['additional']."</p>";
			}
		?>
		</div>
	</div>
	<a class="btn btn-warning mt-4 mb-4 btn-sm" href="/journal/about" target='_self'>&#171;&#160;Вернуться к списку авторов</a>
</div>