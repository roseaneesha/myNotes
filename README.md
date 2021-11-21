# myNotes
A Notes uploading web app


  <td scope="row"><?= $row["date"] ?></td>
                    <td scope="row"><?= $row["subCode"] ?></td>
                    <td scope="row"><?= $row["subject"] ?></td>
                    <td scope="row"><?= $row["chapter"] ?></td>
                    <td scope="row">
                        <a target="_blank" href="./<?= $row["filePath"] ?>">
                            <i class="fas fa-book-open"></i>

                        </a>
                    </th>
                    <!-- Delete the file -->
                    <th scope="row"> 
    
                    <td><a href="deleteFile.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash" style="user-select: auto;"></i></a></td>
            
                    </th>