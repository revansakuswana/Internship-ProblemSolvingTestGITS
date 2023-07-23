# Test-GIts
2. Kompleksitas kodingan di atas adalah O(n), di mana n adalah panjang dari string input. Ini karena setiap karakter dalam string input diiterasi satu per satu untuk memeriksa kecocokan braket. Operasi yang dilakukan dalam iterasi meliputi penggunaan stack yang memiliki kompleksitas O(1) untuk push dan pop.
   
3. Detail kompleksitas kodingan:
- Iterasi melalui string input menggunakan str_split memiliki kompleksitas O(n), di mana n adalah panjang string input.
- Setiap karakter dalam string input dicek apakah merupakan braket buka atau braket tutup, ini dilakukan dengan kompleksitas O(1) karena hanya ada 6 kemungkinan karakter braket yang valid.
- Jika karakter adalah braket buka, maka akan dimasukkan ke dalam stack dengan kompleksitas O(1) menggunakan array_push.
- Jika karakter adalah braket tutup, maka akan dilakukan pengecekan apakah braket tutup tersebut memiliki pasangan braket buka di dalam stack dengan kompleksitas O(1) menggunakan associative array $bracketPairs.
- Jika karakter adalah braket tutup tanpa pasangan braket buka yang sesuai, maka fungsi akan langsung mengembalikan "NO".
- Jika semua karakter telah diiterasi, maka fungsi akan memeriksa apakah stack kosong atau tidak. Jika tidak kosong, berarti masih ada braket buka tanpa pasangan braket tutup yang sesuai, dan fungsi akan mengembalikan "NO".
- Jika stack kosong, berarti seluruh braket telah berpasangan dengan benar, dan fungsi akan mengembalikan "YES".
