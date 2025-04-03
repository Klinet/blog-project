{include file="partials/head.tpl"}

<h2>Új felhasználó hozzáadása</h2>

<form action="/admin/create-user" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Jelszó</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Létrehozás</button>
</form>

{include file="partials/footer.tpl"}