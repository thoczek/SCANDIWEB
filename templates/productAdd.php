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
            <form id="product_form" method="post"></form>
                <div class="sku-wrapper, form-inputs">
                    <label for="sku" class="form-label">SKU</label><input type="text" name="form_sku" id="sku" class="form-input">
                </div>
                <div class="name-wrapper, form-inputs">
                    <label for="name" class="form-label">Name</label><input type="text" name="form_name" id="name" class="form-input">
                </div>
                <div class="price-wrapper, form-inputs">
                    <label for="price" class="form-label">Price(&dollar;)</label><input type="text" name="form_price" id="price" class="form-input">
                </div>
                <div class="type-switcher-wrapper, form-inputs">
                    <label for="productType" class="form-label">Type Switcher</label>
                    <select name="form_product_type" id="productType" class="form-input">
                        <option id="DVD" selected="selected">DVD</option>
                        <option id="Furniture">Furniture</option>
                        <option id="Book">Book</option>
                    </select>
                </div>
                <div class="ajax-form">
                    <!-- Ajax loaded form goes here -->
                </div>   
            </form> 
        </div>
        <div class="footer-wrapper">
        Scandiweb Test assignment 
        </div>
    </div>
</div>
