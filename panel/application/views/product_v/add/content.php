<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Ürün Ekleme Sayfası</h4>
    </div>
    <div class="col-md-12">
            <div class="widget">
                <hr class="widget-separator">
                <div class="widget-body">
                    <form action="<?=base_url("product/save")?>" method="post">
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
                        <button type="submit" class="btn btn-primary btn-outline btn-md"> <i class="fa fa-save"></i> Kaydet</button>
                        <a href="<?=base_url("product");?>" type="submit" class="btn btn-danger btn-outline btn-md "><i class="fa fa-ban"></i> İptal</a>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->