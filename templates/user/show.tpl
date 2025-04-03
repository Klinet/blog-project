{include file="partials/head.tpl"}

<div class="container py-5">
	<h1 class="mb-4">Felhasználói profil: {$user.email}</h1>

	<p><strong>Regisztráció dátuma:</strong> {$user.created_at}</p>

	<h2 class="mt-4">Felhasználó posztjai</h2>
	{foreach from=$posts item=post}
	<div class="card mb-3">
		<div class="card-body">
			<h5 class="card-title">{$post.title}</h5>
			<p class="card-text">{$post.content|truncate:150}</p>
			<a href="/post/{$post.id}" class="btn btn-primary">Olvasd tovább</a>
		</div>
	</div>
	{/foreach}

	{if count($posts) == 0}
	<p>Ennek a felhasználónak nincsenek posztjai.</p>
	{/if}

	<a href="/admin/dashboard" class="btn btn-secondary mt-4">Vissza az admin dashboardra</a>
</div>

{include file="partials/footer.tpl"}