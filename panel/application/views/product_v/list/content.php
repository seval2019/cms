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

            <table class="table table-striped">
                <thead>
                    <th>#id</th>
                    <th>Url</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                <?php
                foreach ($items as $veriler)
                    {?>
                        <tr>
                            <td><?= $veriler->id ?></td>
                            <td><?= $veriler->url ?></td>
                            <td><?= $veriler->title ?></td>
                            <td><?=$veriler->description?></td>
                            <td>
                                <input
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        data-size="small"
                                        <?= ($veriler->isActive)  ? "checked" : "";?>
                                />
                            </td>
                            <td>
                                <a type="button" href="#" class="btn btn-xs btn-danger btn-outline m-b-xs"><i class="fa fa-trash"></i> Sil</a>
                                <a type="button" href="<?=base_url("product/update_form/$veriler->id");?>" class="btn btn-xs btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                        </tr>
                    <?php
                    }
                }?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->