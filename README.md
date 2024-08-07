1) Tạo file .env -> coppy từ .env example sang

2) Chạy lệnh ``composer install``

3) Chạy lệnh ``php artisan migrate``

4) Chạy lệnh
     ``php artisan config:cache``
     ``php artisan cache:clear``
     ``php artisan route:clear``
     ``php artisan view:clear``
5) Chạy ``php artisan key:generate``

6) ``php artisan config:clear``

7) Chạy ``php artisan serve``