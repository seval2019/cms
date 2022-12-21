    $(document).ready(function (){

        /*Sortable Code*/
        $(".sortable").sortable();

        /*Sweeatalert2 Code*/
        $(".content-container, .image_list_container").on("click",".remove-btn",function(){
           var data_url=$(this).attr("data_url");
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Bu işlemi geri alamayacaksınız!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!',
                cancelButtonText: 'Hayır'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href=data_url;
                }
            })
        })

        /*Durum Toggle Button Code*/
        $(".content-container, .image_list_container").on('change','.isActive',function(){
           var $data=$(this).prop("checked");
            var $data_url=$(this).data("url");

            if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
               $.post($data_url ,{data : $data},function(response){

               });

            }

        });

        /*Kapak Toggle Button Code*/
        $(".image_list_container").on('change', '.isCover', function(){

            var $data = $(this).prop("checked");
            var $data_url = $(this).data("url");

            if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){

                $.post($data_url, { data : $data}, function (response) {

                    $(".image_list_container").html(response);

                    $('[data-switchery]').each(function () {
                        var $this = $(this),
                            color = $this.attr('data-color') || '#188ae2',
                            jackColor = $this.attr('data-jackColor') || '#ffffff',
                            size = $this.attr('data-size') || 'default'

                        new Switchery(this, {
                            color: color,
                            size: size,
                            jackColor: jackColor
                        });
                    });
                    $(".sortable").sortable();
                });
            }
        });

        /*Sortable add db*/
        $(".content-container, .image_list_container").on("sortupdate",'.sortable',function (event,ui){
           var  $data=$(this).sortable("serialize"); //Serialize :Burada oluşturulan değişkenin verisini url olarak alır.
           var  $data_url=$(this).data("url");
           $.post($data_url ,{data : $data},function(response){}); //alert(response);//urlden gelen cevapları karşılayacak
        })

        /*Dropzone ayarları*/
        var uploadSection=Dropzone.forElement("#dropzone");
        uploadSection.on("complete",function (file){
            //console.log(file);
            var $data_url=$("#dropzone").data("url");

            $.post($data_url,{},function (response){
                //alert(response);

               $(".image_list_container").html(response);

                $('[data-switchery]').each(function(){
                    var $this = $(this),
                        color = $this.attr('data-color') || '#188ae2',
                        jackColor = $this.attr('data-jackColor') || '#ffffff',
                        size = $this.attr('data-size') || 'default'

                    new Switchery(this, {
                        color: color,
                        size: size,
                        jackColor: jackColor
                    });
                });
                $(".sortable").sortable();
             })
         })
    });