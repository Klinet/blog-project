{include file="partials/head.tpl"}

<div class="container py-5">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>Legújabb posztok</h2>
            {foreach from=$posts item=post}
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{$post.title}</h5>
                        <p class="card-text">{$post.content|truncate:150}</p>
                        <a href="/post/{$post.id}" class="btn btn-primary">Elemenként megnéz</a>
                    </div>
                </div>
            {/foreach}
            <a href="/admin/posts" class="btn btn-secondary">Teljes lista</a>
        </div>

        <div class="col-md-6">
            <h2>Legújabb felhasználók</h2>
            {foreach from=$users item=user}
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{$user.email}</h5>
                        <p class="card-text">Regisztráció dátuma: {$user.created_at}</p>
                        <a href="/admin/users/{$user.id}" class="btn btn-primary">Elemenként megnéz</a>
                    </div>
                </div>
            {/foreach}
            <a href="/admin/users" class="btn btn-secondary">Teljes lista</a>
        </div>
    </div>

    <a href="/logout" class="btn btn-danger mt-4">Kijelentkezés</a>
</div>

{include file="partials/footer.tpl"}