<div class="row">
    <div class="col-md-12">
            <div class="widget">
                <hr class="widget-separator">
                <div class="widget-body ">
                    <form data-url="<?=base_url("product/refresh_image_list/$item->id")?>" action="<?=base_url("product/image_upload/$item->id")?>" id="dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?=base_url("product/image_upload/$item->id")?>'}">
                        <div class="dz-message">
                            <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buraya sürükleyiniz.</h3>
                            <p class="m-b-lg text-muted">(Yüklemek için resimleri sürükleyebilir yada buraya tıklayabilirsiniz...)</p>
                        </div>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?= $item->title;?></b> kaydına ait Resimler
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <hr class="widget-separator">
            <div class="widget-body image_list_container">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/render_elements/image_list_v"); ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->