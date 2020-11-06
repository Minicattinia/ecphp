<?php
/*
Script Information :
[?] Name : Expresscrypto Auto Claim Faucet
[?] Script Version : V 9.0.1 PR TYPE A
[?] Max Faucet : 100 Faucet Links
[?] Creator : COVED 19
[?] Support : CNI Team & Member
[?] Youtube : Cyber Nuyul Indonesia
[?] Grup Sharing : t.me/CNIchannel
[?] Channel Tele : t.me/CNIfreescript

Warning for Script Users :
[!] This is not an official script
[!] This script is free, don't sell it
[!] All risks are your responsibility

[!] Note : (ikuti contoh link faucet 1 & 2) dan hapus tanda '//' di depan ////$ untuk mengaktifkannya
*/
$w1 = "https://ltcoin.club/x/doge/claim.php"
$t1 = "DOGEToken=cQ5HEYi0Qql0RP5qzfKHvJXNNKRxUrsf"
$p1 = "PHPSESSID=b0cf745d8f120246a8274e6a27cc527d"

# Link Faucet 1
//$w1 = "https://joinfaucet.com/dash/claim.php?coin=DASH";
//$t1 = "DASHToken=ULJ4oPi0QoEGLbQsumtHMBlNhB483L3z";
//$p1 = "PHPSESSID=tif8npbq4lbpcivk46ge7dj155";
# Link Faucet 2
//$w2 = "https://joinfaucet.com/dgb/claim.php?coin=DGB";
//$t2 = "DGBToken=qLKL0Zp5VO9B5RPCF9uREYi6s8oKCqWj";
//$p2 = "PHPSESSID=tif8npbq4lbpcivk46ge7dj155";
# Link Faucet 3
//$w3 = "https://joinfaucet.com/doge/claim.php?coin=DOGE";
//$t3 = "DOGEToken=7jaSAgEkhaobrqEMR16johJv7cKiuxbW";
//$p3 = "PHPSESSID=tetmo9r3uj1ofl3lnltk6njco0";
# Link Faucet 4
//$w4 = "https://joinfaucet.com/eth/claim.php?coin=ETH";
//$t4 = "ETHToken=lbYPUylgyHsEhWOKoA3r0yrPH3mMnDDw";
//$p4 = "PHPSESSID=tetmo9r3uj1ofl3lnltk6njco0";
# Link Faucet 5
//$w5 = "https://joinfaucet.com/lsk/claim.php?coin=LSK";
//$t5 = "LSKToken=GNk3Hs50wL2g9p0MTtyltingWhn8ltrf";
//$p5 = "PHPSESSID=j4eqqdi9gop8f1s0c7bo7rar60";
# Link Faucet 6
//$w6 = "https://joinfaucet.com/ltc/claim.php?coin=LTC";
//$t6 = "LTCToken=3IhRiSXLn0b2Kxcg1ErCHAKzEwXjKVWO";
//$p6 = "PHPSESSID=tetmo9r3uj1ofl3lnltk6njco0";
# Link Faucet 7
//$w7 = "https://joinfaucet.com/neo/claim.php?coin=NEO";
//$t7 = "NEOToken=Lpd1YYI2zWSZNBgFKhGmMXRDeyGrF9nA";
//$p7 = "PHPSESSID=j4eqqdi9gop8f1s0c7bo7rar60";
# Link Faucet 8
//$w8 = "https://joinfaucet.com/pot/claim.php?coin=POT";
//$t8 = "POTToken=IZRUYrsgEmK6ofvCdEHbDpDheju42WtJ";
//$p8 = "PHPSESSID=j4eqqdi9gop8f1s0c7bo7rar60";
# Link Faucet 9
//$w9 = "https://joinfaucet.com/ppc/claim.php?coin=PPC";
//$t9 = "PPCToken=C850zgjzabsw7rlJxb6A0IPDt2T8TPGC";
//$p9 = "PHPSESSID=j4eqqdi9gop8f1s0c7bo7rar60";
# Link Faucet 10
//$w10 = "https://joinfaucet.com/strat/claim.php?coin=STRAT";
//$t10 = "STRATToken=jIFHYLcImlFzZbQOYX2mjnasnJRAFAI6";
//$p10 = "PHPSESSID=n1utqpqaa27oq6hm9bkg2mm813";
# Link Faucet 11
//$w11 = "https://joinfaucet.com/trx/claim.php?coin=TRX";
//$t11 = "TRXToken=12QXZbdqh1T255PM259CTbpRItSgxS8k";
//$p11 = "PHPSESSID=tetmo9r3uj1ofl3lnltk6njco0";
# Link Faucet 12
//$w12 = "https://joinfaucet.com/waves/claim.php?coin=WAVES";
//$t12 = "WAVESToken=i5r0MY2Iuwpz0Sq8pwWTVs8JqD7x0lE2";
//$p12 = "PHPSESSID=n1utqpqaa27oq6hm9bkg2mm813";
# Link Faucet 13
//$w13 = "https://joinfaucet.com/xmr/claim.php?coin=XMR";
//$t13 = "XMRToken=zlFEAIBobUDSpW8bHKIdAl2mxWnKvSHD";
//$p13 = "PHPSESSID=n1utqpqaa27oq6hm9bkg2mm813";
# Link Faucet 14
//$w14 = "https://joinfaucet.com/xrp/claim.php?coin=XRP";
//$t14 = "XRPToken=6ZfykbrFiNmvIHIf3TrGbTq0QV8qc5J4";
//$p14 = "PHPSESSID=n1utqpqaa27oq6hm9bkg2mm813";
# Link Faucet 15
//$w15 = "https://joinfaucet.com/zec/claim.php?coin=ZEC";
//$t15 = "ZECToken=jPktjReuEYKprGK9Ghz4ZddXJOFmgupJ";
//$p15 = "PHPSESSID=n1utqpqaa27oq6hm9bkg2mm813";
# Link Faucet 16
//$w16 = "https://dogecoins.club/claim.php?coin=DOGE";
//$t16 = "DOGEToken=LKykbmuB1ybYkDKg5JW3xSTVPjKKLXJb";
//$p16 = "PHPSESSID=n3hkadmonqpctnik5rjj0kg251";
# Link Faucet 17
//$w17 = "https://bitcoinly.xyz/f/waves/claim.php?coin=WAVES";
//$t17= "WAVESToken=f8beypzT89pN4fgiWsDkZquJ07MGx0td";
//$p17 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 18
//$w18 = "https://bitcoinly.xyz/f/xmr/claim.php?coin=XMR";
//$t18 = "XMRToken=9xbql7peZfy3IBe1JNla0jVKMIcsCSdK";
//$p18 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 19
//$w19 = "https://bitcoinly.xyz/f/xrp/claim.php?coin=XRP";
//$t19 = "XRPToken=IrnPYGjX5dvE3qbugUCuLSWSSTDYsP5c";
//$p19 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 20
//$w20 = "https://ethcrypt.host/claim.php?coin=ETH";
//$t20 = "ETHToken=Vrb85W3r3ElSeSQOiWcmhTwm5i0EuiiM";
//$p20 = "PHPSESSID=e3097061ec162231fdb2562622b958b5";
# Link Faucet 21
//$w21 = "https://dutchyclaim.ovh/claim.php?coin=BCN";
//$t21 = "BCNToken=ZgX88v2lPI3BXiTAiH7a663XersGHwSx";
//$p21 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 22
//$w22 = "https://dutchyclaim.ovh/claim.php?coin=DASH";
//$t22 = "DASHToken=VbDCUwAjkkpqsWBkkHjhiP9NV0MoLJF5";
//$p22 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 23
//$w23 = "https://dutchyclaim.ovh/claim.php?coin=DGB";
//$t23 = "DGBToken=KT9POD4nJ4nnDvun2IlhIWQHVLllCh3K";
//$p23 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 24
//$w24 = "https://dutchyclaim.ovh/claim.php?coin=DOGE";
//$t24 = "DOGEToken=QOZEZSLdmZcySr896Gs4jGUW1IYvZDjL";
//$p24 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 25
//$w25 = "https://dutchyclaim.ovh/claim.php?coin=ETC";
//$t25 = "ETCToken=G3hFfU3Qbyxnbn1Ltv0GLa3fnILr29Po";
//$p25 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 26
//$w26 = "https://dutchyclaim.ovh/claim.php?coin=ETH";
//$t26 = "ETHToken=IXJk9RXfvflxZ6Npv3FOJGhigReQh0JO";
//$p26 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 27
//$w27 = "https://dutchyclaim.ovh/claim.php?coin=LSK";
//$t27 = "LSKToken=7tX9poMTBlXP8EryTCmoBu9o3iauIJfD";
//$p27 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 28
//$w28 = "https://dutchyclaim.ovh/claim.php?coin=LTC";
//$t28 = "LTCToken=JqJCVNW1AXkIgSPM9Cn1kXVfne6eJHU1";
//$p28 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 29
//$w29 = "https://dutchyclaim.ovh/claim.php?coin=NEO";
//$t29 = "NEOToken=Vb1gpp2Vf5UTNFAG7nUz06BARWGdH4Ar";
//$p29 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 30
//$w30 = "https://dutchyclaim.ovh/claim.php?coin=POT";
//$t30 = "POTToken=JkUIolKlzTlUgoSOmBhccpyHjTtQYycy";
//$p30 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 31
//$w31 = "https://dutchyclaim.ovh/claim.php?coin=PPC";
//$t31 = "PPCToken=Xj0SrzGxJa6qFaSqL9SRqei9UQRBoOt9";
//$p31 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 32
//$w32 = "https://dutchyclaim.ovh/claim.php?coin=STRAT";
//$t32 = "STRATToken=EqJ4re3mrnqIWYbFZgKEYVoGRGSCSwZY";
//$p32 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 33
//$w33 = "https://dutchyclaim.ovh/claim.php?coin=TRX";
//$t33 = "TRXToken=TW7dIX0a4ya8QkzSHlrnsy6PlRgHhs9i";
//$p33 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 34
//$w34 = "https://dutchyclaim.ovh/claim.php?coin=XMR";
//$t34 = "XMRToken=fLKOagDiGwgE24WCEz8xKx7mQXLWHIi4";
//$p34 = "PHPSESSID=kjdcddi09fc65fm961ein05ic7";
# Link Faucet 35
//$w35 = "https://dutchyclaim.ovh/claim.php?coin=XRP";
//$t35 = "XRPToken=qF9NMbKackiS1f0oxxXkVgBaleJDcS4k";
//$p35 = "PHPSESSID=q3hjovq4aa1p2v0ekek966i86g";
# Link Faucet 36
//$w36 = "https://dutchyclaim.ovh/claim.php?coin=WAVES";
//$t36 = "WAVESToken=BY8cRveWUQWB7fZrzzoCrYA0GQkRrIFE";
//$p36 = "PHPSESSID=kjdcddi09fc65fm961ein05ic7";
# Link Faucet 37
//$w37 = "https://dutchyclaim.ovh/claim.php?coin=ZEC";
//$t37 = "ZECToken=Qpn079awD060Z8KeS9G1JdXDWIxnE3tW";
//$p37 = "PHPSESSID=kjdcddi09fc65fm961ein05ic7";
# Link Faucet 38
//$w38= "https://bitcoinly.xyz/f/zec/claim.php?coin=ZEC";
//$t38 = "ZECToken=xaJuJp1f5wNfW13FXxj2uzty0YgDokp1";
//$p38 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 39
//$w39 = "https://bitcoinly.xyz/f/exg/claim.php?coin=EXG";
//$t39 = "EXGToken=p3WTYk3Uen6djAJDyJEVNCsmjfoRE1bE";
//$p39 = "PHPSESSID=318e3201f921bd44fea6edfdc703b2da";
# Link Faucet 40
//$w40 = "https://bitcoinly.xyz/f/exs/claim.php?coin=EXS";
//$t40 = "EXSToken=A9oetNnNxRZtNWmEhiSHpExs62X5KEAW";
//$p40 = "PHPSESSID=318e3201f921bd44fea6edfdc703b2da";
# Link Faucet 41
//$w41 = "https://bitcoinly.xyz/f/dgb/claim.php?coin=DGB";
//$t41 = "DGBToken=6ZtPnldxkcLqhs33Y261PGYNO9NWAWpl";
//$p41 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 42
//$w42 = "https://bitcoinly.xyz/f/etc/claim.php?coin=ETC";
//$t42 = "ETCToken=NmLaXG58MkM0ae8NqLrQsFIt5NKt4Xu6";
//$p42 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 43
//$w43 = "https://bitcoinly.xyz/f/bch/claim.php?coin=BCH";
//$t43 = "BCHToken=fLO91aIE0xnQlueWV6KekRUqFwjpCNz6";
//$p43 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 44
//$w44 = "https://bitcoinly.xyz/f/bcn/claim.php?coin=BCN";
//$t44 = "BCNToken=ybXzZG0lwFUoQ8BidibuwUz3JVgT14MA";
//$p44 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 45
//$w45 = "https://bitcoinly.xyz/f/lsk/claim.php?coin=LSK";
//$t45 = "LSKToken=N387SlYpKOS2IeUo0uO8lRXBMnX8XVFH";
//$p45 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 46
//$w46 = "https://bitcoinly.xyz/f/neo/claim.php?coin=NEO";
//$t46 = "NEOToken=LIzzKwlv4EsaZwJLGZWk0QDMViixjYnQ";
//$p46 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 47
//$w47 = "https://bitcoinly.xyz/f/pot/claim.php?coin=POT";
//$t47 = "POTToken=1xWvMHQRIaRVIk2fymlLyNFZ5xDx0rBK";
//$p47 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 48
//$w48 = "https://bitcoinly.xyz/f/ppc/claim.php?coin=PPC";
//$t48 = "PPCToken=TdXsCCyszmNRF2HNnJgK7mYNshGu7IO8";
//$p48 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 49
//$w49 = "https://bitcoinly.xyz/f/strat/claim.php?coin=STRAT";
//$t49 = "STRATToken=c9QhH3Mdk9hppyJReXpxCC6TxtuCkxcN";
//$p49 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";
# Link Faucet 50
//$w50 = "https://bitcoinly.xyz/f/trx/claim.php?coin=TRX";
//$t50 = "TRXToken=UvobhxnUyIFdq4P2P1CRwQsSTjRIrzca";
//$p50 = "PHPSESSID=d8151f9577c41b15462f5703a04975c5";

