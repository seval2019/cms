    $(document).ready(function (){
        /*Sweeatalert2 Code*/
        $(".remove-btn").click(function(){
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
        /*Toggle Button Code*/
        $(".isActive").change(function(){
           var data=$(this).prop("checked");
            var data_url=$(this).attr("data_url");

            if(typeof data !== "undefined" && typeof data_url !== "undefined"){
               $.post(data_url ,{data : data},function(response){});

            }

        })

    });
