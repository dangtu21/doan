<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class FrontendController extends Controller
{
    public function index()
    {   $products['products']= product::paginate(9);
        if($key=request()->key){
            $products['products']= product::where('title','like','%' . $key . 'key')
                                            ->orWhere('description', 'LIKE', '%' . $key . '%')
                                            ->paginate(9);
        }
        return view('Frontend.index',$products);
    }
    public function home()
    {   
        $products['products']= product::paginate(9);
        

        return view('Frontend.index',$products);
    }
    public function singIn()
    {
        return view('auth.singIn');
    }
    
    public function singUP()
    {
        return view('auth.singUp');
    }
    public function products()
    {
        $products['products']= product::paginate(9);
        
        if($key=request()->key){
            $products['products']= product::where('title','like','%'.$key. '%')
                                
                                            ->paginate(9);
        }
        return view('Frontend.outProducts', $products);
    }
    public function balo()
    {
        $products['products']= product::where('category_id', 1)->paginate(9);
        if($key=request()->key){
            $products['products']= product::where('title','like','%'.$key. '%')
                                            ->paginate(9);
        }
        return view('Frontend.Balo', $products);
    }
    public function baloHocSinh()
    {
        $products['products']= product::where('category_id', 1)
                                        ->where('classify_id', 1)
                                        ->paginate(9);
                                       
        
        
        return view('Frontend.Balo.BaloHocSinh', $products);
    }
    public function baloLapTop()
    {
        $products['products']= Product::where('category_id', 1)
                                        ->where('classify_id', 2)
                                        ->paginate(9);
        
        return view('Frontend.Balo.BaloLaptop', $products);
    }
    public function baloNam()
    {
        $products['products']= Product::where('category_id', 1)
                                        ->where('classify_id', 3)
                                        ->paginate(9);
        
        return view('Frontend.Balo.BaloNam', $products);
    }
    public function baloNu()
    {
        $products['products']= Product::where('category_id', 1)
                                        ->where('classify_id', 4)
                                        ->paginate(9);
        
        return view('Frontend.Balo.BaloNu', $products);
    }
    public function baloTheThao()
    {
        $products['products']= Product::where('category_id', 1)
                                        ->where('classify_id', 5)
                                        ->paginate(9);
        
        return view('Frontend.Balo.BaloTheThao', $products);
    }
    public function baloThoiTrang()
    {
        $products['products']= Product::where('category_id', 1)
                                        ->where('classify_id', 6)
                                        ->paginate(9);
        
        return view('Frontend.Balo.BaloThoiTrang', $products);
    }
    public function hienthisanpham($id)
    {
        $products = Product::find($id);
        return view('Frontend.chiTietSanPham', ['product' => $products]);
    }
    public function giohang(){
        return view('Frontend.giohang');
    }
    public function thanhtoan(){
        return view('Frontend.thanhtoan');
    }
    
}
?>