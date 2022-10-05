<?php
class product{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?float $price = null;
    public ?string $imagepath = null;
    public ?array $imagefile = null;

    public function load ($data)
    {
        $this->id = $data ['id'] ??null;
        $this->title = $data ['title'];
        $this->description = $data ['description'] ?? '';
        $this->price = $data ['price'];
        $this->imagefile= $data ['imagefile'] ??null;
        $this->imagepath = $data ['imagepath'] ??null;
    }
    public function save ()
    {
        $errors = [];
        if (!$this->title){
            $errors[] = 'product title is required';
        }
        if (!$this->price) {
            $errors[] = 'product price is required';
        }
        if(!is_dir( __DIR__ .'/../public/images')) {
            mkdir(__DIR__ .'/../public/images');
        }
        if(empty($errors)) {
        
            if ($this ->imagefile && $this->imagefile['tmp_name']) {
            if ($this->imagepath) {
                unlink( __DIR__ .'/../public/' .$this->imagepath);
            }
            $this->imagePath = 'images/' .utilhelper::randomString(8) . '/' . $image['name'];
            mkdir(dirname( __DIR__ . '/../public/'. $this->imagePath));move_uploaded_file($image['tmp_name'], __DIR__ . '/public/'. $imagePath );
            }
            } 
            return $errors;
    }

}