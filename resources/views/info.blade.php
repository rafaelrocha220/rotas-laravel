<h1>Info profile</h1>

<p>

@isset($info)
    @foreach ($info as $key => $value)
        <p><?php echo $key . ': ' . $value; ?></p>
    @endforeach
@endisset

@isset($teste)
    <?php var_dump($teste); ?>
@endisset

</p>