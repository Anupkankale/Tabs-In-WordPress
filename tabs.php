 
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
                <h3>Home improvement & furnishings</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="3">
                <h3>Drugstore, health & beauty</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="4">
                <h3>Quick service restaurants, convenience & fuel</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="5">
                <h3>Consumer electronics</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="6">
                <h3>Off-price/discounts</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="7">
                <h3>Off-price/discounts</h3>
            </div>
            <div class="segment-section-tab-item" data-tab="8">
                <h3>Specialty retail</h3>
            </div>
        </div>

        <!-- Right Section: Content Display -->
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
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="2">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Home improvement & furnishings">
                <h3>Home improvement & furnishings</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="3">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Drugstore, health & beauty">
                <h3>Drugstore, health & beauty</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="4">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Quick service restaurants, convenience & fuel">
                <h3>Quick service restaurants, convenience & fuel</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="5">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Consumer electronics">
                <h3>Consumer electronics</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="6">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Off-price/discounts">
                <h3>Off-price/discounts</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="7">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Off-price/discounts">
                <h3>Off-price/discounts</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
            <div class="segment-section-content-item" data-tab="8">
                <img src="https://yallo.group/stage/wp-content/uploads/sites/4/2024/11/tab.jpg" alt="Specialty retail">
                <h3>Specialty retail</h3>
                <p>Home improvement & furnishings <br>
                Providing customers, including DIY enthusiasts and <br>
                professional contractors, with the products <br>
                and services needed to improve, renovate, or maintain <br>
                their homes and properties.</p>
            </div>
        </div>
    </div>

    <style>
       /* General Container */
.segment-section-tabs-container {
    display: flex;
    font-family: Arial, sans-serif;
    gap: 45px;
}

/* Tab List (Left Section) */
.segment-section-tabs-list {
    width: 30%;
    background-color: #fff;
    color: #000;
    padding: 20px;
}

/* Style for Left Section h3 */
.segment-section-tabs-list h3 {
    font-size: 16px;
    color: #000000; /* Tab text color */
    margin: 10px 0;
}

/* Tab List Items */
.segment-section-tab-item {
    margin-bottom: 20px;
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

/* Hover Effect on Tab */
.segment-section-tab-item:hover {
    background-color: #f1cb35;  
    color: #000;  
}

/* Tab Content (Right Section) */
.segment-section-tab-content {
    width: 70%;
    padding: 20px;
    position: relative;
}

/* Style for Right Section h3 */
.segment-section-tab-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    margin-top: 15px; 
}

/* Style for Right Section p (Description below h3) */
.segment-section-tab-content p {
    font-size: 16px;
    color: #666;  
    margin-bottom: 20px;
}

/* Navigation Arrows */
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

/* Content Items */
.segment-section-content-item {
    display: none;
}

.segment-section-content-item.active {
    display: block;
}

/* Media Query for Mobile */
@media (max-width: 768px) {
    .segment-section-tabs-container {
        flex-direction: column;  
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
