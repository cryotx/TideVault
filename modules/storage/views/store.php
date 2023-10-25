<div class="container">
    <h2 class="mb-4">存储密码</h2>
    <form action="/modules/storage/actions.php?action=store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">标题或描述</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">密码</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">保存密码</button>
    </form>
</div>
