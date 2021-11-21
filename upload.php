<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/uploadForm.css">


</head>

<body>
    <div class="container">

        <header>
            <nav>
                <ul>
                    <li>
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="./logout.php">Log out</a>
                    </li>

                </ul>
            </nav>
        </header>

        <div class="cover">
            <!-- <h1>Let's help each other.</h1> -->
            <form class="flex-form" method="post" action="uploadFile.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="subCode">Subject Code</label>
                    <input type="text" name='subCode' class="form-control" id="subCode" aria-describedby="subjectCode" placeholder="Enter Subject Code">
                </div>
                <div class="form-group">
                    <label for="sub">Subject</label>
                    <input type="text" name='sub' class="form-control" id="sub" aria-describedby="subject" placeholder="Enter Subject Name">
                </div>
                <div class="form-group">
                    <label for="chapName">Chapter</label>
                    <input type="text" name='chapter' class="form-control" id="chapName" aria-describedby="chapterName" placeholder="Enter Chapter Name">
                </div>
                <div class="form-group">
                    <label for="branch">Branch:</label>
                    <select name='branch' id="branch" class="form-select required" aria-label="Default select example">
                        <option selected>Select the branch:</option>
                        <option value="CS">CS</option>
                        <option value="EC">EC</option>
                        <option value="EE">EE</option>
                        <option value="MECH">MECH</option>
                        <option value="CIVIL">CIVIL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fileToUpload">Upload Notes</label>
                    <input type="file" class="form-control-file" id="fileToUpload" size='' name='fileToUpload'>
                    <input type="hidden" name='submitted' value='1' />
                </div>
                <button type="submit" name="send" class="btn btn-outline-light">Submit</button>
            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>