<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Laravel Tutorial
https://github.com/manh17/sample_app_laravel
https://laravel.com/
sudo apt install composer
sudo apt install php libapache2-mod-php php-mysql
sudo add-apt-repository ppa:ondrej/php
sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mbstring php7.2-xmlrpc php7.2-soap php7.2-gd php7.2-xml php7.2-cli php7.2-zip
git clone https://github.com/manhngg/crud2.git
composer create-project --prefer-dist laravel/laravel sample_app_laravel
cd sample_app_laravel/
composer install --ignore-platform-reqs
composer install
mysql -u root -p
drop database sample_app_laravel;
create database sample_app_laravel;
php artisan migrate
php artisan key:generate
php artisan serve --port=8001
php artisan route:list
php artisan make:auth --> remove from laravel 6.0
https://laravel.com/docs/6.0/authentication#included-routing
composer require laravel/ui --dev
php artisan ui vue --auth
npm install && npm run dev
https://www.5balloons.info/laravel-authentication-tutorial…/
debug in view:
{{ dd($users->toArray()) }}

[ruby -v
php -v
[rails -v
php artisan --version
[rails db:create
mysql -u root -p
drop database sample_app_laravel;
create database sample_app_laravel;
use sample_app_laravel;
SHOW COLUMNS FROM users;
select * from users;
[rails db:reset
[rails db:migrate
php artisan migrate
php artisan migrate --force
[rails db:rollback STEP=5
php artisan migrate:rollback
php artisan migrate:rollback --step=5
[rails db:migrate:reset
php artisan migrate:reset
php artisan migrate
[rails db:seed
php artisan db:seed
[http://localhost:3000/rails/info/routes
php artisan route:list


sudo -u postgres psql postgres
postgres=# \l
postgres=# \c sample_app_development;
sample_app_development=# \dt
sample_app_development=# select * from active_storage_attachments;

active_storage_attachments;
id
name avatar
https://edgeguides.rubyonrails.org/association_basics.html#polymorphic-associations
record_type Variant
record_id id Variant
https://edgeguides.rubyonrails.org/association_basics.html#polymorphic-associations
blob_id has_many blob
created_at

active_storage_blobs
id
key q29gsn7wnpxscjuhldr8773qtqyr
filename
content_type image/png
metadata {"identified":true,"analyzed":true}
byte_size 74469
checksum FvudivDuIrOT0yZxns5aQg==
created_at 2019-12-16 12:19:08.2845


[rails console]
https://laravel.com/docs/master/artisan
https://laravel-news.com/laravel-tinker
https://mysterious-atoll-47182.herokuapp.com
https://laravel.com/docs/6.x/collections#method-sortby
export PATH="~/.composer/vendor/bin:$PATH"



echo 'export PATH="~/.composer/vendor/bin:$PATH"' >> ~/.bashrc
echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' >> ~/.bashrc


php artisan tinker

App\User::find(1)
App\User::where('id',1)->get()
App\User::where('id',1)->first()
App\Relationship::all()
DB::table('comments')->where('user_id', '=', 1)->delete();


INSERT INTO relationships (follower_id, followed_id) VALUES (2, 3);

INSERT INTO relationships (follower_id, followed_id) VALUES (2, 3);

INSERT INTO relationships (follower_id, followed_id) VALUES (2, 1);

$tables = \DB::select('show tables');
$columns = Schema::getColumnListing('users');

php artisan migrate:reset && php artisan migrate && php artisan db:seed

composer require fzaninotto/faker
use Faker\Factory as Faker;
$faker = Faker::create();
$name  = $faker->name;

App\Relationship::all()->pluck('follower_id') [3..51] 49
App\Relationship::all()->pluck('follower_id')->count();

App\Relationship::all()->pluck('followed_id'); [4..41] 38
App\Relationship::all()->pluck('followed_id')->count();


https://laravel.com/docs/6.x/testing

https://mysterious-atoll-47182.herokuapp.com/
