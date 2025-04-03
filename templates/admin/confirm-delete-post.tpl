{include file="partials/head.tpl"}

<div class="container py-5">
    <h2>Poszt törlése</h2>

    <p>Biztosan törölni szeretnéd a következő posztot?</p>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{$post.title}</h5>
            <p class="card-text">{$post.content}</p>
        </div>
    </div>

    <button id="confirmDeleteBtn" class="btn btn-danger">Törlés megerősítése</button>
    <a href="/admin/posts" class="btn btn-secondary">Mégse</a>
</div>

<div id="deletePopup" style="display:none; position: fixed; top: 20%; left: 50%; transform: translateX(-50%); padding: 20px; background: rgba(0,0,0,0.7); color: white; border-radius: 10px; width: 300px;">
    <h5>Biztosan törölni akarja ezt a posztot?</h5>
    <button id="deletePost" class="btn btn-danger">Igen, törlés</button>
    <button id="cancelDelete" class="btn btn-secondary">Mégse</button>
</div>

<script>
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const deletePopup = document.getElementById('deletePopup');
    const deletePostBtn = document.getElementById('deletePost');
    const cancelDeleteBtn = document.getElementById('cancelDelete');
    const postId = {$post.id};

    confirmDeleteBtn.addEventListener('click', function() {
        deletePopup.style.display = 'block';
    });

    deletePostBtn.addEventListener('click', function() {
        window.location.href = '/admin/delete-post/' + postId;
    });

    cancelDeleteBtn.addEventListener('click', function() {
        deletePopup.style.display = 'none';
    });
</script>

{include file="partials/footer.tpl"}