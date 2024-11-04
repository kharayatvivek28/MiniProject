<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
   <link rel="stylesheet" href="CSS/book_add.css">
   <link rel="icon" type="image/x-icon" href="Image/logo_icon.jpeg">
</head>
<body>

<div class="form-container">
    <h2>Add New Book</h2>
    <form action="book_conn.php" method="post" id="bookForm">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" id="edition" name="edition" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" required>
                <option value="">Select Type</option>
                <option value="new">New</option>
                <option value="used">Used</option>
                <option value="e-book"> E-book </option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div class="form-group">
            <label for="binding_type">Binding Type</label>
            <select id="binding_type" name="binding_type" required>
                <option value="">Select Binding Type</option>
                <option value="hardcover">Hardcover</option>
                <option value="paperback">Paperback</option>
                <option value="ebook">E-book</option>
            </select>
        </div>
        <div class="form-group">
            <label for="buying_price">Buying Price</label>
            <input type="number" id="buying_price" name="buying_price" required min="0" step="0.01">
        </div>
        <div class="form-actions">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>
<!-- <script src="form_validation.js"></script> -->

</body>
</html>
