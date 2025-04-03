{include file="partials/head.tpl"}

<div class="container py-5">
    <h2>Felhasználó szerkesztése</h2>

    <form action="/admin/edit-user/{$user.id}" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{$user.email}" required>
        </div>
        <button type="submit" class="btn btn-primary">Felhasználó frissítése</button>
    </form>
</div>

{include file="partials/footer.tpl"}