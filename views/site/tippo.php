<h1> Книги </h1>
<ol>
<?php foreach ($tippo as $tipobook) { ?>
	<li><p>Автор: <b><?=$tipobook->autor?></b>
	<br>Название: <b><?=$tipobook->name?></b> 
	<br>Год издания: <b><?=$tipobook->age?></b> 
	<br> Описание:  <br><b><?=$tipobook->text?></b>
	</p></li>
<?php } ?>
</ol>