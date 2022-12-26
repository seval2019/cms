<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Haber Listesi <a type="button" href="<?=base_url("news/new_form");?>" class="btn btn-xs btn-primary pull-right btn-outline"><i class="fa fa-plus-square"></i> Ekle</a></h4>

    </div>
    <div class="col-md-12">

        <div class="widget p-lg">
            <?php if(empty($items))
            {?>
                <div class="alert alert-info text-center">
                    <p>Aradığınız ürün bulunamamaktadır. Eklemek için lütfen <a href="<?=base_url("news/new_form");?>">tıklayınız</a></p>
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
                    <th>Haber Türü</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?=base_url("news/rankSetter")?>">
                <?php
                foreach ($items as $veriler)
                    {?>
                        <tr id="ord-<?=$veriler->id?>">
                            <td class="text-center"><i class="fa-solid fa-bars"></i></td>
                            <td class="text-center"><?= $veriler->id ?></td>
                            <td><?= $veriler->title ?></td>
                            <td><?= $veriler->url ?></td>
                            <td><?=$veriler->description?></td>
                            <td><?= $veriler->news_type?></td>
                            <td class="w-100">
                                <?php
                                if($veriler->news_type=="image"){?>

                                    <img src="<?=base_url("uploads/$viewFolder/$veriler->img_url"); ?>" alt="" class="img-rounded">

                                <?php } else if($veriler->news_type=="video"){?>

                                    <iframe
                                            width="110px"
                                            height="70px"
                                            src="<?php echo $veriler->video_url; ?>"
                                            frameborder="0"
                                            gesture="media"
                                            allow="encrypted-media"
                                            allowfullscreen>
                                    </iframe>

                                <?php } ?>
                            </td>
                            <td>
                                <input
                                        data-url="<?=base_url("news/isActiveSetter/$veriler->id");?>"
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
                                        data-url="<?=base_url("news/delete/$veriler->id");?>"
                                        class="btn btn-xs btn-danger btn-outline remove-btn">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                                <a type="button" href="<?=base_url("news/update_form/$veriler->id");?>" class="btn btn-xs btn-info btn-outline update-btn">
                                    <i class="fa fa-pencil-square-o"></i></a>
                        </tr>
                    <?php
                    }
                }?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->