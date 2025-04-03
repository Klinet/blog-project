{include file="partials/head.tpl"}

<div class="container py-5">
	<h2>Új poszt hozzáadása</h2>

	<form action="/admin/create-post" method="POST">
		<div class="mb-3">
			<label for="title" class="form-label">Cím</label>
			<input type="text" class="form-control" id="title" name="title" required>
		</div>
		<div class="mb-3">
			<label for="content" class="form-label">Tartalom</label>
			<textarea class="form-control" id="content" name="content" rows="5" required></textarea>
		</div>
		<div class="mb-3">
			<label for="publish_at" class="form-label">Publikálás dátuma</label>
			<input type="datetime-local" class="form-control" id="publish_at" name="publish_at">
		</div>
		<button type="submit" class="btn btn-primary">Poszt létrehozása</button>
	</form>
</div>

{include file="partials/footer.tpl"}