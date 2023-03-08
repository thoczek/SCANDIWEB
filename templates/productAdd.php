<!DOCTYPE html>
<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="header-wrapper">
            <div class="header-title"><h1>Product Add</h1></div>
            <div class="button-wrapper">
                <div class="button-container">
                <form action="/" method="post"> 
                    <input type="submit" value="SAVE" id="delete-product-btn" class="header-button">
                </form>
                <a href="/" class="header-button">CANCEL</a>
                </div>
            </div>
        </div>
        <div class="body-wrapper">
            <div class="body-grid">
                <?php   
                $elements=[["SKU_VAL1","ITEM_NAME","PRICE","PROPERTY"],
                            ["SKU_VAL2","ITEM_NAME","PRICE","PROPERTY"],
                            ["SKU_VAL3","ITEM_NAME","PRICE","PROPERTY"],
                            ["SKU_VAL2","ITEM_NAME","PRICE","PROPERTY"],
                            ["SKU_VAL4","ITEM_NAME","PRICE","PROPERTY"]];
                foreach ($elements as $element) {
                    echo '<div class="body-product-wrapper"> 
                                <input type="checkbox" class="delete-checkbox">
                                <div class="body-product">
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
