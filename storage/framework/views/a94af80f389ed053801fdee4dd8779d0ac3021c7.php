
        <h1>Danh Sach Sinh Vien</h1>
        <br>
        <a href ="/UserView">Themsv</a>
        <br>
        <table border='1' width=50%>
            <tr>
                <td>HoTen</td>
                <td>Mssv</td>
                <td>Lop</td>
                <td>tool</td>
            </tr>
            <?php foreach($news as $object){?>
            <tr>
                <td><?php echo $object['HoTen'];?></td>
                <td><?php echo $object['Mssv'];?></td>
                <td><?php echo $object['Lop'];?></td>
                <td><a href = "/UserView/Update/<?php echo e($object->id); ?>">edit</a> | <a href = "/UserView/Delete/<?php echo e($object->id); ?>">delete</a></td>
            </tr>
            <?php }?>
        </table>
        <?php echo e($news->render()); ?>



<?php /**PATH C:\xampp\htdocs\chan-network\resources\views/AdminView.blade.php ENDPATH**/ ?>