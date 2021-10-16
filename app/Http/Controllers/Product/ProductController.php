<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{


//    public function index(){
//        return view('backend.pages.product');
//    }

//    public function product(){
//
//        define('WC_CONSUMER_KEY', 'ck_f5a21d2df6ac35e6fd5f9b16e06dfea1c806a156');
//        define('WC_CONSUMER_SECRET', 'cs_77266b286cb902ccd13962b772ed10d57c5ead32');
//
//        $client = new Client([
//            // Base URI is used with relative requests
//            'base_uri' => 'https://www.satez.com.bd',
//        ]);
//        $response = $client->request('GET', '/wp-json/wc/v3/products/', [
//            'headers' => [
//                "Authorization" => "Basic ". base64_encode(WC_CONSUMER_KEY.':'.WC_CONSUMER_SECRET)
//            ],
//            'query' => [
//                'order' => '',
//                'per_page' => '-1',
//            ],
//            'verify' => false, //only needed if you are facing SSL certificate issue
//        ]);
//
//        $body = $response->getBody();
//        $products = json_decode($body);
//        return view('backend.pages.product',compact('products'));
//    }



    public function product(){

        $page = 1;
        $products = [];
        $all_products = [];

        define('WC_CONSUMER_KEY', 'ck_f5a21d2df6ac35e6fd5f9b16e06dfea1c806a156');
        define('WC_CONSUMER_SECRET', 'cs_77266b286cb902ccd13962b772ed10d57c5ead32');

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.satez.com.bd',
        ]);



        do{
            try {
                $response = $client->request('GET', '/wp-json/wc/v3/products', [
                    'headers' => [
                        "Authorization" => "Basic ". base64_encode(WC_CONSUMER_KEY.':'.WC_CONSUMER_SECRET)
                    ],
                    'query' => [
                        'per_page' => '101',
                        'page' => $page,
                        'order' => 'desc',
                    ],
                    'verify' => false, //only needed if you are facing SSL certificate issue
                ]);

                $body = $response->getBody();
                $products = [];
                $products = json_decode($body);
                return view('backend.pages.product',compact('products'));

            }catch (HttpClientException $e){
                die("Can't get products: $e");
            }
            $all_products  = array_merge($all_products,$products);
            $page++;
        } while(count($products) > 0);


//
//        $page = 1;
//        $products = [];
//        $all_products = [];
//        do{
//            try {
//                $products = $woocmmerce->get('products',array('per_page' => 100, 'page' => $page));
//            }catch(HttpClientException $e){
//                die("Can't get products: $e");
//            }
//            $all_products = array_merge($all_products,$products);
//            $page++;
//        } while (count($products) > 0);


    }
}
