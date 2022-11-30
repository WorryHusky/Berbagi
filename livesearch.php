<!-- <?php 

include("config.php");
if(isset($_POST['input'])){
    
    $input = $_POST['input'];

    $query = "SELECT * FROM searchperson WHERE name LIKE '{$input}%'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){

        <table class="table table-bordered table striped mt-4">
           <thead>
        <tr>

           <th>id</th>
           <th>nama</th>
           <th>nis</th>
           <th>email</th>
           <th>jurusan</th>
        </tr>
         
        </thead>

        <tbody>
          <?php 

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nama = $row['nama'];
            $nis = $row['nis'];
            $email = $row['email'];
            $jurusan = $row['jurusan'];

            ?>

            <tr>
               <td><?php echo $id;?></td>
               <td><?php echo $nama;?></td>
               <td><?php echo $nis;?></td>
               <td><?php echo $email;?></td>
               <td><?php echo $jurusan;?></td>
            </tr>
            <?php
        }
        
        ?>
        
        </tbody>
           </table>

    }else{
        echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }
}

?> -->
