<div class="container">
    <div class="row">
        <?php foreach ($products as $product) {
            echo $this->render('_product', [
                'product' => $product,
            ]);
        } ?>
    </div>
</div>