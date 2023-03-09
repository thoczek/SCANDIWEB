<?php   
    $elements=[["SKU_VAL1","ITEM_NAME","PRICE","PROPERTY"],
                ["SKU_VAL2","ITEM_NAME","PRICE","PROPERTY"],
                ["SKU_VAL3","ITEM_NAME","PRICE","PROPERTY"],
                ["SKU_VAL2","ITEM_NAME","PRICE","PROPERTY"],
                ["SKU_VAL4","ITEM_NAME","PRICE","PROPERTY"]];
    foreach ($elements as $element) {
        echo '<div class="prl-body-product-wrapper"> 
                    <input type="checkbox" class="delete-checkbox">
                    <div class="prl-body-product">
                        <p>'.$element[0].'</p>
                        <p>'.$element[1].'</p>
                        <p>'.$element[2].'</p>
                        <p>'.$element[3].'</p>
                    </div>
            </div>';
    }
?>