## วิธีการใช้งาน
### 1. สร้าง .env ไฟล์
	$ cp .env-example .env
``` 
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel 
```

### 2. install dependencies ด้วย composer
	$ composer install

### 3. รัน Docker
	$ docker-compose up -d --build

### 4. Migrate DB เพื่อใช้งานระบบ Authen ของ Laravel
	$ docker exec app php artisan migrate

# เงื่อนไขในการทดสอบ
* เวลาในการทดสอบ 1 ชั่วโมง
* ไม่เน้น UX/UI ขอให้ระบบสามารทำงานตาม Requirement ได้
* ต้อง authen ก่อนเท่านั้น ถึงจะสามารถใช้ระบบบันทึกข้อความได้
### 1. ระบบสามารถเก็บข้อความที่ต้องการที่จะบันทึกได้ โดยจะเก็บเป็น หัวข้อ และข้อความ
	# ตัวอย่าง Field ที่เก็บข้อมูล
	title varchar(255) 
	message text
	timestamp
- [ ] ไฟล์ migration
- [ ] ไฟล์ model
- [ ] ไฟล์ controller
### 2. ระบบสามารถแสดงตารางของข้อความได้ โดยจะแสดง หัวข้อ วัน/เดือน/ปี ในการสร้าง/แก้ไขล่าสุด และ ระบบสามารถเพิ่ม ลบ หรือ แก้ไข ข้อความได้
- [ ] View ในการแสดงข้อมูลตารางของข้อความ
- [ ] ปุ่มในการ เพิ่ม ลบ หรือ แก้ไข ข้อความ
### 3. ระบบสามารถแสดงรายละเอียดของข้อความได้ เมื่อคลิกที่หัวข้อของข้อความ
- [ ] View ในการแสดงรายละเอียดข้อความ
### 4. การใช้งาน Docker
- [ ] สามารถใช้งาน docker ในการทำงานได้
### 5. การใช้งาน Git
- [ ] สามารถใช้งาน git clone
- [ ] สามารถใช้งาน git pull request
- [ ] สามารถใช้งาน git merge
