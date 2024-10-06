<?php include_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Work 02</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/1431b616a6.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<div class="desc">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ipsa id eligendi fuga similique blanditiis laudantium, debitis enim reprehenderit ratione voluptatem. Quae praesentium, tempore quidem possimus architecto ipsam reprehenderit! Facere earum mollitia laboriosam nam dignissimos, optio dolores laudantium incidunt, suscipit vitae nostrum error. Consectetur sequi natus esse tempore repellendus ad. Iste dolorem delectus eum? Velit, provident aliquam laudantium ullam quisquam assumenda nam eaque iusto a. Nam, aut. Dolorem est cum molestiae, accusantium consequatur rem molestias nam hic blanditiis incidunt ducimus eum tenetur ab voluptate aspernatur, autem unde illum, quidem numquam at! Cum obcaecati dolorum omnis aliquam, ea corporis nisi maxime.
	</div>
	<header>
		<h1 class="title">los mejores padres</h1>
		<nav class="actions">
			<div id="add-btn" class="active-btn">
				<i class="fa-solid fa-user-plus"></i>
			</div>
			<div id="delete-btn">
				<i class="fa-solid fa-user-xmark"></i>
			</div>
		</nav>
	</header>
	<main>
		<table>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>genero</th>
			</tr>
			<?php
			$query = 'SELECT * FROM parent';
			$result = $connect -> query($query);

			while($row = $result -> fetch_assoc()) {
				$genre = 'fa-solid fa-venus';

				if($row['genre'] === 'm') {
					$genre = 'fa-solid fa-mars';
				}

				echo "
			<tr class=\"row\">
				<input type=\"hidden\" value=\"$row[id]\" disabled>
				<td>$row[id]</td>
				<td>$row[name]</td>
				<td>$row[lastname]</td>
				<td>
					<i class=\"$genre\"></i>
				</td>
			</tr>
				";
			}
			?>
		</table>
	</main>
	<script src="main.js"></script>
</body>
</html>