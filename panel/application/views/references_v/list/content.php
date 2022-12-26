<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Referanslar Listesi <a type="button" href="<?=base_url("references/new_form");?>" class="btn btn-xs btn-primary pull-right btn-outline"><i class="fa fa-plus-square"></i> Ekle</a></h4>

    </div>
    <div class="col-md-12">

        <div class="widget p-lg">
            <?php if(empty($items))
            {?>
                <div class="alert alert-info text-center">
                    <p>Aradığınız ürün bulunamamaktadır. Eklemek için lütfen <a href="<?=base_url("references/new_form");?>">tıklayınız</a></p>
                </div>
            <?php }
            else{ ?>
            <table class="table table-striped table-bordered content-container">
                <thead>
                    <th class="w-40"><i class="fa-solid fa-arrow-up-right-from-square"></i></th>
                    <th>#id</th>
                    <th>Başlık</th>
                    <th>Url</th>
                    <th>Açıklama</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?=base_url("references/rankSetter")?>">
                <?php
                foreach ($items as $item)
                    {?>
                        <tr id="ord-<?=$item->id?>">
                            <td class="text-center"><i class="fa-solid fa-bars"></i></td>
                            <td class="text-center"><?= $item->id ?></td>
                            <td><?= $item->title ?></td>
                            <td><?= $item->url ?></td>
                            <td><?=$item->description?></td>
                            <td class="w-100">
                                <img src="<?=base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-rounded">
                            </td>
                            <td>
                                <input
                                        data-url="<?=base_url("references/isActiveSetter/$item->id");?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        data-size="small"
                                        <?= ($item->isActive)  ? "checked" : "";?>
                                />
                            </td>
                            <td>
                                <button type="button"
                                        data-url="<?=base_url("references/delete/$item->id");?>"
                                        class="btn btn-xs btn-danger btn-outline remove-btn">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                                <a type="button" href="<?=base_url("references/update_form/$item->id");?>" class="btn btn-xs btn-info btn-outline update-btn">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                        </tr>
                    <?php
                    }
                }?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->