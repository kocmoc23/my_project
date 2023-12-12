<?php include_once 'head.php';  ?>
<?php include_once 'header_p.php';  ?>
<!-- <?php include_once 'menu.php';  ?> -->

<div class="container" id="feedback_view">
	<br>
	<h4>Оставьте обратную связь о&#160;нашем&#160;сайте!</h4>
	<br>
	<form action="/journal/feedback/send" method="POST">
		<p><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Введите ваше имя" name="user"></p>		
		<p><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Введите вашу электронную почту" name="email"></p>
		<p><textarea class="form-control" id="exampleFormControlSelect1" name="comment" placeholder="Введите ваш комментарий"></textarea></p>
		<p>
			<input type="button" class="btn btn-warning mb-2 mr-2" onclick="sendData()" value="Отправить">
			<input type="reset" class="btn btn-secondary mb-2" value="Очистить">
		</p><br>	
	</form>
</div>
	<br>
<script>
{
	"use strict";
	function sendData() {
		let xhr = new XMLHttpRequest();
		feedbackForm = document.forms[0],
		formData = new FormData(feedbackForm)
		xhr.open("POST", '/journal/feedback/send')
		xhr.onloadend = function() {
			if (xhr.status == 200) {
				if (xhr.response == 1) {
					alert('Добавлено!');
				} else {
					alert(xhr.response);
				}
			} else {
			alert("Ошибка " + this.status);
			}
		};
		xhr.send(formData);
	}
}
</script>

<?php include_once 'footer.php';  ?>

