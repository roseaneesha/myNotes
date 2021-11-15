<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">


</head>

<body>
    <div class='container'>
        <form method="post" action="uploadFile.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="subCode">Subject Code</label>
                <input type="text" name='subCode' class="form-control" id="subCode" aria-describedby="subjectCode" placeholder="Enter Subject Code">
            </div>
            <div class="form-group">
                <label for="subName">Subject</label>
                <input type="text" name='sub' class="form-control" id="subName" aria-describedby="subjectName" placeholder="Enter Subject Name">
            </div>
            <div class="form-group">
                <label for="chapName">Chapter</label>
                <input type="text" name='chapter' class="form-control" id="chapName" aria-describedby="chapterName" placeholder="Enter Chapter Name">
            </div>
            <div class="form-group">
                <label for="fileToUpload">Upload Notes</label>
                <input type="file" class="form-control-file" id="fileToUpload" size='' name='fileToUpload'>
                <input type="hidden" name='submitted' value='1' />
            </div>
            <button type="submit" name="send" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>