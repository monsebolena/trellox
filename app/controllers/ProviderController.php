<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Provider;
use Formacom\Models\Address;
use Formacom\Models\Phone;

class ProviderController extends Controller{
    public function index(...$params){
        $provider=Provider::all();
        //$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $provider);
    }
    public function show(...$params)  {
        if(isset($params[0])){
            $Provider=Provider::find($params[0]);
            if($Provider){
                $this->view('detail',$Provider);
                exit();
            }
        }

        header("Location: ".base_url()."Provider");
        
    }
    public function new(){
        if(isset($_POST["name"])){
            $Provider=new Provider();
            $Provider->name=$_POST["name"];
            $Provider->web=$_POST["web"];
            $Provider->save();
            if(isset($_POST["street"]) && $_POST["street"]!=""){
                $address=new Address();
                $address->street=$_POST["street"];
                $address->zip_code=$_POST["zip_code"];
                $address->city=$_POST["city"];
                $address->country=$_POST["country"];
                $Provider->addresses()->save($address);
            }
            if(isset($_POST["phonenumber"])&&$_POST["phonenumber"]!=""){
                $phone=new Phone();
                $phone->number=$_POST["phonenumber"];
                $Provider->phones()->save($phone);
            }
            header("Location: ".base_url()."Provider");

            
        }
        $this->view("new");
    }

    public function delete(...$params){
        if(isset($params[0])){
             $Provider=Provider::find($params[0]);
             if($Provider){
                $Provider->delete();
             }
        }
        header("Location: ".base_url()."Provider");

    }
   
}
?>