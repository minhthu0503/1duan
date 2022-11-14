<table>
    <thead>
        <th>stt</th>
        <th>ten</th>
        <th>so dien thoai</th>
        <th>mat khau</th>
    </thead>
    <?php
    $stt = 1;
     foreach($data as $value){ 
        ?>
    <tbody>
        <td> <?php echo $stt++ ?> </td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['phone'] ?></td>
        <td><?php echo $value['password'] ?></td>
    </tbody>
    <?php } ?>
</table>