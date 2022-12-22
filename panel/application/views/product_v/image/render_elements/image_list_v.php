<?php if(empty($item_images)) {?>
    <div class="alert alert-info text-center">
        <p>Herhangi bir resim bulunamamaktadır.</a></p>
    </div>
<?php } else{ ?>
    <table class="table table-bordered table-striped table-hover pictures_list">
        <thead>
            <tr>
                <th class="w-40"><i class="fa-solid fa-arrow-up-right-from-square"></i></th>
                <th>Id</th>
                <th>Görsel</th>
                <th>Görsel Adı</th>
                <th>Durumu</th>
                <th>Kapak</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody class="sortable" data-url="<?=base_url("product/imageRankSetter")?>">
        <?php foreach($item_images as $image){?>
            <tr id="ord-<?=$image->id?>">
                <td class="text-center"><i class="fa-solid fa-bars"></i></td>
                <td class="w-100 text-center">#<?=$image->id;?></td>
                <td class="w-100">
                    <img src="<?=base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?= $image->img_url; ?>" class="img-responsive" style="width:40px">
                </td>
                <td><?=$image->img_url;?></td>
                <td class="w-100 text-center">
                    <input
                        data-url="<?=base_url("product/imageIsActiveSetter/$image->id");?>"
                        class="isActive"
                        type="checkbox"
                        data-switchery
                        data-color="#10c469"
                        data-size="small"
                        <?= ($image->isActive)  ? "checked" : "";?>
                    />
                </td>
                <td class="w-100 text-center">
                    <input
                            data-url="<?= base_url("product/isCoverSetter/$image->id/$image->product_id"); ?>"
                            class="isCover"
                            type="checkbox"
                            data-switchery
                            data-color="#35b8e0"
                            data-size="small"
                        <?= ($image->isCover)  ? "checked" : "";?>
                    />
                </td>
                <td class="w-100 text-center">
                    <button
                            data_url="<?=base_url("product/imageDelete/$image->id/$image->product_id");?>"
                            class="btn btn-xs btn-danger btn-outline remove-btn btn-block">
                        <i class="fa-regular fa-trash-can"></i> Sil
                    </button>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
<?php } ?>