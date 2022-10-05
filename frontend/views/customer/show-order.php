<div class="show-order">
    <h3>Nama Customer: <?= $customer->nama; ?></h3>
    <h4>Daftar order dari customer ini: </h4>
    <?php 
        echo '<br>';
        foreach($customer->order as $order){
            echo 'Order Id: '.$order->id;
            echo '<ul>';
            foreach($order->items as $item){
                echo '<li>'.$item->name.'</li>';
            }
            echo '</ul>';
            echo '<br>';
        }
        
    ?>
</div>