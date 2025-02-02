<?php

namespace App\Http\Controllers;

use App\Models\LocationsModel;
use Illuminate\Http\Request;
use stdClass;

class KMeansController extends Controller
{

    /*
        NOTE:
        Ini adalah Konfigurasi Algoritma K-Means.
        Anda dapat mengubah nilai dari variabel ini sesuai dengan kebutuhan pada
        method __construct() atau langsung pada variabelnya.
     */
    protected $type_cluster = "average";    // or random
    protected $k = 3;                       // number of cluster
    protected $max_loop = 10;               // maximum loop
    protected $attribute = ['longitude', 'latitude'];  // attribute to be calculated
    public function __construct()
    {
        // Konfigurasi Algoritma K-Means...
    }


    /*
        NOTE:
        - Method index untuk bertujuan menampilkan data hasil perhitungan dataset menggunakan algoritma K-Means.
        - method ini akan memproses terlebih dahulu, kemudian mengembalikan view 'admin.kmeans.index'.
     */
    public function index()
    {
        // Mengambil data dari tabel 'locations' menggunakan model 'LocationsModel'.
        $datasets   = LocationsModel::all();
        $totalData  = $datasets->count();

        // Inisialisasi nilai awal cluster centeroid.
        $firstCenteroid = [];
        for ($i = 0; $i < $this->k; $i++) {
            $centerIndex = floor($i * $totalData / $this->k + $totalData / (2 * $this->k));
            foreach ($this->attribute as $attr) {
                $firstCenteroid[$i][$attr] = $datasets[$centerIndex]->$attr;
            }
        }

        // Menentukan Awal Centeroid Cluster
        $result = [
            [
                'centeroid' => $firstCenteroid,
                'data'      => []
            ]
        ];


        // Melakukan perulangan sebanyak $max_loop.
        for ($i = 0; $i < $this->max_loop; $i++) {
            $checkDifference = $i == 0 ? false : true;
            $tempNewCenteroid = [];

            // Melakukan perulangan sebanyak dataset.
            foreach ($datasets as $key => $item) {
                // Mencari Distance dan Cluster dengan rumus K-Means.
                $resultDistanceKmeans = $this->kmeans($item, $result[$i]['centeroid']);

                // Mencari Centeroid Baru
                foreach ($this->attribute as $attr) {
                    for ($j = 0; $j < $this->k; $j++) {
                        if ($resultDistanceKmeans['cluster'] == $j) {
                            $tempNewCenteroid[$j][$attr][] = $item->$attr;
                        }
                    }
                }

                // Check Difference: Cek perbedaan cluster dengan cluster sebelumnya.
                if ($i > 0) {
                    if ($resultDistanceKmeans['cluster'] != $result[$i - 1]['data'][$key]['cluster']) {
                        $checkDifference = false;
                    }
                }

                // Menyimpan data hasil perhitungan K-Means.
                $result[$i]['data'][] = $resultDistanceKmeans;
            }

            // Menghitung Centeroid Baru
            foreach ($tempNewCenteroid as $key => $value) {
                foreach ($value as $attr => $val) {
                    $tempNewCenteroid[$key][$attr] = array_sum($val) / count($val);
                }
            }

            // Break Loop: Jika perbedaan cluster dengan cluster sebelumnya sama.
            if ($checkDifference) {
                break;
            }

            // Menyimpan Centeroid Baru
            $result[$i + 1]['centeroid'] = $tempNewCenteroid;
            $result[$i + 1]['data'] = [];
        }
        return view(
            'admin.kmeans.index',
            ['result' => $result,]
        );
    }

    /*
        NOTE:
        - Method kmeans untuk menghitung rumus K-Means.
        - method ini akan mengembalikan nilai cluster dan jarak terdekat.
     */
    public function kmeans($data, $centers): array
    {
        $distance = [];

        foreach ($centers as $center) {
            $dist = 0;
            foreach ($this->attribute as $attr) {
                $dist += pow($data->$attr - $center[$attr], 2);
            }
            $distance[] = sqrt($dist);
        }



        return [
            'cluster'   => array_search(min($distance), $distance),
            'distance'  => min($distance)
        ];
    }
}
