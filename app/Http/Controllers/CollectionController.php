<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $myArray=[1,3,5,7,8,9];
        $collection= collect($myArray);

        /*echo "<pre>";
        var_dump($myArray);
        echo "<pre>";

        dump($collection);*/

        echo $collection[0]."<br>";
        echo $collection[5]."<br>";

        foreach ($collection as $value) {
            echo $value." ";
        }
    }

    public function collectionDua()
    {
        $myArray=["Belajar","collection","laravel",6];
        $collection=collect($myArray);

        dump($collection);

        foreach ($collection as $value){
            echo $value."<br>";
        }

        $myArray2=["nama"=>"nadya","umur"=>19];
        $collection=collect($myArray2);

        dump($collection);

        foreach ($collection as $key => $value){
            echo $key."= ".$value."<br>";
        }
    }

    public function collectionTiga()
    {
        $collection = collect([2,9,3,4,5,3,5,7]);
        $collection1 = collect(["0"=>1,"1"=>9,"2"=>3,"3"=>4,"4"=>5,"5"=>3,"6"=>5]);
        $varA = [1,2,3];
        $varB = collect ([1,2,3]);
        /*dump($collection->sum());
        dump($collection->avg());
        dump($collection->max());
        dump($collection->min());
        dump($collection->median());

        //random = mengambil satu elemen secara acak
        dump($collection->random());

        //concat = menambah elemen baru ke dalam collection
        dump($collection->concat([10,11,12]));

        //contains = validasi apakah elemen tersebut ada atau tidak
        dump ($collection->contains(18));

        //unique = menampilkan elemen yang tidak berulang(unik)
        dump($collection1->unique());

        //all = menampilkan seluruh elemen collection
        dump($collection->all());*/

        dump($varA);
        dump($varB);


    }

    public function collectionEmpat()
    {
        $collection = collect([11,1,2,3,4,5,6,7,8,9,10]);
        //first = untuk menampilkan elemen pertama di collection
        dump($collection->first());

        //last = untuk menampilkan elemen terakhir di collection
        dump($collection->last());

        //count = untuk menampilkan banyaknya elemen yang ada
        dump($collection->count());

        //sort = untuk mengurutkan elemen collection
        dump($collection->sort());

        //get = untuk menampilkan elemen index yang dipilih
        dump($collection->get(0));

        //has = untuk mengecek ke valid an apakah benar data tersebut ada atau tidak
        dump($collection->has(12));

        //replace = untuk menukar tempat sesuai dengan yang diinginlan
        dump($collection->replace([0 => 1,1 => 11]));

        //forget = melupakan nomer index yang di pilih dan tidak ada saat outputnya
        dump($collection->forget(3));
        

    }

    public function collectionLima()
    {
        $collection = collect ([
            "Nama" => "Nadya Rahma Lestanti",
            "Sekolah" => "SMAN 1 Ngawi",
            "Kota" => "Ngawi",
            "Jurusan" => "IPA",

        ]);

       dump($collection->keys());
        dump($collection->values());

        /* $collection->each(function($val,$key){
            echo "$key: $val <br>";
        });*/
    }

    public function collectionEnam()
    {
        $collection = collect ([
            ['namaproduk' => 'Laptop A', 'harga' => 5990000],
            ['namaproduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaproduk' => 'Speaker C', 'harga' => 350000],
        ]);

        //dump($collection);

        echo "fungsi urutkan berdasarkan key harga <br>";
        dump($collection->sortBy('harga'));

        echo "urutkan berdasarkan key harga secara decendants <br>";
        dump($collection->sortByDesc('harga'));

        echo "urutkan berdasarkan key harga dan tampilan sebagai array <br>";
        dump($collection->sortBy('harga')->all());

        echo "Filter untuk mengambil elemen collection dengan harga < 2000000 <br>";
        $hasil = $collection->filter(function($val, $key){
            return $val['harga'] < 2000000;
        });
        dump($hasil);

        echo "cari element yang key harga bernilai 350000 <br>";
        dump ($collection->where('harga',350000));

        echo "tampilkan nama produk yang element key lebih dari atau sama dengan 1000000 <br>";
        dump($collection->where('harga','>=',1000000));

        echo "tampilkan nama produk yang element key bernilai 350.000 <br>";
        $hasil = $collection->where('harga',350000)->first();
        echo $hasil['namaproduk']."<br>";

        echo "tampilkan nama produk yang element key harga bernilai 350000 <br>";
        $hasil = $collection->firstwhere('harga', 350000);
        echo $hasil['namaproduk']."<br>";

        echo "tampilkan nama produk yang element key harga lebih 1000000 <br>";
        $hasil = $collection->where('harga',">=",1000000)->all();
        dump ($hasil);
       
        echo "cari element dengan harga antara 100000 - 2000000 <br>";
        dump($collection->whereBetween('harga',[100000,2000000]));

        echo "cari element dengan harga bukan antara 100000 - 2000000 <br>";
        dump($collection->whereNotBetween('harga',[100000,2000000]));

        echo "cari element dengan harga 1599000,2999000 atau 3999000<br>";
        dump($collection->whereIn('harga',[1599000,2999000,3999000]));

        echo "cari element dengan harga selain 1599000,2999000 atau 3999000<br>";
        dump($collection->whereNotIn('harga',[1599000,2999000,3999000]));
    }
}
