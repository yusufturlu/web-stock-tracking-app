
# Stok Yönetimi Uygulaması

## Proje Hakkında
Bu proje, bir kahve dükkanında stok yönetimini kolaylaştırmak amacıyla geliştirilmiştir. Kullanıcılar ürün ekleyebilir, mevcut ürünleri güncelleyebilir ve silme işlemleri yapabilir. Ayrıca, stok durumunu tablo halinde görüntüleyebilir.

---

## Kullanılan Teknolojiler
- **HTML**: Kullanıcı arayüzünün oluşturulması.
- **CSS**: Kullanıcı arayüzünün stilize edilmesi.
- **PHP**: Sunucu taraflı işlemler ve veritabanı bağlantısı.
- **MySQL**: Veritabanı yönetimi.

---

## Özellikler
- **Stok Ekleme**: Yeni bir ürün, miktarı ve tarihiyle birlikte stoklara eklenebilir.
- **Stok Güncelleme**: Mevcut bir ürünün adı, miktarı veya tarihi güncellenebilir.
- **Stok Silme**: Stoktaki bir ürün tamamen kaldırılabilir.
- **Stok Durumu Görüntüleme**: Tüm stoklar tablo halinde görüntülenebilir.

---

## Kurulum
1. Bu projeyi bilgisayarınıza klonlayın:
   ```bash
   git clone https://github.com/your-repo/kahve-dukkanı-stok-yonetimi.git
   ```
2. `htdocs` klasörüne proje dosyalarını yerleştirin.
3. Veritabanınızı oluşturun ve aşağıdaki sorguyu çalıştırarak bir tablo ekleyin:
   ```sql
   CREATE TABLE Stok (
       id INT AUTO_INCREMENT PRIMARY KEY,
       product_name VARCHAR(255) NOT NULL,
       amount INT NOT NULL,
       date DATE NOT NULL
   );
   ```
4. Proje içerisindeki veritabanı bağlantı bilgilerini güncelleyin:
   ```php
   $servername = "sunucu_adı";
   $username = "kullanıcı_adı";
   $password = "şifre";
   $dbname = "veritabanı_adı";
   ```
5. Projeyi local sunucunuzda kullanmaya başlayın.

---

## Gelecek Geliştirmeler
- **Arama Özelliği**: Belirli bir ürünü hızlıca bulmak için arama fonksiyonu.
- **Filtreleme**: Tarihe veya miktara göre stokları filtreleme özelliği.
- **Grafik Görselleştirme**: Stok durumunu görselleştirmek için grafik entegrasyonu.

---

## İletişim
Herhangi bir sorunuz veya öneriniz için aşağıdaki kanallardan iletişime geçebilirsiniz:
- **E-posta**: yusufturlu@proton.me
- **GitHub**: [Yusuf Türlü](https://github.com/yusufturlu)

--- 
# En 

# Stock Management Application

## About the Project

This project is designed to simplify stock management for a shop. Users can add products, update existing ones, delete entries, and view stock status in a table format.

## Technologies Used

- **HTML**: For building the user interface.
- **CSS**: For styling the user interface.
- **PHP**: For server-side processing and database connectivity.
- **MySQL**: For database management.

## Features

- **Add Stock**: Add a new product to the stock with its quantity and date.
- **Update Stock**: Modify the name, quantity, or date of an existing product.
- **Delete Stock**: Completely remove a product from the stock.
- **View Stock Status**: Display all stock information in a table format.

## Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/your-repo/coffee-shop-stock-management.git
   ```

2. Place the project files in your `htdocs` folder.

3. Create your database and run the following SQL query to set up the table:

   ```sql
   CREATE TABLE Stock (
       id INT AUTO_INCREMENT PRIMARY KEY,
       product_name VARCHAR(255) NOT NULL,
       amount INT NOT NULL,
       date DATE NOT NULL
   );
   ```

4. Update the database connection details in the project:

   ```php
   $servername = "your_server_name";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database_name";
   ```

5. Start using the project on your local server.

## Future Enhancements

- **Search Functionality**: Quickly find specific products using a search bar.
- **Filtering**: Filter stocks based on date or quantity.
- **Graphical Visualization**: Add charts to visualize stock data.

## Contact

For any questions or suggestions, feel free to reach out:

- **Email**: yusufturlu@proton.me
- **GitHub**: [Yusuf Türlü](https://github.com/YusufTurlu)
