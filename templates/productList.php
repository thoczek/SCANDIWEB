<!DOCTYPE html>
<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="header-wrapper">
            <div class="header-title"><h1>Product List</h1></div>
            <div class="button-wrapper">
                <div class="button-container">
                <a href="/addproducts/" class="header-button">ADD</a>
                <form action="/" method="post"> 
                    <input type="submit" value="MASS DELETE" id="delete-product-btn" class="header-button">
                </form>
                </div>
            </div>
        </div>
        <div class="body-wrapper">
            <div class="prl-body-grid">
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
            </div>
        </div>
        <div class="footer-wrapper">
        Scandiweb Test assignment 
        </div>
    </div>
</div>
