function fixDuplicateLanguagePaths() {
    // Sửa href của tất cả các thẻ a
    jQuery('#page-wrapper a').each(function() {
        var href = jQuery(this).attr('href');

        // Chỉ xử lý các URL bắt đầu bằng https://
        if (!href || !href.startsWith('https://')) {
            return;
        }

        try {
            var url = new URL(href);
            var path = url.pathname;
            var needsUpdate = false;

            // Xử lý các trường hợp đường dẫn trùng lặp
            if (path.includes('/vi/vi/')) {
                path = path.replace('/vi/vi/', '/vi/');
                needsUpdate = true;
            } else if (path.includes('/ja/ja/')) {
                path = path.replace('/ja/ja/', '/ja/');
                needsUpdate = true;
            } else if (path.includes('/en/en/')) {
                path = path.replace('/en/en/', '/en/');
                needsUpdate = true;
            }
            
            // Kiểm tra và chuyển đổi /news sang /tin-tuc cho tiếng Việt
            if (path.includes('/vi/news')) {
                path = path.replace('/vi/news', '/vi/tin-tuc');
                needsUpdate = true;
            }
            
            // Nếu có thay đổi, cập nhật URL
            if (needsUpdate) {
                url.pathname = path;
                jQuery(this).attr('href', url.toString());
            }
        } catch (e) {
            // Bỏ qua các URL không hợp lệ
        }
    });
}
jQuery(document).ready(function() {
    fixDuplicateLanguagePaths();
});



// OLD
function fixDuplicateLanguagePaths() {
    // Sửa href của tất cả các thẻ a
    jQuery('#page-wrapper a').each(function() {
        var href = jQuery(this).attr('href');

        if (!href || href === '#' || href.startsWith('javascript:') || href.startsWith('tel:') || href.startsWith('mailto:')) {
            return;
        }

        try {
            var url = new URL(href);
            var path = url.pathname;

            // Sửa đường dẫn trùng lặp ngôn ngữ
            if (path.includes('/vi/vi/')) {
                path = path.replace('/vi/vi/', '/vi/');
                url.pathname = path;
                jQuery(this).attr('href', url.toString());
            } else if (path.includes('/ja/ja/')) {
                path = path.replace('/ja/ja/', '/ja/');
                url.pathname = path;
                jQuery(this).attr('href', url.toString());
            } else if (path.includes('/en/en/')) {
                path = path.replace('/en/en/', '/en/');
                url.pathname = path;
                jQuery(this).attr('href', url.toString());
            }
        } catch (e) {}
    });
    
    // Sửa data-url của tất cả các button type="submit"
    jQuery('#page-wrapper button[type="submit"][data-url]').each(function() {
        var dataUrl = jQuery(this).attr('data-url');
        
        if (!dataUrl || dataUrl === '') {
            return;
        }
        
        try {
            var url = new URL(dataUrl);
            var path = url.pathname;
            
            // Sửa đường dẫn trùng lặp ngôn ngữ
            if (path.includes('/vi/vi/')) {
                path = path.replace('/vi/vi/', '/vi/');
                url.pathname = path;
                jQuery(this).attr('data-url', url.toString());
            } else if (path.includes('/ja/ja/')) {
                path = path.replace('/ja/ja/', '/ja/');
                url.pathname = path;
                jQuery(this).attr('data-url', url.toString());
            } else if (path.includes('/en/en/')) {
                path = path.replace('/en/en/', '/en/');
                url.pathname = path;
                jQuery(this).attr('data-url', url.toString());
            }
        } catch (e) {}
    });
}

jQuery(document).ready(function() {
    fixDuplicateLanguagePaths();
});