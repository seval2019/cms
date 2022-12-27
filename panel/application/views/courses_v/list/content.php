<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Eğitim Listesi <a type="button" href="<?=base_url("courses/new_form");?>" class="btn btn-xs btn-primary pull-right btn-outline"><i class="fa fa-plus-square"></i> Ekle</a></h4>

    </div>
    <div class="col-md-12">

        <div class="widget p-lg">
            <?php if(empty($items))
            {?>
                <div class="alert alert-info text-center">
                    <p>Aradığınız ürün bulunamamaktadır. Eklemek için lütfen <a href="<?=base_url("courses/new_form");?>">tıklayınız</a></p>
                </div>
            <?php }
            else{ ?>
            <table class="table table-striped table-bordered content-container">
                <thead>
                    <th class="w-40"><i class="fa-solid fa-arrow-up-right-from-square"></i></th>
                    <th>#id</th>
                    <th>Başlık</th>
                    <th>Tarih</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?=base_url("courses/rankSetter")?>">
                <?php
                foreach ($items as $item)
                    {?>
                        <tr id="ord-<?=$item->id?>">
                            <td class="text-center"><i class="fa-solid fa-bars"></i></td>
                            <td class="text-center w-100"><?= $item->id ?></td>
                            <td><?= $item->title ?></td>
                            <td class="text-center w-100"><?=get_readable_date($item->event_date)?></td>
                            <td class="w-100">
                                <img src="<?=base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-rounded">
                            </td>
                            <td class="w-100">
                                <input
                                        data-url="<?=base_url("courses/isActiveSetter/$item->id");?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        data-size="small"
                                        <?= ($item->isActive)  ? "checked" : "";?>
                                />
                            </td>
                            <td class="w-100">
                                <button type="button"
                                        data-url="<?=base_url("courses/delete/$item->id");?>"
                                        class="btn btn-xs btn-danger btn-outline remove-btn">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                                <a type="button" href="<?=base_url("courses/update_form/$item->id");?>" class="btn btn-xs btn-info btn-outline update-btn">
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