<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <form>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <br>
            <textarea class="form-control" rows="5" id="comment" cols='50'></textarea>
            <script>
            CKEDITOR.replace('comment')
            </script>
        </div>

        <div class="form-group">
            <label for="comment">Comment 2:</label>
            <br>
            <textarea class="form-control" rows="5" id="comment_2" cols='50'></textarea>
            <script>
            CKEDITOR.replace('comment_2')
            </script>
        </div>
    </form>
</body>
</html>