<div class="prl-body-grid">
<?php
    foreach ($this->result as $element) {
        echo '<div class="prl-body-product-wrapper">
                    <input type="checkbox"  form="formDelete" class="delete-checkbox" name="delete-checkbox[]" value="'.$element["id"].'">
                    <div class="prl-body-product">
                        <p>'.$element["sku"].'</p>
                        <p>'.$element["name"].'</p>
                        <p>'.$element["price"].' $</p>';
            if ($element["type"]=="DVD"){
                        echo '<p>Size: '.$element["parameters"].' MB </p>';}
            if ($element["type"]=="Furniture"){
                echo '<p>Dimmension: '.$element["parameters"].' </p>';}
            if ($element["type"]=="Book"){
                echo '<p>Weight: '.$element["parameters"].' KG </p>';}
                    echo "</div>
            </div>";
    }
?>
</div>