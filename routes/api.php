<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/** 
 * Buyers
 */
Route::apiResource('buyers', 'Buyer\BuyerController', [ 'only' => ['index', 'show'] ]);
Route::apiResource('buyers.transactions', 'Buyer\BuyerTransactionController', [ 'only' => ['index'] ]);
Route::apiResource('buyers.products', 'Buyer\BuyerProductController', [ 'only' => ['index'] ]);
Route::apiResource('buyers.sellers', 'Buyer\BuyerSellerController', [ 'only' => ['index'] ]);
Route::apiResource('buyers.categories', 'Buyer\BuyerCategoryController', [ 'only' => ['index'] ]);


/** 
 * Categories
 */
Route::apiResource('categories', 'Category\CategoryController');
Route::apiResource('categories.products', 'Category\CategoryProductController', [ 'only' => 'index' ]);
Route::apiResource('categories.sellers', 'Category\CategorySellerController', [ 'only' => 'index' ]);
Route::apiResource('categories.transactions', 'Category\CategoryTransactionController', [ 'only' => 'index' ]);
Route::apiResource('categories.buyer', 'Category\CategoryBuyerController', [ 'only' => 'index' ]);

/** 
 * Products
 */
Route::apiResource('products', 'Product\ProductController', [ 'only' => ['index', 'show'] ]);

/** 
 * Sellers
 */
Route::apiResource('sellers', 'Seller\SellerController', [ 'only' => ['index', 'show'] ]);
Route::apiResource('sellers.transactions', 'Seller\SellerTransactionController', [ 'only' => ['index'] ]);
Route::apiResource('sellers.categories', 'Seller\SellerCategoryController', [ 'only' => ['index'] ]);
Route::apiResource('sellers.buyers', 'Seller\SellerBuyerController', [ 'only' => ['index'] ]);
Route::apiResource('sellers.products', 'Seller\SellerProductController', [ 'except' => ['create', 'show', 'edit'] ]);

/** 
 * Transactions
 */
Route::apiResource('transactions', 'Transaction\TransactionController', [ 'only' => ['index', 'show'] ]);
Route::apiResource('transactions.categories', 'Transaction\TransactionCategoryController', [ 'only' => ['index'] ]);
Route::apiResource('transactions.sellers', 'Transaction\TransactionSellerController', [ 'only' => ['index'] ]);
// Route::apiResource('transactions.buyers', 'Transaction\TransactionBuyerController', [ 'only' => ['index'] ]);

/** 
 * Users
 */
Route::apiResource('users', 'User\UserController');