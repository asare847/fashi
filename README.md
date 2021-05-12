<p align="center">
  <img src="your_relative_path_here" width="350" title="hover text">
  <img src="your_relative_path_here_number_2_large_name" width="350" alt="accessibility text">
</p>

Website Demo: http://www.fashiecommercesite.xyz
The demo has limited permissions. Install locally for full access.

Installation
Clone the repo and cd into it
composer install
Rename or copy .env.example file to .env
php artisan key:generate
Set your database credentials in your .env file
Set your Stripe credentials in your .env file.
Specifically STRIPE_KEY and STRIPE_SECRET



Shopping Cart Package
I originally used the Crinsane/LaravelShoppingcart package but it is slow to update to the latest versions of Laravel. I now use hardevine/LaravelShoppingcart which is a forked version that updates quicker.

Windows Users - money_format() issue
The money_format function does not work in Windows. Take a look at this thread. As an alternative, just use the number_format function instead.

In app/helpers.php replace money_format line with return '$'.number_format($price / 100, 2);
In app/Product.php replace money_format line with return '$'.number_format($this->price / 100, 2);
In config/cart.php set the thousand_seperator to an empty string or you might get a 'non well formed numeric value encountered' error. It conflicts with number_format.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