/*
# Info penting script "COVED 19" (wajib di baca).

# Peringatan!
- Semakin banyak link yang di isi proses akan semakin lama.
- Isi data dengan benar jangan kurang 1 caracter sekalipun.
- Default delay request 60 detik / 1 menit.
- Selalu cek wallet expresscrypto coin anda masuk atau tidak.
- Script hanya sebatas request claim ke faucet.
- Faucet membayar atau tidak bukan urusan developer.
- Jika perlu gunakan Vps ubuntu atau windows jika di rasa boros kuota atau boros batre.
- Developer hanya support, abu atau beras di tanggung sendiri.
- Jika sc ini bermanfaat share di grup atau channel youtube agar menjadi manfaat bagi orang lain.
- Bantu menjawab pertanyaan tuyulers lainnya. karena admin tidak 24 jam bisa menjawab.
- Atas support dan bantuannya ane ucapkan terima kasih.

# Bahan - bahan nuyul
- Script termux "COVED 19"
- Termux (download di playstore)
- Httpcanary (download di playstore)
- Quickedit (jika perlu)
- Browser bawaan hp
- Firefox (jika perlu)
- Android 
- Koneksi Internet
- Wifi (jika tersedia)
- VPS (jika perlu)

# Langkah - langkah penggunaan Script.

A. Capture userid.
- Buka website link faucet menggunakan akun yang sudah terdaftar.
- Buka aplikasi httpcanary dan capture browser yang di gunakan.
- Klik titik 3 di pojok kanan atas httpcanary dan filter server host.
- Centang website faucet dan kembali kehalaman utama httpcanary.
- Pilih GET dengan url https://urlwebsite.faucet/claim.php?coin=DOGE (contohnya)
- Klik tab "Request" scroll ke bawah dan copy url, token koin, phpsesid anda ke kolom di atas.
- Lihat contoh link faucet dan format datanya di data paling atas.
- Tutup aplikasi httpcanary & tutup browser anda.

B. Running Script.
- Buka termux di handphone anda.
- Ekstrak file & arahkan termux ke file tersebut dengan command "cd".
- Ketik perintah "php bot.php" script akan running & relax.
- Jangan panik ketika sc tidak berjalan normal, sc sudah di tes, coba cek lagi lebih teliti.

# List Faucet yang support dengan script ini

# TYPE A

- bitcoinly.xyz
- bitdoge.xyz
- claimcoinfree.com
- coincycles.com
- coindailytimes.com
- cryptolux.tk
- dgbcoin.xyz
- dogecoins.club
- dutchyclaim.ovh
- earnyourbtc.online
- earnyourbtc.site
- ethcrypt.host
- faucetbr.tk
- faucetdogecoins.com
- freecoins.pw
- freegetcoin.com
- getdoge.club
- getdogecoins.com
- happyclaim.xyz
- joinfaucet.com
- incrypto.club
- ltcoin.club
- procoinadvice.com
- profaucet.xyz
- wavestop.xyz

Note : 
- jika ada info web faucet yang serupa yang tidak tercantum di atas harap japri ane.
- faucet nya legit gak bang? kagak tau cek sendiri.. bukan urusan ane.

# Fitur.
- Script Gratis tanpa premium user.
- Support Android, Linux, Windows & Mac.
- Pengaturan Delay Request yang fleksible.
- Support multi link faucet sampai dengan 50 link.
- Support claim multi link faucet secara bersamaan.

# Update [V 9.0.1].
- Optimasi Code Algorima.
- Support Multi Thread.
- Time request yang lebih optimal.
- Perbaikan bug tidak bisa membaca data.

# Update [V 8.0.1].
- Rework All code Structur.
- Penambahan fitur Auto Self Update.
- Penambahan fitur Instal Termux Packet.

# Update [V 7.0.1].
- Perubahan server host.
- Penambahan fitur cek server.
- Penambahan fitur support internet lemot.

# Update [V 6.0.1].
- Fix Bug Force stop.
- Penambahan fitur auto save password.
- Penambahan Support 50 Links.

# Update [V 5.0.1].
- Kolaborasi dengan creator Wirz & Yuda
- New CNI Project.
- Penambahan Script Key.
- Penambahan auto announcement.
- Perubahan Algoritma pembacaan data.
- Perubahan user interface.
- Perubahan input cfg.php.
- Fix Bug wrong data.

# Update [V 4.0.1].
- Fix bug "Claim Failed".

# Update [V 3.0.1].
- Perubahan Algoritma pembacaan data.
- Peningkatan efektifitas waktu.
- Peningkatan user interface.

# Update [V 2.0.1].
- Perubahan Algoritma pembacaan data.
- Peningkatan efektifitas waktu.
- Peningkatan user interface.
- Penambahan Script Guide.
- Penambahan jumlah max account.
- Fix bug link faucet kosong.
- Fix delay request di 60 detik / 1 menit.
- Penambahan fitur cek koneksi internet.

# Update [V 1.0.1].
- Rilis Perdana Expresscrypto Auto Claim Faucet.
- Max account 20 link faucet

# Resiko.
- Script ini bukan aplikasi official yang legal.
- Akun anda mungkin terdeteksi multi akun.
- Banned sementara atau selamanya dari website officialnya.
- Tidak bisa withdraw ke wallet pribadi.
- Dan resiko lainnya dalam menuyul.

# Note.
- Selalu pahami resiko menggunakan script tuyul.
- Segala resiko yang di timbulkan oleh script ini bukan tanggung jawab developer.
- Script ini di buat untuk memudahkan anda & efisienkan waktu anda.
- Gunakan email yang & wallet address yang berbeda saat mendaftar.
- Gunakan wallet yang support multi address, contoh : Indodax atau Luno.
- Jangan Panik ketika akun anda di ban, tenang tarik napas, minum air, makan, bikin akun lagi.
- Free to use & share, jika sc ini bermanfaat sebarkan di grup sc lainnya atau jadikan konten youtube.
- Pengen dapet uang tambahan? jangan jual sc ini!, tapi upload dan short url link downloadnya di jasa shortlink beriklan, lalu sebar.
- Jangan terlalu serius! santai aja. jangan jadikan ini sebagai penghasilan utama anda.
- Relax, Tenang, Beras atau Abu? bukan urusan developer.
- Gak tau cara ini dan itu, coba cari di youtube dulu baru bertanya di grup.
- Jaga kesehatan, sering cuci tangan, #DiRumahAja #NuyulFromHome.

# NB.
- Ente ada saran yang membangun untuk sc baru atau update sc? japri ane di telegram.
- SC yang di rilis publik sudah melalui tahap tester oleh beberapa pengguna, jika sc tidak normal santuy aja, jangan panik.
- Ane rilis sc ini hanya untuk mempermudah ente, jangan dibully apa lagi sampe berkata kasar, situ sopan ane segan.
- Ane uda cape cape bikin penjelasan, di baca dulu, jangan tanya kalau ada jawabannya.
*/
?>