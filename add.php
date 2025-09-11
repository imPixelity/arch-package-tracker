<form action="process.php" method="post">
    <label>Package Name:
        <input type="text" name="package-name">
    </label>
    <br>
    <label>Category:
        <select name="category">
            <option value="foo">foo</option>
            <option value="bar">bar</option>
            <option value="baz" selected>baz</option>
        </select>
    </label>
    <br>
    <label>Source:
        <select name="source">
            <option value="foo">foo</option>
            <option value="bar">bar</option>
            <option value="baz" selected>baz</option>
        </select>
    </label>
    <br>
    <label>Notes:
        <input type="text" name="notes">
    </label>
    <br>
    <input type="submit" value="Submit">
</form>