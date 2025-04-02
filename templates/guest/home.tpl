{include file="partials/head.tpl"}

<div class="container py-5">
    <h1 class="mb-4">Legfrissebb blogbejegyzések</h1>
    {*{foreach from=$posts item=post}
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{$post.title}</h5>
                <p class="card-text">{$post.content|truncate:150}</p>
                <p class="card-text">
                    <small class="text-muted">
                        Írta: {$post.author} – {$post.publish_at}
                    </small>
                </p>
                <a href="/post/{$post.id}" class="btn btn-primary">Olvasd tovább</a>
            </div>
        </div>
    {/foreach}*}
</div>

{include file="partials/footer.tpl"}