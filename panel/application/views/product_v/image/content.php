<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Ürün Fotoğraf Ekleme Sayfası</h4>
    </div>
    <div class="col-md-12">
            <div class="widget">
                <hr class="widget-separator">
                <div class="widget-body">
                    <form action="../api/dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '../api/dropzone'}">
                        <div class="dz-message">
                            <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                            <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                        </div>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Ürün Fotoğraf Ekleme Sayfası</h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <hr class="widget-separator">
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Resim</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="https://picsum.photos/seed/picsum/300/200" alt="" class="img-responsive" style="width:40px"></td>
                        <td> <input
                                    data_url="<?=base_url("product/isActiveSetter/");?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    data-size="small"
                               <?= (true)  ? "checked" : "";?>
                            /></td>
                        <td>
                            <button type="button"
                                    data_url="<?=base_url("product/delete/");?>"
                                    class="btn btn-xs btn-danger btn-outline remove-btn">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="https://picsum.photos/seed/picsum/300/200" alt="" class="img-responsive" style="width:40px"></td>
                        <td> <input
                                    data_url="<?=base_url("product/isActiveSetter/");?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    data-size="small"
                                <?= (true)  ? "checked" : "";?>
                            /></td>
                        <td>
                            <button type="button"
                                    data_url="<?=base_url("product/delete/");?>"
                                    class="btn btn-xs btn-danger btn-outline remove-btn">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                        </td>
                    </tr>
                </table>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->