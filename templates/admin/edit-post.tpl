{include file="partials/head.tpl"}

<div class="container py-5">
    <h2>Poszt szerkesztése</h2>

    <form action="/admin/edit-post/{$post.id}" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Cím</label>
            <input type="text" class="form-control" id="title" name="title" value="{$post.title}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Tartalom</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{$post.content}</textarea>
        </div>
        <div class="mb-3">
            <label for="publish_at" class="form-label">Publikálás dátuma</label>
            <input type="datetime-local" class="form-control" id="publish_at" name="publish_at" value="{$post.publish_at|date_format:'%Y-%m-%dT%H:%M'}">
        </div>
        <button type="submit" class="btn btn-primary">Poszt frissítése</button>
    </form>
</div>

{include file="partials/footer.tpl"}