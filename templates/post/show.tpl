{include file="partials/head.tpl"}

<div class="container py-5">
    <h1 class="mb-4">{$post.title}</h1>
    <p class="text-muted">
        Szerző: {$post.author} – {$post.publish_at}
    </p>

    <div class="mb-5">
        <p>{$post.content}</p>
    </div>

    {if $isLoggedIn}
        <div class="mb-3">
            <a href="/admin/edit-post/{$post.id}" class="btn btn-primary">Szerkesztés</a>
            <a href="/admin/delete-post/{$post.id}" class="btn btn-danger" onclick="return confirm('Biztosan törölni akarod ezt a posztot?');">Törlés</a>
        </div>
    {/if}

    <a href="javascript:history.back()" class="btn btn-secondary">Vissza az előző oldalra</a>
</div>

{include file="partials/footer.tpl"}