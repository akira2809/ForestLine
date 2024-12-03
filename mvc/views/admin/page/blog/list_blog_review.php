<style>
    .st {
        padding-left:30px ;
    }

</style>
<div class="container-fluid">

<!-- dtb cmt user -->
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class=" bg-primary text-white ">
                <th>STT</th>
                <th>Tên người dùng</th>
                <th>Nội dung</th>               
                <th>Ngày tạo</th>     
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($blog_review as $key => $value):  
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start"><?= $value['user_name'] ?></td>
                    <td><?= $value['content'] ?></td>                   
                    <td><?= $value['date'] ?></td>                                        
                    
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>

