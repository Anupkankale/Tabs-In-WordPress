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
