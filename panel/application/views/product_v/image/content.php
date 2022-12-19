<div class="row">
    <div class="col-md-12">
            <div class="widget">
                <hr class="widget-separator">
                <div class="widget-body">
                    <form action="<?=base_url("product/image_upload")?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?=base_url("product/image_upload")?>'}">
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
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <tr>
                        <th>Id</th>
                        <th>Görsel</th>
                        <th>Görsel Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </tr>
                    <tr>
                        <td class="w-100 text-center">1</td>
                        <td class="w-100"><img src="https://picsum.photos/seed/picsum/300/200" alt="" class="img-responsive" style="width:40px"></td>
                        <td>Doğanın Gizemi</td>
                        <td class="w-100 text-center"> <input
                                    data_url="<?=base_url("product/isActiveSetter/");?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    data-size="small"
                               <?= (true)  ? "checked" : "";?>
                            /></td>
                        <td class="w-100 text-center">
                            <button type="button"
                                    data_url="<?=base_url("product/delete/");?>"
                                    class="btn btn-xs btn-danger btn-outline remove-btn btn-block">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                        </td>
                    </tr>
                </table>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->