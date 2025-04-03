{include file="partials/head.tpl"}

<div class="container py-5">
    <h1 class="mb-3">{$post->title}</h1>
    <p class="text-muted">
        Írta: {$post->author} – {$post->publish_at}
    </p>

    <div class="mb-5">
        <p>{$post->content}</p>
    </div>

    <a href="javascript:history.back()" class="btn btn-secondary">Vissza az előző oldalra</a>
</div>

{include file="partials/footer.tpl"}