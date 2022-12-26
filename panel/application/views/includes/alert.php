<?php

$alert=$this->session->userdata('alert');

if($alert){

    if($alert["type"]==="success"){?>
        <script>
                iziToast.success({
                    title: '<?=$alert['title']?>',
                    message: '<?=$alert['text']?>',
                    position: 'topRight'
                })
        </script>

    <?php }else{ ?>

        <script>
            iziToast.error({
                title: '<?=$alert['title']?>',
                message: '<?=$alert['text']?>',
                position: 'topRight'
            })
        </script>

    <?php }
}?>