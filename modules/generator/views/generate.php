<div class="container">
    <h2 class="mb-4">密码生成器</h2>
    <form action="/modules/generator/actions.php?action=generate" method="post">
        <div class="mb-3">
            <label for="length" class="form-label">密码长度</label>
            <input type="number" class="form-control" id="length" name="length" value="12" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="includeNumbers" name="includeNumbers" checked>
            <label class="form-check-label" for="includeNumbers">包含数字</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="includeUppercase" name="includeUppercase" checked>
            <label class="form-check-label" for="includeUppercase">包含大写字母</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="includeLowercase" name="includeLowercase" checked>
            <label class="form-check-label" for="includeLowercase">包含小写字母</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="includeSymbols" name="includeSymbols" checked>
            <label class="form-check-label" for="includeSymbols">包含特殊字符</label>
        </div>
        <button type="submit" class="btn btn-primary">生成密码</button>
    </form>
</div>
