<div class="prl-body-grid">
<?php   
    foreach ($this->result as $element) {
        echo '<div class="prl-body-product-wrapper"> 
                    <input type="checkbox" class="delete-checkbox">
                    <div class="prl-body-product">
                        <p>'.$element["sku"].'</p>
                        <p>'.$element["name"].'</p>
                        <p>'.$element["price"].' $</p>
                        <p>Size: '.$element["parameters"].' MB </p>
                    </div>
            </div>';
    }
?>
</div>