[QUOTE=voidd;561c63e9a09a39f7658b456a]

agan bisa ikutin cara agan redzero



mungkin ya.. dari postag di chunk dulu kata yang diidentifikasi sebagai tempat, abis di chunk, identifikasi pola kata sebelum dan sesudah.

"biasanya" nama tempat ngebentuk chunk NP(Noun Phrasa = kata benda), ataw kalo tempatnya belum ada dikamus kata, lebih bagus, agan bisa detek itu jadi spesial entitas..

NER emang gak mudah gan, agak tricky :shakehand2

[/QUOTE]
makasih, gan, kayaknya emang ga ada cara '21 days to mastering NLP', ane bener2 ga paham lebih dari arti kata [I]corpus[/I]. ane coba pelajari lagi dari awal lewat [URL="http://shop.oreilly.com/product/9780596516499.do"]buku nlp[/URL] + penerapan NLP di bahasa indonesia (terutama di pemakaian sehari-hari) karena ane perlunya ngekstrak teks dari twitter
[QUOTE=malian;561c7b42a2c06ec0308b456d]

bukannya dari twitter api disediain y location ?
coba deh check" lage rasanya ane dl pernah make twitter api itu bisa tau location yang ngetweet dimana.
kalau gak bisa y paling berdasarkan hastag atau kata kunci aja sob.
sekarang topik NLP yang lage hangat apaan y ?
dah lama gue gak baca topik NLP lage[/QUOTE]
location kalo sebelum ngetwit emang ngaktifin, gan, kalo ga ngaktifin bakalan 'null' di array 'place' dari APInya twitter. ane mau ngambil dari twit kayak gini, gan
[CODE]
Erdogan Kunjungi Lokasi Bom Ankara http://rol.co.id/r/nw7i8c366
[/CODE]
ato
[CODE]
Pemkot Tangerang: Peternakan Babi di Bantaran Kali Cisadane Ilegal http://kom.ps/AFtcsY
[/CODE]
ane penginnya NER bisa nebak kata [B]Ankara, Tangerang, Kali Cisadane[/B]
