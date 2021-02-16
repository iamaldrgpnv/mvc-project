<h2>Все книги</h2>
<?php foreach($books as $key => $value): ?>
	<div>
		<h1><?php echo $value['title']; ?></h1>
		<p><?php echo $value['page_count']; ?></p>
		<a href="/books/show/<?php echo $value['id']; ?>">Подробнее</a>
	</div>
<?php endforeach; ?>