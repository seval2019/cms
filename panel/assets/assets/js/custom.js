    $(document).ready(function (){
        $(".remove-btn").click(function(e){
            $data_url=$(this).data("url");
            //$data_url=$(this).attr("data_url"); şeklinde de url ataması yapılabilir.
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
                    window.location.href=$data_url;
                }
            })
        })


    });
