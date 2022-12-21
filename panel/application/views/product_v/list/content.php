<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Ürünler Listesi <a type="button" href="<?=base_url("product/new_form");?>" class="btn btn-xs btn-primary pull-right btn-outline"><i class="fa fa-plus-square"></i> Ekle</a></h4>

    </div>
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php if(empty($items))
            {?>
                <div class="alert alert-info text-center">
                    <p>Aradığınız ürün bulunamamaktadır. Eklemek için lütfen <a href="<?=base_url("product/new_form");?>">tıklayınız</a></p>
                </div>
            <?php }
            else{ ?>

            <table class="table table-striped content-container">
                <thead>
                    <th><i class="fa fa-reorder"></i></th>
                    <th>#id</th>
                    <th>Başlık</th>
                    <th>Url</th>
                    <th>Açıklama</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?=base_url("product/rankSetter")?>">
                <?php
                foreach ($items as $veriler)
                    {?>
                        <tr id="ord-<?=$veriler->id?>">
                            <td><i class="fa fa-reorder"></i></td>
                            <td><?= $veriler->id ?></td>
                            <td><?= $veriler->title ?></td>
                            <td><?= $veriler->url ?></td>
                            <td><?=$veriler->description?></td>
                            <td>
                                <input
                                        data-url="<?=base_url("product/isActiveSetter/$veriler->id");?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        data-size="small"
                                        <?= ($veriler->isActive)  ? "checked" : "";?>
                                />
                            </td>
                            <td>
                                <button type="button"
                                        data_url="<?=base_url("product/delete/$veriler->id");?>"
                                        class="btn btn-xs btn-danger btn-outline remove-btn">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a type="button" href="<?=base_url("product/update_form/$veriler->id");?>" class="btn btn-xs btn-info btn-outline">
                                    <i class="fa fa-pencil-square-o"></i></a>
                                <a type="button" href="<?=base_url("product/image_form/$veriler->id");?>" class="btn btn-xs btn-success btn-outline">
                                    <i class="fa fa-image"></i></a>
                        </tr>
                    <?php
                    }
                }?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->