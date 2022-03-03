<?php 
include_once("./header.php");
    $selectStudents = $conn->query("SELECT * FROM `students`");
    
    $pageUrl = $_SERVER['PHP_SELF'];
    if(!isset($_GET['page'])){
        header("location: $pageUrl?page=1");
    }

    $totalStudent = $selectStudents->num_rows;
    $pageNo = $_GET['page'];
    $studentPerPage = 5;
    $totalPage = ceil($totalStudent / $studentPerPage);
    $startPoint = ($pageNo - 1) * $studentPerPage;

    $selectStudentsPerPage = $conn->query("SELECT * FROM `students` LIMIT $startPoint, $studentPerPage");
?>
    <div class="container">
        <?php if($selectStudentsPerPage->num_rows >0 ){ ?>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>Religion</th>
                    <th>Registration Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = $selectStudentsPerPage->fetch_object()){ ?>
                    <tr>
                        <td><?= $data->name ?></td>
                        <td><?= $data->gender ?></td>
                        <td><?= $data->city ?></td>
                        <td><?= $data->mobile ?></td>
                        <td><?= $data->religion ?></td>
                        <td><?= date("M-d-Y", strtotime($data->created_at) );  ?></td>
                        <td>
                            <a href="./editstudent.php?id=<?= $data->id ?>"><button>Edit</button></a>
                            <a href="./delete.php?delid=<?= $data->id ?>" onclick="return confirm('do you really want to delete the field?')"><button>Delete</button></a>
                        </td>
                    </tr> 
                <?php } ?>
            </tbody>
        </table>
        <?php 
            for ($i=1; $i <= $totalPage; $i++) { 
        ?>
        <a href="<?= $pageUrl."?page=".$i ?>" class="paginateBtn"><button><?= $i; ?></button></a>
        <?php
            }
        ?>
        <?php }else{ ?>
            <h2>No Student Data Found</h2>
        <?php } ?>
    </div>
<?php include_once("./footer.php") ?>