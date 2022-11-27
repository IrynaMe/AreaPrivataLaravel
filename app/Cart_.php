<?php
    
    namespace App;

    class Cart
    {
        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;


        public function __construct($oldCart)
        {
            if ($oldCart) {
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }
        }

        public function add($item, $service_id)
        {
            $storedItem = ['qty' => 0, 'service_id' => 0, 'service_name' => $item->name, 'service_discount' => $item->discount,
        'service_price' => $item->price, 'service_image' => $item->image, 'item' =>$item];

            if ($this->items) {
                if (array_key_exists($service_id, $this->items)) {
                    $storedItem = $this->items[$service_id];
                }
            }

            $storedItem['qty']++;
            $storedItem['service_id'] = $service_id;
            $storedItem['service_name'] = $item->name;
            $storedItem['service_discount'] = $item->discount;
            // $storedItem['service_price'] = $item->price;
            $price=$item->discount>0?$item->discount:$item->price;
            $storedItem['service_price'] =$price;
            
            $storedItem['service_image'] = $item->image;
            $this->totalQty++;
            $this->totalPrice += $price;
            $this->items[$service_id] = $storedItem;
        }

        public function updateQty($id, $qty)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->items[$id]['service_price']=$this->items[$id]['service_discount']>0?$this->items[$id]['service_discount']:
            $this->items[$id]['service_price'];
            $this->totalPrice -= $this->items[$id]['service_price'] * $this->items[$id]['qty'];
            $this->items[$id]['qty'] = $qty;
            $this->totalQty += $qty;
            $this->totalPrice += $this->items[$id]['service_price'] * $qty;
        }

        public function removeItem($id)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['service_price'] * $this->items[$id]['qty'];
            unset($this->items[$id]);
        }
    }
