 
function custom_tab_navigation_shortcode() {
    ob_start();
    ?>
    <div class="tabs-wrapper">
        <div class="segment-section-tabs-container">
            <!-- Left Section: Tab List -->
            <div class="segment-section-tabs-list">
                <div class="segment-section-tab-item active" data-tab="1">
                    <h3>  Apparel, luxury & accessories</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="2">
                    <h3>Grocery & hypermarkets</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="3">
                    <h3>Consumer electronics</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="4">
                    <h3>Drugstore, health & beauty</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="5">
                    <h3>Mass merchandise & department stores</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="6">
                    <h3>Home improvement & furnishings</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="7">
                    <h3>Restaurants, Food & Beverage chains</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="8">
                    <h3>Airline retail & duty-free</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="9">
                    <h3>Convenience & fuel</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="10">
                    <h3>Off-price/discounts</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="11">
                    <h3>Hotels & resorts</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="12">
                    <h3>FMCG</h3>
                </div>
                <div class="segment-section-tab-item" data-tab="13">
                    <h3>Specialty retail</h3>
                </div>
            </div>

            <!-- Right Section: Tab Content -->
            <div class="segment-section-tab-content">
                <!-- Navigation Arrows -->
                <div class="segment-section-navigation-arrows">
                    <button id="segment-section-prev-tab" class="segment-section-arrow">&lt;</button>
                    <button id="segment-section-next-tab" class="segment-section-arrow">&gt;</button>
                </div>

                <!-- Tab Content -->
                <div class="segment-section-content-item active" data-tab="1">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg1b.jpg" alt="Apparel, luxury & accessories Grocery">
                    <h3>Apparel, luxury & accessories Grocery</h3>
                    <p>Focused on providing customers with premium apparel, luxury items, and accessories tailored for a sophisticated lifestyle.</p>
                </div>

                <div class="segment-section-content-item" data-tab="2">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg2a.jpg" alt="Grocery & hypermarkets">
                    <h3>Grocery & hypermarkets</h3>
                    <p>Offering a variety of grocery products and essentials for everyday needs, including fresh produce, meats, and more.</p>
                </div>

                <div class="segment-section-content-item" data-tab="3">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg3a.jpg" alt="Consumer electronics">
                    <h3>Consumer electronics</h3>
                    <p>Technology-driven solutions for consumers, including the latest gadgets, home electronics, and wearable devices.</p>
                </div>

                <div class="segment-section-content-item" data-tab="4">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg4a.jpg" alt="Drugstore, health & beauty">
                    <h3>Drugstore, health & beauty</h3>
                    <p>Providing health-related products and beauty items, from skincare to over-the-counter medications and wellness goods.</p>
                </div>

                <div class="segment-section-content-item" data-tab="5">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg5a.jpg" alt="Mass merchandise & department stores">
                    <h3>Mass merchandise & department stores</h3>
                    <p>Offering a wide range of everyday items, including clothing, household products, and seasonal essentials at great prices.</p>
                </div>

                <div class="segment-section-content-item" data-tab="6">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg6a.jpg" alt="Home improvement & furnishings">
                    <h3>Home improvement & furnishings</h3>
                    <p>Providing tools, materials, and furniture to improve your living space, from DIY projects to full renovations.</p>
                </div>

                <div class="segment-section-content-item" data-tab="7">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg7a.jpg" alt="Restaurants, Food & Beverage chains">
                    <h3>Restaurants, Food & Beverage chains</h3>
                    <p>Offering a wide variety of dining options from popular restaurants and beverage chains across different cuisines.</p>
                </div>

                <div class="segment-section-content-item" data-tab="8">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg8a.jpg" alt="Airline retail & duty-free">
                    <h3>Airline retail & duty-free</h3>
                    <p>Providing a selection of duty-free products and unique travel items for passengers across various international airports.</p>
                </div>

                <div class="segment-section-content-item" data-tab="9">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg9a.jpg" alt="Convenience & fuel">
                    <h3>Convenience & fuel</h3>
                    <p>Offering essential convenience store products and fuel services for drivers and customers on the go.</p>
                </div>

                <div class="segment-section-content-item" data-tab="10">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg10a.jpg" alt="Off-price/discounts">
                    <h3>Off-price/discounts</h3>
                    <p>Providing discounted products on a variety of items, from clothing to home goods and everything in between.</p>
                </div>

                <div class="segment-section-content-item" data-tab="11">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg11a.jpg" alt="Hotels & resorts">
                    <h3>Hotels & resorts</h3>
                    <p>Offering luxurious stays at top hotels and resorts, from beach resorts to city escapes, all at unbeatable prices.</p>
                </div>

                <div class="segment-section-content-item" data-tab="12">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg12a.jpg" alt="FMCG">
                    <h3>FMCG</h3>
                    <p>Fast-Moving Consumer Goods that are in constant demand, including products in the food, beverage, and personal care sectors.</p>
                </div>

                <div class="segment-section-content-item" data-tab="13">
                    <img src="https://yallo.group/wp-content/uploads/2024/12/retseg13a.jpg" alt="Specialty retail">
                    <h3>Specialty retail</h3>
                    <p>Specialized stores offering a range of unique products, including niche clothing brands, collectibles, and more.</p>
                </div>
            </div>
        </div>
    </div>

    <style>
      .tabs-wrapper {
    background-color: #000;
    padding: 20px;
    border-radius: 5px;
    width: 100%;
    margin: 0 auto;
}

.segment-section-tabs-container {
    display: flex;
    font-family: Lato, sans-serif;
    gap: 10%;
    width: 100%;
}

.segment-section-tabs-list {
   /* width: 30%; */
    color: #616160;
    padding: 20px;
    padding-left: 10%;
}

.segment-section-tabs-list h3 {
    font-size: 25px;
    color: #ffffff;
    margin: 10px 0;
}

.segment-section-tab-item {
    margin-bottom: 10px;
    cursor: pointer;
    opacity: 0.7;
    transition: opacity 0.3s, color 0.3s;
    font-size: 20px;
}

.segment-section-tab-item.active {
    color: #f1cb35;
    font-weight: bold;
    padding: 5px;
}

.segment-section-tab-item:hover h3 {
    color: #f1cb35;
}

.segment-section-tab-item.active h3::before {
    content: "▶  ";
    font-size: 20px;
    color: #f1cb35;
}

.segment-section-tab-content {
    width: 35%;
    padding: 20px;
    position: relative;
    padding-right: 10%;
}

.segment-section-tab-content h3 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 10px;
}

