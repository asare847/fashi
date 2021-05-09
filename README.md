

Website Demo: http://www.fashiecommercesite.xyz/ The demo has limited permissions. Install locally for full access.

Installation
Clone the repo and cd into it
composer install
Rename or copy .env.example file to .env
php artisan key:generate
Set your database credentials in your .env file
Set your Stripe credentials in your .env file. Specifically STRIPE_KEY and STRIPE_SECRET
Set your Algolia credentials in your .env file. Specifically ALGOLIA_APP_ID and ALGOLIA_SECRET. See this episode.
Set your Braintree credentials in your .env file if you want to use PayPal. Specifically BT_MERCHANT_ID, BT_PUBLIC_KEY, BT_PRIVATE_KEY. See this episode. If you don't, it should still work but won't show the paypal payment at checkout.
Set your APP_URL in your .env file. This is needed for Voyager to correctly resolve asset URLs.
Set ADMIN_PASSWORD in your .env file if you want to specify an admin password. If not, the default password is 'password'
php artisan ecommerce:install. This will migrate the database and run any seeders necessary. See this episode.
npm install
npm run dev
php artisan serve or use Laravel Valet or Laravel Homestead
Visit localhost:8000 in your browser
Visit /admin if you want to access the Voyager admin backend. Admin User/Password: admin@admin.com/password. Admin Web User/Password: adminweb@adminweb.com/password
Shopping Cart Package
I originally used the Crinsane/LaravelShoppingcart package but it is slow to update to the latest versions of Laravel. I now use hardevine/LaravelShoppingcart which is a forked version that updates quicker.

Windows Users - money_format() issue
The money_format function does not work in Windows. Take a look at this thread. As an alternative, just use the number_format function instead.

In app/helpers.php replace money_format line with return '$'.number_format($price / 100, 2);
In app/Product.php replace money_format line with return '$'.number_format($this->price / 100, 2);
In config/cart.php set the thousand_seperator to an empty string or you might get a 'non well formed numeric value encountered' error. It conflicts with number_format.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
