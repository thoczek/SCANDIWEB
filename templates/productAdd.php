<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="header-wrapper">
            <div class="header-title"><h1>Product Add</h1></div>
            <div class="button-wrapper">
                <div class="button-container">
                    <input type="submit" value="Save" id="save-button" class="header-button" form="product_form" >
                <a href="/" class="header-button">Cancel</a>
                </div>
            </div>
        </div>
        <div class="body-wrapper">
            <form id="product_form" method="post" action="add/">
                <div class="sku-wrapper, form-inputs"><span></span><span id="info-message"> <!--SKU message goes here--></span></div>
                <div class="sku-wrapper, form-inputs">
                    <label for="sku" class="form-label">SKU</label><input type="text" name="form_sku" id="sku" class="form-input"  placeholder="Unique id code" required>
                </div>
                <div class="name-wrapper, form-inputs">
                    <label for="name" class="form-label">Name</label><input type="text" name="form_name" id="name" class="form-input" placeholder="Product name" required>
                </div>
                <div class="price-wrapper, form-inputs">
                    <label for="price" class="form-label">Price(&dollar;)</label><input type="number" name="form_price" id="price" class="form-input"
                        min="0" placeholder="Price" required>
                </div>
                <div class="type-switcher-wrapper, form-inputs">
                    <label for="productType" class="form-label">Type Switcher</label>
                    <select name="form_product_type" id="productType" class="form-input">
                        <option selected>DVD</option>
                        <option>Furniture</option>
                        <option>Book</option>
                    </select>
                </div>
                <div class="ajax-form">
                    <!-- Ajax loaded form goes here -->
                </div>
            </form>
        </div>
        <div class="footer-wrapper">
        <span class="footer-text"> Scandiweb Test assignment</span>
        </div>
    </div>
</div>
