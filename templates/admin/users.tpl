{include file="partials/head.tpl"}

<div class="container mt-5">
    <h2>Felhasználók kezelése</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Regisztráció dátuma</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$users item=user}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.email}</td>
                <td>{$user.created_at}</td>
                <td>
                    <a href="/admin/users/{$user.id}/edit" class="btn btn-warning btn-sm">Szerkesztés</a>
                    <a href="/admin/users/{$user.id}/delete" class="btn btn-danger btn-sm">Törlés</a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
{include file="partials/footer.tpl"}