<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\ProductSku;
use App\Services\CartService;
use App\Http\Requests\Request;
use App\Http\Requests\AddCartRequest;

class CartController extends Controller
{
    protected $cartService;

    // 利用 Laravel 的自动解析功能注入 CartService 类
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
        
    public function index(Request $request)
    {
/**
 * with(['productSku.product']) 方法用来预加载购物车里的商品和 SKU 信息。如果这里没有进行预加载而是在渲染模板时通过
 * $item->productSku->product 这种懒加载的方式，就会出现购物车中的每一项都要执行多次商品信息的 SQL 查询，
 * 导致单个页面执行的 SQL 数量过多，加载性能差的问题，也就是经典的 N + 1 查询问题。
 * 使用了预加载之后，Laravel 会通过类似 select * from product_skus where id in (xxxx) 的方式把原本需要多条 SQL 查询的数据
 * 用一条 SQL 就查到了，大大提升了执行效率。同时 Laravel 还支持通过 . 的方式加载多层级的关联关系，这里我们就通过 .
 * 提前加载了与商品 SKU 关联的商品。
 */

        $cartItems = $this->cartService->get();
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();

        return view('cart.index', ['cartItems' => $cartItems, 'addresses' => $addresses]);
    }

    public function add(AddCartRequest $request)
    {
        $this->cartService->add($request->input('sku_id'), $request->input('amount'));

        return [];
    }

    public function remove(ProductSku $sku, Request $request)
    {
        $this->cartService->remove($sku->id);

        return [];
    }
}
