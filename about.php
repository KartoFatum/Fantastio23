<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https: //fonts.googleapis.com/css2?family= Raleway :wght@200 & display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?Php require "blocks/header.php"?>
<!--<div class="wrapper mt-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!---->
<!--            <div class="product-cards mb-5">-->
<!---->
<!--                --><?php //if (!empty($products)): ?>
<!--                    --><?php //foreach ($products as $product): ?>
<!--                        <div class="product-card">-->
<!--                            <div class="offer">-->
<!--                                --><?php //if ($product['hit']): ?>
<!--                                    <div class="offer-hit">Hit</div>-->
<!--                                --><?php //endif; ?>
<!--                                --><?php //if ($product['sale']): ?>
<!--                                    <div class="offer-sale">Sale</div>-->
<!--                                --><?php //endif; ?>
<!--                            </div>-->
<!--                            <div class="card-thumb">-->
<!--                                <a href="#"><img src="img/--><?//= $product['img'] ?><!--" alt="--><?//= $product['title'] ?><!--"></a>-->
<!--                            </div>-->
<!--                            <div class="card-caption">-->
<!--                                <div class="card-title">-->
<!--                                    <a href="#">--><?//= $product['title'] ?><!--</a>-->
<!--                                </div>-->
<!--                                <div class="card-price text-center">-->
<!--                                    --><?php //if ($product['old_price']): ?>
<!--                                        <del>--><?//= $product['old_price'] ?><!-- грн.</del>-->
<!--                                    --><?php //endif; ?>
<!--                                    --><?//= $product['price'] ?><!-- грн.-->
<!--                                </div>-->
<!--                                <a href="?cart=add&id=--><?//= $product['id'] ?><!--" class="btn btn-info btn-block add-to-cart" data-id="--><?//= $product['id'] ?><!--">-->
<!--                                    <i class="fas fa-cart-arrow-down"></i> Купить-->
<!--                                </a>-->
<!--                                <div class="item-status"><i class="fas fa-check text-success"></i> В наличии</div>-->
<!--                            </div>-->
<!--                        </div><!-- /product-card -->-->
<!--                    --><?php //endforeach; ?>
<!--                --><?php //endif; ?>
<!---->
<!--            </div><!-- /product-cards -->-->
<!---->
<!--        </div><!-- /row -->-->
<!---->
<!--        <div class="row">-->
<!--            <nav aria-label="Page navigation example">-->
<!--                <ul class="pagination">-->
<!--                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
<!--                    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--        </div><!-- /row -->-->
<!---->
<!--    </div><!-- /container -->-->
<!--</div><!-- /wrapper -->-->
<!---->
<!--<!-- Modal -->-->
<!--<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-xl">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th scope="col">Image</th>-->
<!--                        <th scope="col">Title</th>-->
<!--                        <th scope="col">Price</th>-->
<!--                        <th scope="col">Qty</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td><a href="product.html"><img src="img/1.jpg" alt="CORT AD810M Акустическая гитара"></a></td>-->
<!--                        <td><a href="product.html">CORT AD810M Акустическая гитара</a></td>-->
<!--                        <td>2 799</td>-->
<!--                        <td>1</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="product.html"><img src="img/2.jpg" alt="Crafter D6/N Акустическая гитара"></a></td>-->
<!--                        <td><a href="product.html">Crafter D6/N Акустическая гитара</a></td>-->
<!--                        <td>12 626</td>-->
<!--                        <td>2</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td colspan="4" align="right">Товаров: 3 <br> Сумма: 28 051 грн.</td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Оформить заказ</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->




<?Php require "blocks/footer.php"?>
<script src="js/Script.js"></script>
</body>
</html>