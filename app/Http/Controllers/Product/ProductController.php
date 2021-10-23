<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
//use Automattic\WooCommerce\Client;

class ProductController extends Controller
{


    public function index()
    {

        $woocommerce = new Client(
            'https://www.satez.com.bd',
            'ck_f5a21d2df6ac35e6fd5f9b16e06dfea1c806a156',
            'cs_77266b286cb902ccd13962b772ed10d57c5ead32',
            [
                'version' => 'wc/v3',
            ]
        );

        $products = $woocommerce->get('products');


        return view('backend.pages.product.list', compact('products'));
    }

    public function product()
    {


        define('WC_CONSUMER_KEY', 'ck_f5a21d2df6ac35e6fd5f9b16e06dfea1c806a156');
        define('WC_CONSUMER_SECRET', 'cs_77266b286cb902ccd13962b772ed10d57c5ead32');

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.satez.com.bd',
        ]);
        $response = $client->request('GET', '/wp-json/wc/v2/products', [
            'headers' => [
                "Authorization" => "Basic " . base64_encode(WC_CONSUMER_KEY . ':' . WC_CONSUMER_SECRET)
            ],
            'query' => [
                'per_page' => '100',
                'page' => '2',
                'rel'=>"next",
            ],
            'verify' => false, //only needed if you are facing SSL certificate issue
        ]);

        $body = $response->getBody();
        $products = json_decode($body);
        return view('backend.pages.product.product', compact('products'));
    }

}
