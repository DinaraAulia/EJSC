$files = Get-ChildItem -Path "d:\ejsc-website\app\Filament\Resources" -Filter *Resource.php -Recurse
foreach ($f in $files) {
    $content = [System.IO.File]::ReadAllText($f.FullName)
    if ($content.StartsWith("?php")) {
        $content = "<" + $content
        [System.IO.File]::WriteAllText($f.FullName, $content, (New-Object System.Text.UTF8Encoding($False)))
    }
}
