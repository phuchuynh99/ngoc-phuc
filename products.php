<?php
$products = [
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/mài 1.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Sơn móng'
    ],
    [
        'name' => 'Máy mài móng tay PMT08',
        'image' => 'img/mài 2.webp',
        'original_price' => 350000,
        'discount_price' => 300000,
        'category' => 'Dụng cụ'
    ],
    [
        'name' => 'Máy mài móng tay PMT08',
        'image' => 'img/mài 3.webp',
        'original_price' => 350000,
        'discount_price' => 300000,
        'category' => 'Thiết bị'
    ],
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/mài 4.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Sơn móng'
    ],
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/máy hơ 1.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Đồ phơi sấy'
    ],
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/máy hơ 2.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Móng giả'
    ],
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/kiềm.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Sơn móng'
    ],
    [
        'name' => 'Dũa móng tay Halfmoon',
        'image' => 'img/dũa móng.webp',
        'original_price' => 300000,
        'discount_price' => 270000,
        'category' => 'Dụng cụ'
    ]
];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all-products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 mb-4">
                <div class="bg-white p-3 rounded shadow-sm">
                    <h4 class="fw-bold">DANH MỤC</h4>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-decoration-none text-dark">Sơn móng</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Dụng cụ</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Thiết bị làm móng</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Sản phẩm trang trí móng</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Móng giả</a></li>
                    </ul>
                </div>
            </aside>

            <!-- product -->
            <section class="col-md-9">
                <div class="row g-4">

                    <div class="col-md-3 col-sm-6">
                        <div class="p-card text-center shadow-sm p-3">
                            <img src="img/mài 1.webp" class="p-img img-fluid" alt="">
                            <h5 class="p-name mt-3">Dũa móng tay Halfmoon</h5>
                            <p class="orig-price text-muted"><del>300,000₫</del></p>
                            <p class="disc-price">270,000₫</p>
                            <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                                <button class="btn-cart d-flex align-items-center">
                                    <i class="bi bi-cart"></i>
                                </button>
                                <button class="btn-buy">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
