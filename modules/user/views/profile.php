<div class="container">
    <h2 class="mb-4">用户资料</h2>
    <form action="/modules/user/actions.php?action=updateProfile" method="post">
        <!-- 其他信息如用户名，可以作为只读字段显示 -->
        <div class="mb-3">
            <label for="password" class="form-label">新密码 (如果要更改)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">电子邮件</label>
            <input type="email" class="form-control" id="email" name="email" required value="用户当前的电子邮件">
        </div>
        <button type="submit" class="btn btn-primary">更新资料</button>
    </form>
</div>
