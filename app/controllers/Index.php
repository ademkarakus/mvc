<?php
/**
 * Description of index
 *
 * @author Adem
 */
class Index extends Controller {
    
    //put your code here
    public function __construct(){
        //Controller class'ından Türetilen __construct Methodu
        parent::__construct();
        
    }
    
    // Index Sayfasını Çalıştırır
    public function anasayfa(){
        $this->load->view("anasayfa");
    }
    
    
    //isimListele_view Dosyası İşlemeri
    public function isimListele(){
        $Index_model = $this->load->model("Index_model");
        $data['isimListele'] = $Index_model->isimListele();
        
        $this->load->view("isimListele" ,$data);
    }
    
    //yeniMakale_view Dosyası İşlemleri
    public function yeniMakale(){
        
        $this->load->view("yeniMakale");
    }

    //makaleKaydet_view Dosyası İşlemleri
    public function makaleKaydet(){
        $baslik = $_POST['baslik'];
        $icerik = $_POST['icerik'];
        $etiket = $_POST['etiket'];
        
        $Index_model = $this->load->model("Index_model");
        
        $data = array(
                    "baslik" => $baslik,
                    "icerik" => $icerik,
                    "etiket" => $etiket
                );
        
        $result = $Index_model->makaleKaydet($data);
        
            if($result == 1){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Başarı İle Gerçekleşti",
                );
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Bir Sorun Oluştu",
                );
            }
        $this->load->view("yeniMakale", $data);
        
    }
}
