<?php
    // require "koneksi.php";

    // if (isset($_POST['edit'])) {        
    //     $id = $_POST['id'];
    //     $product_name = $_POST['product_name'];
    //     $category_id = $_POST['category_id'];
    //     $product_code = $_POST['product_code'];
    //     $description = $_POST['description'];
    //     $price = $_POST['price'];
    //     $unit = $_POST['unit'];
    //     $discount_amount = $_POST['discount_amount'];
    //     $stock = $_POST['stock'];
    //     $image = $_POST['image'];  

        
    // $directory = "../assets/upload/";
    // $image = $_FILES['image']['name'];
    // $allowTypes = array('jpg','png','jpeg','gif');
     
    // $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    // $fileNames = array_filter($_FILES['image']['name']); 
    // if(!empty($fileNames)){ 
    //     foreach($_FILES['image']['name'] as $key=>$val){ 
    //         // File upload path 
    //         $fileName = basename($_FILES['image']['name'][$key]); 
    //         $targetFilePath = $directory . $fileName; 
             
    //         // Check whether file type is valid 
    //         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    //         if(in_array($fileType, $allowTypes)){ 
    //             // Upload file to server 
    //             if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
    //                 // Image db insert sql 
    //                 $insertValuesSQL .= "$fileName "; 
    //             }else{ 
    //                 $errorUpload .= $_FILES['image']['name'][$key].' | '; 
    //             } 
    //         }else{ 
    //             $errorUploadType .= $_FILES['image']['name'][$key].' | '; 
    //         } 
    //     }
         
    //     // Error message 
    //     $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
    //     $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
    //     $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
        
        
    //     if(!empty($insertValuesSQL)){ 
    //         $insertValuesSQL = trim($insertValuesSQL); 
    //         // Insert image file name into database 
    //         $edit = $koneksi->query("UPDATE products SET product_name = '$product_name', category_id = '$category_id', 
    //         // product_code = '$product_code', description = '$description', price = '$price', unit = '$unit',
    //         //  discount_amount = '$discount_amount', stock = '$stock', image = '$image' WHERE id = '$id')");
    //         if($edit){ 
    //             $statusMsg = "Files are uploaded successfully.".$errorMsg;
    //         }else{ 
    //             $statusMsg = "Sorry, there was an error uploading your file."; 
    //         }
    //     }else{ 
    //         $statusMsg = "Upload failed! ".$errorMsg; 
    //     }
    // }
    //     header('Location:productcrud.php');
    // }


require "koneksi.php";

class EditProduct {
    private $koneksi;
    private $id;
    private $product_name;
    private $category_id;
    private $product_code;
    private $description;
    private $price;
    private $unit;
    private $discount_amount;
    private $stock;
    private $image;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function editProduct() {
        if (isset($_POST['edit'])) {        
            $this->id = $_POST['id'];
            $this->product_name = $_POST['product_name'];
            $this->category_id = $_POST['category_id'];
            $this->product_code = $_POST['product_code'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];
            $this->unit = $_POST['unit'];
            $this->discount_amount = $_POST['discount_amount'];
            $this->stock = $_POST['stock'];
            $this->image = $_POST['image'];  

            $directory = "../assets/upload/";
            $image = $_FILES['image']['name'];
            $allowTypes = array('jpg','png','jpeg','gif');
             
            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
            $fileNames = array_filter($_FILES['image']['name']); 
            if(!empty($fileNames)){ 
                foreach($_FILES['image']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['image']['name'][$key]); 
                    $targetFilePath = $directory . $fileName; 
                     
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            $insertValuesSQL .= "$fileName "; 
                        }else{ 
                            $errorUpload .= $_FILES['image']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['image']['name'][$key].' | '; 
                    } 
                }
                 
                // Error message 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                
                
                if(!empty($insertValuesSQL)){ 
                    $insertValuesSQL = trim($insertValuesSQL); 
                    // Insert image file name into database 
                    $edit = $this->koneksi->query("UPDATE products SET product_name = '$this->product_name', category_id = '$this->category_id', 
                    // product_code = '$this->product_code', description = '$this->description', price = '$this->price', unit = '$this->unit',
                    //  discount_amount = '$this->discount_amount', stock = '$this->stock', image = '$this->image' WHERE id = '$this->id')");
                    if($edit){ 
                        $statusMsg = "Files are uploaded successfully.".$errorMsg;
                    }else{ 
                        $statusMsg = "Sorry, there was an error uploading your file."; 
                    }
                }else{ 
                    $statusMsg = "Upload failed! ".$errorMsg; 
                }
            }
            header('Location:productcrud.php');
        }
    }
}

$editProduct = new EditProduct($koneksi);
$editProduct->editProduct();


?>
