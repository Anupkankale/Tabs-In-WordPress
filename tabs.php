 
function custom_tab_navigation_shortcode() {
    ob_start();
    ?>
    <div class="segment-section-tabs-container">
        <!-- Left Section: Tab List -->
        <div class="segment-section-tabs-list">
            <div class="segment-section-tab-item active" data-tab="1">
                <h3>Apparel, luxury & accessories Grocery</h3>
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
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Apparel, luxury & accessories Grocery">
                <h3>Apparel, luxury & accessories Grocery</h3>
                <p>Focused on providing customers with premium apparel, luxury items, and accessories tailored for a sophisticated lifestyle.</p>
            </div>
            <div class="segment-section-content-item" data-tab="2">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Grocery & hypermarkets">
                <h3>Grocery & hypermarkets</h3>
                <p>Delivering everyday essentials and a vast variety of groceries at hypermarket chains around the world.</p>
            </div>
            <div class="segment-section-content-item" data-tab="3">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Consumer electronics">
                <h3>Consumer electronics</h3>
                <p>Offering customers innovative consumer electronics, gadgets, and appliances for everyday use.</p>
            </div>
            <div class="segment-section-content-item" data-tab="4">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Drugstore, health & beauty">
                <h3>Drugstore, health & beauty</h3>
                <p>Providing customers with health, wellness, and beauty products to maintain their well-being and enhance self-care.</p>
            </div>
            <div class="segment-section-content-item" data-tab="5">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Mass merchandise & department stores">
                <h3>Mass merchandise & department stores</h3>
                <p>Supplying a wide range of merchandise to meet diverse customer needs in one convenient location.</p>
            </div>
            <div class="segment-section-content-item" data-tab="6">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Home improvement & furnishings">
                <h3>Home improvement & furnishings</h3>
                <p>Providing customers with products to improve, renovate, or maintain their homes and enhance their interiors.</p>
            </div>
            <div class="segment-section-content-item" data-tab="7">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Restaurants, Food & Beverage chains">
                <h3>Restaurants, Food & Beverage chains</h3>
                <p>Offering customers quality food and beverages through popular restaurant chains.</p>
            </div>
            <div class="segment-section-content-item" data-tab="8">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Airline retail & duty-free">
                <h3>Airline retail & duty-free</h3>
                <p>Providing travelers with a premium selection of duty-free goods and in-flight shopping experiences.</p>
            </div>
            <div class="segment-section-content-item" data-tab="9">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Convenience & fuel">
                <h3>Convenience & fuel</h3>
                <p>Delivering quick and easy access to daily essentials and fuel for on-the-go customers.</p>
            </div>
            <div class="segment-section-content-item" data-tab="10">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Off-price/discounts">
                <h3>Off-price/discounts</h3>
                <p>Bringing budget-conscious shoppers unbeatable discounts and high-value products.</p>
            </div>
            <div class="segment-section-content-item" data-tab="11">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Hotels & resorts">
                <h3>Hotels & resorts</h3>
                <p>Offering customers premium hospitality services in luxurious settings.</p>
            </div>
            <div class="segment-section-content-item" data-tab="12">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="FMCG">
                <h3>FMCG</h3>
                <p>Delivering fast-moving consumer goods that cater to everyday customer needs efficiently.</p>
            </div>
            <div class="segment-section-content-item" data-tab="13">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Specialty retail">
                <h3>Specialty retail</h3>
                <p>Providing unique, specialized products tailored to specific customer interests and lifestyles.</p>
            </div>
        </div>
    </div>


    <style>
       /* General Container */
       .segment-section-tabs-container {
    display: flex;
    font-family: lato, sans-serif;
    gap: 15%;
}

.segment-section-tabs-list {
    width: 30%;
    background-color: #fff;
    color: #000;
    padding: 20px;
    padding-left: 10%;
}

.segment-section-tabs-list h3 {
    font-size: 16px;
    color: #000000;
    margin: 10px 0;
}

.segment-section-tab-item {
    margin-bottom: 10px;
    cursor: pointer;
    opacity: 0.7;
    transition: opacity 0.3s;
}

.segment-section-tab-item.active {
    background-color: #f1cb35;  
    color: #000; 
    font-weight: bold;
    padding: 5px;
}

.segment-section-tab-item:hover {
    background-color: #f1cb35;  
    color: #000;  
}

.segment-section-tab-content {
    width: 35%;
    padding: 20px;
    position: relative;
    padding-right: 10%;
}

.segment-section-tab-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    margin-top: 15px; 
}

.segment-section-tab-content p {
    font-size: 16px;
    color: #666;  
    margin-bottom: 20px;
}

.segment-section-content-item img {
    width: 350px;
    height: auto;
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
    border-radius: 5px;
}

.segment-section-arrow {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    color: #000;
    font-size: 18px;
    margin: 5px;
    cursor: pointer;
}

.segment-section-content-item {
    display: none;
}

.segment-section-content-item.active {
    display: block;
}

.segment-section-content-item p {
    width: 340px;  
}

@media (max-width: 768px) {
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

            document.getElementById('segment-section-next-tab').addEventListener('click', () => {
                currentTab = currentTab < totalTabs ? currentTab + 1 : 1;
                updateSegmentTabs(currentTab);
            });

            document.getElementById('segment-section-prev-tab').addEventListener('click', () => {
                currentTab = currentTab > 1 ? currentTab - 1 : totalTabs;
                updateSegmentTabs(currentTab);
            });

            document.querySelectorAll('.segment-section-tab-item').forEach((tab) => {
                tab.addEventListener('click', () => {
                    currentTab = parseInt(tab.dataset.tab);
                    updateSegmentTabs(currentTab);
                });
            });
        });
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('custom_tab_navigation', 'custom_tab_navigation_shortcode');
