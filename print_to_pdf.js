const puppeteer = require('puppeteer');

(async () => {
    try {
        // Launch a headless browser instance
        const browser = await puppeteer.launch();

        // Open a new page
        const page = await browser.newPage();

        // Navigate to the current page
        await page.goto('http://localhost/scheduling/pages/faculty_class_sched.php?id=27');

        // Wait for any additional content to load if necessary
        await page.waitForTimeout(2000);

        // Print the page to PDF
        await page.pdf({ path: process.argv[2], format: 'A4' });

        // Close the browser instance
        await browser.close();

        console.log('Print screen saved as PDF.');
    } catch (error) {
        console.error('Failed to capture print screen:', error);
    }
})();
