{include file="partials/head.tpl"}

<div class="container py-5">
    <h1 class="mb-4">Legfrissebb posztok ({count($posts)})</h1>

    {if isset($flashMessage)}
        <div class="alert alert-warning" role="alert">
            {$flashMessage}
        </div>
    {/if}

    {if $isLoggedIn}
        <p>Üdvözöljük, {$userEmail}!</p>
        <a href="/admin/dashboard" class="btn btn-primary">Admin Felület</a>
    {else}
        <button id="loginBtn" class="btn btn-success mb-4">Bejelentkezés</button>
    {/if}

    <div id="loginForm" style="display: none;">
        <div class="container py-5">
            <h2>Bejelentkezés</h2>
            <form action="/login" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Bejelentkezés</button>
            </form>
        </div>
    </div>

    {foreach from=$posts item=post}
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{$post->title}</h5>
                <p class="card-text">{$post->content|truncate:150}</p>
                <p class="card-text">
                    <small class="text-muted">Szerző: {$post->author} – {$post->publish_at}</small>
                </p>
                <a href="/post/{$post->id}" class="btn btn-primary">Olvasd tovább</a>
            </div>
        </div>
    {/foreach}

    {if count($posts) == 0}
        <p>Nincsenek még publikált posztok.</p>
    {/if}
</div>

{include file="partials/footer.tpl"}

<script>
    document.getElementById('loginBtn').addEventListener('click', function() {
        var loginForm = document.getElementById('loginForm');
        if (loginForm.style.display === "none" || loginForm.style.display === "") {
            loginForm.style.display = "block";
        } else {
            loginForm.style.display = "none";
        }
    });
</script>