<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("courses/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title" value="<?=$item->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <label for="datetimepicker1">Eğitim Tarihi</label>
                        <input type="hidden" name="event_date" id="datetimepicker1" data-plugin="datetimepicker" data-options="{ inline: true, viewMode: 'days',format:'YYYY-MM-DD HH:mm:ss' }" value="<?=$item->event_date?>"></input>
                    </div><!-- END column -->
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Açıklama</label>
                            <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"><?php echo $item->description; ?></textarea>
                        </div>
                    </div>

                    <?php if(isset($form_error)){ ?>

                        <div class="row">

                            <div class="col-md-1 image_upload_container">
                                <img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-responsive">
                            </div>

                            <div class="form-group image_upload_container">
                                <label>Görsel Seçiniz</label>
                                <input type="file" name="img_url" class="form-control">
                            </div>


                        </div>


                    <?php } else { ?>

                        <div class="row">

                            <div class="col-md-1 image_upload_container">
                                <img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-responsive">
                            </div>

                            <div class="col-md-9 form-group image_upload_container">
                                <label>Görsel Seçiniz</label>
                                <input type="file" name="img_url" class="form-control">
                            </div>

                        </div>

                    <?php } ?>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("courses"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>