<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Haber Ekleme Sayfası</h4>
    </div>
    <div class="col-md-12">
            <div class="widget">
                <hr class="widget-separator">
                <div class="widget-body">
                    <form action="<?=base_url("news/save")?>" method="post">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" class="form-control" placeholder="Başlık" name="title">
                            <?php if(isset($form_error)){?>
                            <small class="pull-right input-form-error"><?= form_error("title");?></small>
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <textarea class="m-0" data-plugin="summernote" data-options="{height: 250}" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="control-demo-6">Haberin Türü</label>
                            <div id="control-demo-6">
                                <select class="form-control" name="news_type">
                                    <option value="image">Resim</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <label for="exampleInputFile">Görsel Seçiniz</label>
                            <input type="file" name="img_url"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Video URL</label>
                            <input type="text" class="form-control" placeholder="Video bağlantısını buraya ekleyiniz." name="video_url">
                            <?php if(isset($form_error)){?>
                                <small class="pull-right input-form-error"><?= form_error("video_url");?></small>
                            <?php }?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-outline btn-sm"> <i class="fa fa-save"></i> Kaydet</button>
                        <a href="<?=base_url("news");?>" type="submit" class="btn btn-danger btn-outline btn-sm "><i class="fa fa-ban"></i> İptal</a>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->