jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'kids_toys_store_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// WordClever – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const kids_toys_store_button = document.getElementById('install-activate-button');

    if (!kids_toys_store_button) return;

    kids_toys_store_button.addEventListener('click', function (e) {
        e.preventDefault();

        const kids_toys_store_redirectUrl = kids_toys_store_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const kids_toys_store_checkData = new FormData();
        kids_toys_store_checkData.append('action', 'check_wordclever_activation');

        fetch(installWordcleverData.ajaxurl, {
            method: 'POST',
            body: kids_toys_store_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = kids_toys_store_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                kids_toys_store_button.textContent = 'Installing & Activating...';

                const kids_toys_store_installData = new FormData();
                kids_toys_store_installData.append('action', 'install_and_activate_wordclever_plugin');
                kids_toys_store_installData.append('_ajax_nonce', installWordcleverData.nonce);

                fetch(installWordcleverData.ajaxurl, {
                    method: 'POST',
                    body: kids_toys_store_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = kids_toys_store_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        kids_toys_store_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    kids_toys_store_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
