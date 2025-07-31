cd /d C:\xampp\htdocs\suitecrm

rem 1. Tạo các thư mục nếu chưa có
mkdir var\cache 2>nul
mkdir var\log 2>nul
mkdir public\legacy\cache\upload\import 2>nul
mkdir public\legacy\custom 2>nul
mkdir public\legacy\modules 2>nul
mkdir public\legacy\upload 2>nul

rem 2. Bỏ thuộc tính Read-only (nếu có)
attrib -R /S /D *.*

rem 3. Cấp quyền Modify cho nhóm Users (kế thừa xuống file con)
icacls var\cache /grant Users:(OI)(CI)M /T
icacls var\log   /grant Users:(OI)(CI)M /T

icacls public\legacy\cache   /grant Users:(OI)(CI)M /T
icacls public\legacy\custom  /grant Users:(OI)(CI)M /T
icacls public\legacy\modules /grant Users:(OI)(CI)M /T
icacls public\legacy\upload  /grant Users:(OI)(CI)M /T

rem 4. File cấu hình override cũng cần ghi được (tạo file rỗng nếu chưa có)
type NUL > public\legacy\config_override.php
icacls public\legacy\config_override.php /grant Users:M
