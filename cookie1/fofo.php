<?php
if (isset($_POST['text_size'])) {
    setcookie('text_size', $_POST['text_size'], time() + (60*60*60*60), "/");
    $text_size = $_POST['text_size'];
} else {
    $text_size = isset($_COOKIE['text_size']) ? $_COOKIE['text_size'] : 'medium';
}

$body_class = '';
if ($text_size === 'small') {
    $body_class = 'small-text';
} elseif ($text_size === 'large') {
    $body_class = 'large-text';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настройка размера текста</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .small-text {
            font-size: 12px;
        }
        .medium-text {
            font-size: 16px;
        }
        .large-text {
            font-size: 20px;
        }
        .form-container {
            margin: 20px 0;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($body_class); ?>">
    <div class="content">
        <h1>Изменение размера текста</h1>
        <p>Этот текст будет отображаться в выбранном размере шрифта.</p>
        
        <form method="post" class="form-container">
            <label>
                <input type="radio" name="text_size" value="small" <?php echo $text_size === 'small' ? 'checked' : ''; ?>>
                Мелкий
            </label>
            <label>
                <input type="radio" name="text_size" value="medium" <?php echo $text_size === 'medium' ? 'checked' : ''; ?>>
                Средний
            </label>
            <label>
                <input type="radio" name="text_size" value="large" <?php echo $text_size === 'large' ? 'checked' : ''; ?>>
                Крупный
            </label>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>
</html>