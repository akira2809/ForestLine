<?php
$products = [
    [
        'product_id' => 1,
        'title' => 'Smartphone',
        'price' => 699.99,
        'price_sale' => 649.99,
        'count_buy' => 150,
        'describe' => 'Latest smartphone with advanced features',
        'category_id' => 1
    ],
    [
        'product_id' => 2,
        'title' => 'Leather Jacket',
        'price' => 199.99,
        'price_sale' => 179.99,
        'count_buy' => 50,
        'describe' => 'Premium leather jacket for men',
        'category_id' => 2
    ],
    // Thêm sản phẩm mới
    [
        'product_id' => 3,
        'title' => 'Laptop',
        'price' => 1199.99,
        'price_sale' => 1099.99,
        'count_buy' => 75,
        'describe' => 'High-performance laptop for work and gaming',
        'category_id' => 1
    ],
    [
        'product_id' => 4,
        'title' => 'Running Shoes',
        'price' => 89.99,
        'price_sale' => 79.99,
        'count_buy' => 200,
        'describe' => 'Comfortable running shoes with excellent grip',
        'category_id' => 2
    ],
    [
        'product_id' => 5,
        'title' => 'Smartwatch',
        'price' => 249.99,
        'price_sale' => 229.99,
        'count_buy' => 100,
        'describe' => 'Stylish smartwatch with multiple health tracking features',
        'category_id' => 1
    ],
    [
        'product_id' => 6,
        'title' => 'Denim Jeans',
        'price' => 49.99,
        'price_sale' => 39.99,
        'count_buy' => 150,
        'describe' => 'Classic denim jeans with a slim fit',
        'category_id' => 2
    ]
];
$schedules = [
    [
        'schedule_id' => 1,
        'departure_date' => '2023-12-01',
        'return_date' => '2023-12-10',
        'buy_count' => 10,
        'reservation_count' => 5,
        'product_id' => 1
    ]
];
$note_details = [
    [
        'note_detail_id' => 1,
        'note_id' => 1,
        'title' => 'Special Feature',
        'value' => 'Waterproof',
    ],
    [
        'note_detail_id' => 2,
        'note_id' => 2,
        'title' => 'Material',
        'value' => 'Genuine Leather',
    ]
];
$notes = [
    [
        'note_id' => 1,
        'product_id' => 1
    ],
    [
        'note_id' => 2,
        'product_id' => 2
    ]
];
$comments = [
    [
        'comment_id' => 1,
        'product_id' => 1,
        'customer_id' => 1,
        'content' => 'Great product, highly recommend!'
    ],
    [
        'comment_id' => 2,
        'product_id' => 2,
        'customer_id' => 2,
        'content' => 'Very comfortable and stylish!'
    ]
];
$order_details = [
    [
        'order_detail_id' => 1,
        'order_id' => 1,
        'product_id' => 1,
        'quantity' => 1,
        'price' => 649.99,
        'total_price' => 649.99
    ],
    [
        'order_detail_id' => 2,
        'order_id' => 2,
        'product_id' => 2,
        'quantity' => 1,
        'price' => 179.99,
        'total_price' => 179.99
    ]
];
$orders = [
    [
        'order_id' => 1,
        'customer_id' => 1,
        'date' => '2023-10-01',
        'status' => 'completed',
        'total_amount' => 649.99,
        'shipping_address' => '123 Main St, New York, NY',
        'payment_method' => 'Credit Card',
        'payment_status' => 'paid',
        'created_at' => '2023-10-01 10:00:00',
        'updated_at' => '2023-10-01 10:05:00'
    ],
    [
        'order_id' => 2,
        'customer_id' => 2,
        'date' => '2023-10-02',
        'status' => 'pending',
        'total_amount' => 179.99,
        'shipping_address' => '456 Elm St, Los Angeles, CA',
        'payment_method' => 'PayPal',
        'payment_status' => 'unpaid',
        'created_at' => '2023-10-02 14:00:00',
        'updated_at' => '2023-10-02 14:05:00'
    ]
];
$customers = [
    [
        'customer_id' => 1,
        'name' => 'John Doe',
        'phone_number' => '123456789',
        'email' => 'john.doe@example.com'
    ],
    [
        'customer_id' => 2,
        'name' => 'Jane Smith',
        'phone_number' => '987654321',
        'email' => 'jane.smith@example.com'
    ]
];
$product_images = [
    [
        'product_image_id' => 1,
        'product_id' => 1,
        'image' => 'smartphone1.jpg'
    ],
    [
        'product_image_id' => 2,
        'product_id' => 2,
        'image' => 'jacket1.jpg'
    ]
];
$categories = [
    [
        'category_id' => 1,
        'name' => 'Electronics'
    ],
    [
        'category_id' => 2,
        'name' => 'Fashion'
    ]
];
