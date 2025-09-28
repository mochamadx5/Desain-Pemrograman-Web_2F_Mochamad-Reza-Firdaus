<?php
$menu = [
    [ "nama" => "Beranda" ],
    [ 
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [ "nama" => "Pantai" ],
                    [ "nama" => "Gunung" ]
                ]
            ],
            [ "nama" => "Kuliner" ],
            [ "nama" => "Hiburan" ]
        ]
    ],
    [ "nama" => "Tentang" ],
    [ "nama" => "Kontak" ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        // cek apakah ada subMenu
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // panggil rekursif
        }
        echo "</li>";
    }
    echo "</ul>";
}

// memanggil fungsi utama
tampilkanMenuBertingkat($menu);
?>
