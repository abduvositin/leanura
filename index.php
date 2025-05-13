<?php
$playlistUrl = 'https://www.youtube.com/playlist?list=PLcetZ6gSk96-FECmH9l7Vlx5VDigvgZpt';

// yt-dlp o'rnatilgan bo'lishi kerak
$output = shell_exec("yt-dlp --flat-playlist -J \"$playlistUrl\"");

$data = json_decode($output, true);

if (isset($data['entries'])) {
    foreach ($data['entries'] as $entry) {
        echo "https://www.youtube.com/watch?v=" . $entry['id'] . "<br>";
    }
} else {
    echo "Videolarni olishda xatolik yuz berdi.";
}
?>
