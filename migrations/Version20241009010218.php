<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241009010218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, email VARCHAR(150) NOT NULL, phone VARCHAR(20) NOT NULL, address VARCHAR(255) DEFAULT NULL, type VARCHAR(10) DEFAULT NULL, activity VARCHAR(80) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, reference VARCHAR(20) NOT NULL, created_date DATETIME NOT NULL, delivery_date DATETIME NOT NULL, delivery_status VARCHAR(30) NOT NULL, total_amount NUMERIC(10, 0) NOT NULL, INDEX IDX_F52993989395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_items (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, about_order_id INT DEFAULT NULL, quantity INT NOT NULL, cost_unitaire NUMERIC(10, 0) NOT NULL, total NUMERIC(10, 0) NOT NULL, INDEX IDX_62809DB04584665A (product_id), INDEX IDX_62809DB0C1816C51 (about_order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, about_order_id INT DEFAULT NULL, paid NUMERIC(10, 0) NOT NULL, total NUMERIC(10, 0) NOT NULL, details LONGTEXT NOT NULL, type VARCHAR(30) NOT NULL, payment_date DATETIME NOT NULL, INDEX IDX_6D28840DC1816C51 (about_order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, seller_id INT DEFAULT NULL, name VARCHAR(150) NOT NULL, cost NUMERIC(10, 0) NOT NULL, posted_date DATETIME NOT NULL, INDEX IDX_D34A04ADBCF5E72D (categorie_id), INDEX IDX_D34A04AD8DE820D9 (seller_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seller (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, email VARCHAR(120) NOT NULL, phone VARCHAR(20) NOT NULL, address VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', balance NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipping_info (id INT AUTO_INCREMENT NOT NULL, about_order_id INT DEFAULT NULL, cost NUMERIC(10, 0) NOT NULL, type VARCHAR(30) NOT NULL, address LONGTEXT NOT NULL, INDEX IDX_5A35A755C1816C51 (about_order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993989395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE order_items ADD CONSTRAINT FK_62809DB04584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE order_items ADD CONSTRAINT FK_62809DB0C1816C51 FOREIGN KEY (about_order_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DC1816C51 FOREIGN KEY (about_order_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBCF5E72D FOREIGN KEY (categorie_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD8DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('ALTER TABLE shipping_info ADD CONSTRAINT FK_5A35A755C1816C51 FOREIGN KEY (about_order_id) REFERENCES `order` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993989395C3F3');
        $this->addSql('ALTER TABLE order_items DROP FOREIGN KEY FK_62809DB04584665A');
        $this->addSql('ALTER TABLE order_items DROP FOREIGN KEY FK_62809DB0C1816C51');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DC1816C51');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBCF5E72D');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD8DE820D9');
        $this->addSql('ALTER TABLE shipping_info DROP FOREIGN KEY FK_5A35A755C1816C51');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE order_items');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE seller');
        $this->addSql('DROP TABLE shipping_info');
    }
}
