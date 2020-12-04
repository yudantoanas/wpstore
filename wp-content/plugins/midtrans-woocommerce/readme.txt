=== Midtrans-WooCommerce ===
Contributors: yocki, rizdaprasetya
Tags: midtrans, snap, payment, payment-gateway, credit-card, commerce, e-commerce, woocommerce, veritrans
Requires at least: 3.9.1
Tested up to: 5.5.0
Stable tag: 2.19.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Midtrans-WooCommerce is plugin for Midtrans, Indonesian Payment Gateway. Brings safety and highly dedicated to customer experience (UX) to WooCommerce

== Description ==

This plugin will allow secure online payment on your WooCommerce store, without your customer ever need to leave your WooCommerce store! 

Midtrans-WooCommerce is official plugin from [Midtrans](https://midtrans.com), Indonesian Payment Gateway. Brings safety and highly dedicated to customer experience (UX) to WooCommerce.Support various online payment channel.
Support WooCommerce v3 & v2.

Payment Method Feature:

* Credit card fullpayment and other payment methods.
* Bank transfer, internet banking for various banks
* Credit card Online & offline installment payment.
* Credit card BIN, bank transfer, and other channel promo payment.
* Credit card MIGS acquiring channel.
* Custom expiry.
* Two-click & One-click feature.
* Midtrans Snap all payment method fullpayment.

== Installation ==

1. Upload the plugin files to the `wp-content/plugins/midtrans-woocommerce` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the `Plugins` screen in WordPress
3. Go to **WooCommerce - Settings - Checkout - Midtrans** menu, fill the configuration fields.

### Midtrans MAP Configuration

1. Login to Midtrans MAP Dashboard.
2. Select the environment (sandbox or production).
3. Go to **settings - configuration**

    - Insert `http://[yourweb]/?wc-api=WC_Gateway_Midtrans` as your Payment Notification URL
    - Insert `http://[yourweb]/?wc-api=WC_Gateway_Midtrans` as your Finish, Pending and Error Redirect URL


== Frequently Asked Questions ==

= Where can find my access key (client & server key)? How to get Started? =

Register first to [Midtrans](https://account.midtrans.com/register), you will get the access key on Midtrans Dashboard.
Also please refere to this official [documentation](http://docs.midtrans.com/en/snap/integration_woocommerce.html).

= How to configure installment and other additional feature ? =

Please refer to [Wiki](https://github.com/veritrans/SNAP-Woocommerce/wiki) for full documentation and tutorial.

= Where can I report bugs? =

The best way please email to support@midtrans.com, but bugs can be reported in our [repo](https://github.com/veritrans/SNAP-Woocommerce/issues), or you can also use WordPress plugins support for reporting bugs and error. 

== Screenshots ==

1. Payment displayed as popup, your customer no need to leave your store!

2. Various payment channel

3. Support for additional feature like installment & promo.

4. Configuration page

== Changelog ==

= 2.19.0 - 2020-08-19 =
* fix library incomplete update
* bugfix save card feature
* bugfix promo feature
* better compatibility: prevent conflict of function & vars with other plugins
* updated plugin descriptions
* performance improvement on handling debit finish page

= 2.18.5 - 2020-08-14 =
* update versioning & compatibility
* input processing improvements

= 2.18.4 - 2020-06-25 =
* add acquring_bank field on credit card full payment (main payment)
* fix logic code on midtrans logger

= 2.18.3 - 2020-05-13 =
* hide 3ds and save card configuration field on midtrans subscription admin and make it active
* add plugin action links
* fix typo on description plugin detail
* improve get_environment method
* add wiki link on subscription method description
* update handling notif when order id not exist on WC dashboard
* change payment option name `Midtrans Credit Card Direct`

= 2.18.2 – 2020-04-30 =
* hot fix remove deprecated method

= 2.18.1 – 2020-04-27 =
* fix handling notif if wc_subscription not installed skip the validateSubscriptionTransaction()

= 2.18.0 – 2020-04-23 =
* add midtrans subscription method for Woocommerce Subscriptions

= 2.17.2 – 2020-04-08 =
* clean up code
* add more descriptive wording on description default value
* fix code to prevent the notif_handler class being called multiple times
* improve method setLogRequest
* add cancel transaction method

= 2.17.1 – 2020-04-06 =
* Fix code for backward compatibility php 5.6

= 2.17.0 – 2020-03-26 =
* Add Logging option on admin settings
* Refactoring code
* Tweak fullpayment payment method enabled by default
* Replace deprecated methods

= 2.16.0 =
* Replace veritrans with midtrans php lib
* Add refund method

= 2.15.0 =
* Enhance Snap API error message display
* Tested compatibility to WP v5.3

= 2.14.0 =
* Enhance finish page for BCA Klikpay

= 2.13.0 =
* Output optimization
* Add config to prevent redirect & ignore on `pending` status

= 2.12.0 =
* Updated API library to ensure smooth API connection

= 2.11.0 =
* UX improvement for pending payment

= 2.10.0 =
* Code cleanup

= 2.9.0 =
* Replace order notes to order metadata

= 2.8.0 =
* Removed separate MIGS button for installment & fullpayment
* Installment terms for online installment now configurable
* Installment banks for online installment now configurable
* Installment terms for offline installment now configurable
* Installment bank for online installment now configurable

= 2.7.0 =
* Add payment url link on order view
* Improve deny notification handling by allowing payment retries
* Add internal order notes on payment status changes from notification
* Add update payment status to on-hold synchronously via Snap onPending
* Add Google Analytics optional config

= 2.6.6 =
* Add payment instruction pdf link on pending order view
* Add Immediate Reduce Stock optional config

= 2.6.5 =
* Add use map finish url config field

= 2.6.4 =
* Add promo code config field

= 2.6.3 =
* Improve API error handling: Display API error messages to checkout page if any

= 2.6.2 =
* API Library enhancement

= 2.6.1 =
* New payment option for faster credit card transaction via browser's Payment Request API

= 2.6.0 =
* Payment page experience enhancement

= 2.4.5 =
* Optional redirection payment flow added
* Minor payment page experience enhancement

= 2.4.4 =
* Minor payment page experience enhancement

= 2.4.3 =
* Add BCA Klikpay finish page

= 2.4.2 =
* Fix Expire notification Handler
* Separate payment page into a file

= 2.4.1 =
* Backward compatibility for both WC v3 & v2

= 2.4.0 =
* Two-click & One-click feature added

= 2.3.0 =
* Custom fields feature added

= 2.2.0 =
* Clientkey to snap payment page added
* Payment method for promo config added

= 2.1.0 =
* Custom Expiry feature added

= 2.0.0 =
* Bump version to match Woocommerce official plugin repo version

= 1.0 =
* First release!
* Fullpayment feature

== Upgrade Notice ==

= 2.19.0 - 2020-08-19 =
* fix library incomplete update
* bugfix save card feature
* bugfix promo feature
* better compatibility: prevent conflict of function & vars with other plugins
* updated plugin descriptions
* performance improvement on handling debit finish page

= 2.18.4 - 2020-06-25 =
* add acquring_bank field on credit card full payment (main payment)
* fix logic code on midtrans logger

= 2.18.3 - 2020-05-13 =
* hide 3ds and save card configuration field on midtrans subscription admin and make it active
* add plugin action links
* fix typo on description plugin detail
* improve get_environment method
* add wiki link on subscription method description
* update handling notif when order id not exist on WC dashboard
* change payment option name `Midtrans Credit Card Direct`

= 2.18.2 – 2020-04-30 =
* hot fix remove deprecated method

= 2.18.1 – 2020-04-27 =
* fix handling notif if wc_subscription not installed skip the validateSubscriptionTransaction()

= 2.18.0 – 2020-04-23 =
* add midtrans subscription method for Woocommerce Subscriptions

= 2.17.2 – 2020-04-08 =
* clean up code
* add more descriptive wording on description default value
* fix code to prevent the notif_handler class being called multiple times
* improve method setLogRequest
* add cancel transaction method

= 2.17.1 – 2020-04-06 =
* Fix code for backward compatibility php 5.6

= 2.17.0 – 2020-03-26 =
* Add Logging option on admin settings
* Refactoring code
* Tweak fullpayment payment method enabled by default
* Replace deprecated methods

= 2.16.0 =
* Replace veritrans with midtrans php lib
* Add refund method

= 2.14.0 =
* Enhance finish page for BCA Klikpay

= 2.13.0 =
* Output optimization
* Add config to prevent redirect & ignore on `pending` status

= 2.12.0 =
* Updated API library to ensure smooth API connection

= 2.11.0 =
* UX improvement for pending payment

= 2.10.0 =
* Code cleanup

= 2.9.0 =
* Replace order notes to order metadata

= 2.8.0 =
* Removed separate MIGS button for installment & fullpayment
* Installment terms for online installment now configurable
* Installment banks for online installment now configurable
* Installment terms for offline installment now configurable
* Installment bank for online installment now configurable

= 2.7.0 =
* Add payment url link on order view
* Improve deny notification handling by allowing payment retries
* Add internal order notes on payment status changes from notification
* Add update payment status to on-hold synchronously via Snap onPending
* Add Google Analytics optional config
* Add Immediate Reduce Stock optional config

= 2.6.6 =
* Add payment instruction pdf link on pending order view

= 2.6.5 =
Add use map finish url config field

= 2.6.4 =
Add promo code config field

= 2.6.3 =
Improve API error handling: Display API error messages to checkout page if any

= 2.6.2 =
API Library enhancement

= 2.6.1 =
New payment option for faster credit card transaction via browser's Payment Request API

= 2.6.0 =
Payment page experience enhancement

= 2.4.5 =
Optional redirection payment flow added

= 2.4.4 =
Minor payment page experience enhancement

= 2.4.1 =
Support for WooCommerce v3 and also backward compatible with WooCommerce v2. Also some additional nice feature like 2 clicks for CC.

= 2.1.0 = 
Update for better experince with BCA KlikPay payment methods

= 1.0 =
Support additional feature like installment, MIGS acq, and bin promo.

== Get Help ==

*	[Midtrans registration](https://account.midtrans.com/register)
*	[Midtrans Documentation](https://docs.midtrans.com)
*	[Midtrans Snap API Documentation](https://snap-docs.midtrans.com)
*	[Midtrans-WooCommerce Wiki](https://github.com/veritrans/SNAP-Woocommerce/wiki)