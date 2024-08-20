<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hello</h1>

<?php
echo '<p style="text-align: center; color: green;">Xin chào TMU</p>';
echo '<button style="background-color:red;">click</button>';
echo '<a target="_blank" href ="https://www.youtube.com/">Youtube</a>';

echo '<form style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">';
echo '<h2 style="text-align: center;">Đăng ký</h2>';
echo '<label for="name" style="display: block; margin-bottom: 8px;">Họ và tên:</label>';
echo '<input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px;" required>';
echo '<label for="email" style="display: block; margin-bottom: 8px;">Email:</label>';
echo '<input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px;" required>';
echo '<label for="message" style="display: block; margin-bottom: 8px;">Tin nhắn:</label>';
echo '<textarea id="message" name="message" rows="4" style="width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px;" required></textarea>';
echo '<button type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px;">Gửi</button>';
echo '</form>';

echo '<p style="font-weight: bold;">Chào mừng bạn đến với thế giới PHP!</p>';
echo '<p>PHP là một ngôn ngữ lập trình phổ biến được sử dụng chủ yếu để phát triển các ứng dụng web. Nó cho phép bạn tạo ra các trang web động và tương tác với người dùng.</p>';
echo '<p>Với PHP, bạn có thể xử lý dữ liệu từ cơ sở dữ liệu, tạo ra các biểu mẫu, và thực hiện nhiều chức năng khác để làm cho trang web của bạn trở nên hấp dẫn hơn.</p>';
echo '<p>Hy vọng bạn sẽ có những trải nghiệm tuyệt vời và học hỏi nhiều điều mới mẻ khi làm việc với PHP!</p>';
?>

    
</body>
</html>