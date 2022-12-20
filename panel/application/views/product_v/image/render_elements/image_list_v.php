<?php if(empty($item_images))
{?>
    <div class="alert alert-info text-center">
        <p>Herhangi bir resim bulunamamaktadır.</a></p>
    </div>
<?php }
else{ ?>
    <table class="table table-bordered table-striped table-hover pictures_list">
        <thead>
        <tr>
            <th>Id</th>
            <th>Görsel</th>
            <th>Görsel Adı</th>
            <th>Durumu</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($item_images as $image){?>
            <tr>
                <td class="w-100 text-center">#<?=$image->id;?></td>
                <td class="w-100"><img src="<?=base_url("uploads/{$viewFolder}/$image->img_url");?>" alt="<?=$image->img_url?>" class="img-responsive" style="width:40px"></td>
                <td><?=$image->img_url;?></td>
                <td class="w-100 text-center"> <input
                        data_url="<?=base_url("product/isActiveSetter/");?>"
                        class="isActive"
                        type="checkbox"
                        data-switchery
                        data-color="#10c469"
                        data-size="small"
                        <?= ($image->id)  ? "checked" : "";?>
                    /></td>
                <td class="w-100 text-center">
                    <button type="button"
                            data_url="<?=base_url("product/delete/");?>"
                            class="btn btn-xs btn-danger btn-outline remove-btn btn-block">
                        <i class="fa fa-trash"></i> Sil
                    </button>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
<?php } ?>