.segment-section-tab-content p {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

.segment-section-content-item img {
    width: 350px;
    height: 380px;
    max-width: 100%;
    border-radius: 5px;
    margin-bottom: 15px;
    object-fit: cover;
}

.segment-section-navigation-arrows {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px;
}

.segment-section-arrow {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    color: #fff;
    font-size: 18px;
    margin: 5px;
    cursor: pointer;
}

.segment-section-tab-item.active h3 {
    color: #f1cb35;
    font-weight: bold;
    padding: 5px;
}

.segment-section-content-item {
    display: none;
}

.segment-section-content-item.active {
    display: block;
}

@media (max-width: 768px) {
    .tabs-wrapper {
        width: 100%;
        padding: 10px;
    }

    .segment-section-tabs-container {
        flex-direction: column;
        gap: 20px;
    }

    .segment-section-tabs-list {
        width: 100%;
        margin-bottom: 20px;
    }

    .segment-section-tab-content {
        width: 100%;
    }

    .segment-section-tabs-list h3 {
        font-size: 14px;
    }

    .segment-section-tab-content h3 {
        font-size: 16px;
    }

    .segment-section-tab-content p {
        font-size: 14px;
    }

    .segment-section-content-item img {
        border-radius: 0;
    }
}


    </style>

    <script>
         document.addEventListener('DOMContentLoaded', () => {
    let currentTab = 1;
    const totalTabs = document.querySelectorAll('.segment-section-tab-item').length;

    function updateSegmentTabs(newTab) {
        document.querySelectorAll('.segment-section-tab-item').forEach((tab) => {
            tab.classList.remove('active');
            if (parseInt(tab.dataset.tab) === newTab) {
                tab.classList.add('active');
            }
        });

        document.querySelectorAll('.segment-section-content-item').forEach((content) => {
            content.classList.remove('active');
            if (parseInt(content.dataset.tab) === newTab) {
                content.classList.add('active');
            }
        });
    }

    // Click functionality for next and previous buttons
    document.getElementById('segment-section-next-tab').addEventListener('click', () => {
        currentTab = currentTab < totalTabs ? currentTab + 1 : 1;
        updateSegmentTabs(currentTab);
    });

    document.getElementById('segment-section-prev-tab').addEventListener('click', () => {
        currentTab = currentTab > 1 ? currentTab - 1 : totalTabs;
        updateSegmentTabs(currentTab);
    });

    // Hover effect to change content
    document.querySelectorAll('.segment-section-tab-item').forEach((tab) => {
        tab.addEventListener('mouseenter', () => {
            currentTab = parseInt(tab.dataset.tab);
            updateSegmentTabs(currentTab);
        });
    });
})
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('custom_tab_navigation', 'custom_tab_navigation_shortcode');
