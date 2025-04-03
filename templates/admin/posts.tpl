{include file="partials/head.tpl"}

{include file="partials/head.tpl"}

<div class="container mt-5">
<h2>Blog posztok kezelése</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cím</th>
            <th>Tartalom</th>
            <th>Publikálás</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$posts item=post}
            <tr>
                <td>{$post.id}</td>
                <td>{$post.title}</td>
                <td>{$post.content|truncate:150}</td>
                <td>{$post.publish_at}</td>
                <td>
                    <a href="/admin/edit-post/{$post.id}" class="btn btn-primary">Szerkesztés</a>
                    <a href="/admin/delete-post/{$post.id}" class="btn btn-danger">Törlés</a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
{include file="partials/footer.tpl"}